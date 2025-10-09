<?php
// helpers.php — fonctions utilitaires pour le portfolio BTS SIO (PHP only)

// Active error reporting en DEV (vous pouvez désactiver en prod)
ini_set('display_errors', '1');
error_reporting(E_ALL & ~E_NOTICE);

function h(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

function base_path(): string {
    // Détermine le chemin de base (ex: '' à la racine d'un vhost, ou '/Portfolio' sous WAMP)
    // Calcule à partir du DOCUMENT_ROOT et du répertoire projet (parent de /includes)
    static $base = null;
    if ($base !== null) return $base;
    $docRoot = isset($_SERVER['DOCUMENT_ROOT']) ? realpath($_SERVER['DOCUMENT_ROOT']) : '';
    $projectRoot = realpath(dirname(__DIR__));
    // Normalise pour comparaison (Windows: insensible à la casse)
    $docRootNorm = $docRoot ? str_replace('\\', '/', strtolower($docRoot)) : '';
    $projectRootNorm = $projectRoot ? str_replace('\\', '/', strtolower($projectRoot)) : '';
    if ($docRootNorm && $projectRootNorm && strpos($projectRootNorm, $docRootNorm) === 0) {
        $rel = str_replace('\\', '/', substr($projectRoot, strlen($docRoot)));
        $base = $rel ? '/' . ltrim($rel, '/') : '';
    } else {
        // Fallback via SCRIPT_NAME (peut contenir /pages ; on remonte au dossier parent connu)
        $script = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '/';
        // Essaie de trouver le segment du dossier projet en se basant sur le nom réel
        $projName = basename($projectRoot ?: '');
        if ($projName && preg_match('~/(?:' . preg_quote($projName, '~') . ')(?:/|$)~', $script, $m, PREG_OFFSET_CAPTURE)) {
            $pos = $m[0][1];
            $base = substr($script, 0, $pos + strlen($m[0][0]) - 1);
        } else {
            // défaut: racine
            $base = '';
        }
    }
    // Normalise: pas de slash final
    $base = rtrim($base, '/');
    return $base;
}

function asset(string $path): string {
    // Construit une URL à partir de la base du site
    return url($path);
}

function url(string $path = ''): string {
    $base = base_path();
    $path = ltrim($path, '/');
    if ($path === '') return $base ?: '/';
    return ($base ? $base : '') . '/' . $path;
}

function data_file_path(string $category): string {
    $map = [
        'cyber' => __DIR__ . '/../data/articles_cyber.json',
        'ia'    => __DIR__ . '/../data/articles_ia.json',
    ];
    return $map[$category] ?? '';
}

function load_articles(string $category): array {
    $file = data_file_path($category);
    if (!$file) return [];
    if (!file_exists($file)) return [];
    $json = file_get_contents($file);
    $data = json_decode($json, true);
    return is_array($data) ? $data : [];
}

function save_articles(string $category, array $articles): bool {
    $file = data_file_path($category);
    if (!$file) return false;
    // Assure que le dossier data existe
    $dir = dirname($file);
    if (!is_dir($dir)) @mkdir($dir, 0775, true);
    $json = json_encode($articles, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    return (bool)file_put_contents($file, $json);
}

function fetch_url(string $url): string {
    // Tente cURL puis file_get_contents avec timeout
    $ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome Safari PHP';
    // cURL
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_MAXREDIRS => 5,
            CURLOPT_TIMEOUT => 6,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_USERAGENT => $ua,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_SSL_VERIFYPEER => false,
        ]);
        $html = curl_exec($ch);
        curl_close($ch);
        if ($html) return $html;
    }
    // stream
    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => 6,
            'header' => "User-Agent: $ua\r\nAccept: text/html\r\n",
        ],
        'https' => [
            'method' => 'GET',
            'timeout' => 6,
            'header' => "User-Agent: $ua\r\nAccept: text/html\r\n",
        ]
    ]);
    $html = @file_get_contents($url, false, $context);
    return $html ?: '';
}

function absolutize_url(string $maybeRelative, string $base): string {
    if (!$maybeRelative) return '';
    if (preg_match('~^https?://~i', $maybeRelative)) return $maybeRelative;
    // Build absolute from base
    $parts = parse_url($base);
    if (!$parts || empty($parts['scheme']) || empty($parts['host'])) return $maybeRelative;
    $scheme = $parts['scheme'];
    $host = $parts['host'];
    $port = isset($parts['port']) ? ':' . $parts['port'] : '';
    $path = isset($parts['path']) ? $parts['path'] : '/';
    if ($maybeRelative[0] === '/') {
        return "$scheme://$host$port$maybeRelative";
    }
    // relative to current path
    $baseDir = preg_replace('~/[^/]*$~', '/', $path);
    return "$scheme://$host$port$baseDir$maybeRelative";
}

