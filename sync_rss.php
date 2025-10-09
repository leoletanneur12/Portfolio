<?php
/**
 * Script de synchronisation des flux RSS
 * À exécuter régulièrement (manuellement ou via cron/tâche planifiée)
 * Usage: php sync_rss.php
 */

require_once __DIR__ . '/includes/helpers.php';

echo "=== Synchronisation des flux RSS ===\n\n";

$config = require __DIR__ . '/config_rss.php';

foreach ($config as $category => $rssUrls) {
    echo "Catégorie: $category\n";
    echo "Flux RSS: " . count($rssUrls) . "\n";
    
    $result = sync_rss_to_articles($category, $rssUrls, 15);
    
    if ($result['ok']) {
        echo "✓ {$result['new']} nouveaux articles ajoutés\n";
        if (!empty($result['errors'])) {
            echo "⚠ Erreurs:\n";
            foreach ($result['errors'] as $error) {
                echo "  - $error\n";
            }
        }
    } else {
        echo "✗ Erreur: {$result['error']}\n";
    }
    echo "\n";
}

echo "=== Synchronisation terminée ===\n";