function extract_metadata(string $url, string $html): array {
    $title = '';
    $desc = '';
    $image = '';
    $site = parse_url($url, PHP_URL_HOST) ?: '';
    if (!$html) {
        return [
            'title' => $url,
            'description' => '',
            'image' => '',
            'site' => $site,
        ];
    }
    if (class_exists('DOMDocument')) {
        libxml_use_internal_errors(true);
        $dom = new DOMDocument();
        $loaded = @$dom->loadHTML($html);
        libxml_clear_errors();
        if ($loaded) {
            // <title>
            $titles = $dom->getElementsByTagName('title');
            if ($titles->length > 0) {
                $title = trim($titles->item(0)->textContent);
            }
            // meta tags
            $metas = $dom->getElementsByTagName('meta');
            foreach ($metas as $meta) {
                $prop = strtolower($meta->getAttribute('property'));
                $name = strtolower($meta->getAttribute('name'));
                $content = trim($meta->getAttribute('content'));
                if (!$content) continue;
                if (in_array($prop, ['og:title', 'twitter:title']) || in_array($name, ['og:title', 'twitter:title'])) {
                    $title = $content;
                }
                if (in_array($prop, ['og:description', 'twitter:description']) || in_array($name, ['description', 'og:description', 'twitter:description'])) {
                    $desc = $content;
                }
                if (in_array($prop, ['og:image', 'twitter:image']) || in_array($name, ['og:image', 'twitter:image'])) {
                    $image = $content;
                }
                if ($prop === 'og:site_name' || $name === 'og:site_name') {
                    $site = $content;
                }
            }
            // Absolutize image URL
            if ($image) {
                $image = absolutize_url($image, $url);
            }
        }
    } else {
        // Fallback simple via regex
        if (preg_match('~<title[^>]*>(.*?)</title>~is', $html, $m)) {
            $title = trim(strip_tags($m[1]));
        }
        // description
        if (preg_match('~<meta[^>]+name=[\"\']description[\"\'][^>]+content=[\"\']([^\"\']+)[\"\']~i', $html, $m)) {
            $desc = trim($m[1]);
        } elseif (preg_match('~<meta[^>]+property=[\"\']og:description[\"\'][^>]+content=[\"\']([^\"\']+)[\"\']~i', $html, $m)) {
            $desc = trim($m[1]);
        }
        // image
        if (preg_match('~<meta[^>]+property=[\"\']og:image[\"\'][^>]+content=[\"\']([^\"\']+)[\"\']~i', $html, $m)) {
            $image = absolutize_url(trim($m[1]), $url);
        } elseif (preg_match('~<meta[^>]+name=[\"\']twitter:image[\"\'][^>]+content=[\"\']([^\"\']+)[\"\']~i', $html, $m)) {
            $image = absolutize_url(trim($m[1]), $url);
        }
        // site name
        if (preg_match('~<meta[^>]+property=[\"\']og:site_name[\"\'][^>]+content=[\"\']([^\"\']+)[\"\']~i', $html, $m)) {
            $site = trim($m[1]);
        }
    }
    if (!$title) $title = $url;
    return [
        'title' => $title,
        'description' => $desc,
        'image' => $image,
        'site' => $site,
    ];
}

function add_article_from_url(string $category, string $url): array {
    $url = trim($url);
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        return ['ok' => false, 'error' => "URL invalide"];
    }
    $category = $category === 'cyber' ? 'cyber' : ($category === 'ia' ? 'ia' : '');
    if (!$category) return ['ok' => false, 'error' => 'Catégorie inconnue'];

    // Dedup simple: si l'URL existe déjà, on ignore
    $articles = load_articles($category);
    foreach ($articles as $a) {
        if (isset($a['url']) && trim($a['url']) === $url) {
            return ['ok' => true, 'article' => $a, 'message' => 'Déjà présent'];
        }
    }

    $html = fetch_url($url);
    $meta = extract_metadata($url, $html);

    $article = [
        'id' => uniqid('art_', true),
        'url' => $url,
        'title' => $meta['title'],
        'description' => $meta['description'],
        'image' => $meta['image'],
        'site' => $meta['site'],
        'added_at' => date('c'),
    ];

    array_unshift($articles, $article); // dernier ajouté en premier
    if (!save_articles($category, $articles)) {
        return ['ok' => false, 'error' => "Impossible d'enregistrer l'article"];    
    }
    return ['ok' => true, 'article' => $article];
}

// ===== GESTION DES FLUX RSS =====

function fetch_rss_feed(string $rssUrl): array {
    // Récupère et parse un flux RSS/Atom
    $xml = fetch_url($rssUrl);
    if (!$xml) return ['ok' => false, 'error' => 'Impossible de récupérer le flux RSS'];
    
    libxml_use_internal_errors(true);
    $feed = @simplexml_load_string($xml);
    libxml_clear_errors();
    
    if (!$feed) return ['ok' => false, 'error' => 'Flux RSS invalide'];
    
    $items = [];
    
    // Détection du format (RSS 2.0 ou Atom)
    if (isset($feed->channel->item)) {
        // RSS 2.0
        foreach ($feed->channel->item as $item) {
            $title = (string)$item->title;
            $link = (string)$item->link;
            $desc = (string)($item->description ?? '');
            $pubDate = (string)($item->pubDate ?? '');
            
            // Extraction de l'image (media:content, enclosure, ou dans description)
            $image = '';
            if (isset($item->children('media', true)->content)) {
                $image = (string)$item->children('media', true)->content->attributes()->url;
            } elseif (isset($item->enclosure)) {
                $type = (string)$item->enclosure->attributes()->type;
                if (strpos($type, 'image/') === 0) {
                    $image = (string)$item->enclosure->attributes()->url;
                }
            } else {
                // Chercher une image dans la description
                if (preg_match('~<img[^>]+src=["\']([^"\']+)["\']~i', $desc, $m)) {
                    $image = $m[1];
                }
            }
            
            $items[] = [
                'title' => $title,
                'url' => $link,
                'description' => strip_tags($desc),
                'image' => $image,
                'published' => $pubDate ? strtotime($pubDate) : time(),
            ];
        }
    } elseif (isset($feed->entry)) {
        // Atom
        foreach ($feed->entry as $entry) {
            $title = (string)$entry->title;
            $link = '';
            foreach ($entry->link as $l) {
                if ((string)$l->attributes()->rel === 'alternate' || !$link) {
                    $link = (string)$l->attributes()->href;
                }
            }
            $desc = (string)($entry->summary ?? $entry->content ?? '');
            $pubDate = (string)($entry->published ?? $entry->updated ?? '');
            
            $image = '';
            if (preg_match('~<img[^>]+src=["\']([^"\']+)["\']~i', $desc, $m)) {
                $image = $m[1];
            }
            
            $items[] = [
                'title' => $title,
                'url' => $link,
                'description' => strip_tags($desc),
                'image' => $image,
                'published' => $pubDate ? strtotime($pubDate) : time(),
            ];
        }
    }
    
    return ['ok' => true, 'items' => $items];
}

function sync_rss_to_articles(string $category, array $rssUrls, int $maxPerFeed = 10): array {
    // Synchronise les articles depuis plusieurs flux RSS
    $category = in_array($category, ['cyber', 'ia']) ? $category : '';
    if (!$category) return ['ok' => false, 'error' => 'Catégorie invalide'];
    
    $existingArticles = load_articles($category);
    $existingUrls = array_column($existingArticles, 'url');
    
    $newCount = 0;
    $errors = [];
    
    foreach ($rssUrls as $rssUrl) {
        $result = fetch_rss_feed($rssUrl);
        if (!$result['ok']) {
            $errors[] = "Erreur flux $rssUrl : " . $result['error'];
            continue;
        }
        
        $feedItems = array_slice($result['items'], 0, $maxPerFeed);
        $feedSite = parse_url($rssUrl, PHP_URL_HOST);
        
        foreach ($feedItems as $item) {
            if (!$item['url'] || in_array($item['url'], $existingUrls)) continue;
            
            // Si pas d'image dans le flux RSS, tenter de la récupérer depuis la page
            $image = $item['image'];
            if (!$image && $item['url']) {
                $html = fetch_url($item['url']);
                if ($html) {
                    $meta = extract_metadata($item['url'], $html);
                    $image = $meta['image'];
                    // Mettre à jour aussi le titre et description si meilleurs
                    if (!$item['title'] || strlen($meta['title']) > strlen($item['title'])) {
                        $item['title'] = $meta['title'];
                    }
                    if (!$item['description'] || strlen($meta['description']) > strlen($item['description'])) {
                        $item['description'] = $meta['description'];
                    }
                }
            }
            
            $article = [
                'id' => uniqid('rss_', true),
                'url' => $item['url'],
                'title' => $item['title'] ?: $item['url'],
                'description' => mb_substr($item['description'], 0, 200),
                'image' => $image,
                'site' => $feedSite,
                'added_at' => date('c', $item['published']),
                'source' => 'rss',
            ];
            
            array_unshift($existingArticles, $article);
            $existingUrls[] = $item['url'];
            $newCount++;
        }
    }
    
    if (!save_articles($category, $existingArticles)) {
        return ['ok' => false, 'error' => 'Impossible de sauvegarder les articles'];
    }
    
    return [
        'ok' => true,
        'new' => $newCount,
        'errors' => $errors,
    ];
}

?>
