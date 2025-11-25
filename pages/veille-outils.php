<?php
require_once __DIR__ . '/../includes/helpers.php';
$pageTitle = 'Mes outils';
$current = 'veille-outils';

$message = '';

// Gestion de la synchronisation RSS
/* DÉCOMMENTER POUR ACTIVER LA SYNCHRONISATION (EN LOCAL UNIQUEMENT)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sync_rss'])) {
    $config = require __DIR__ . '/../config_rss.php';
    $rssUrls = $config['ia'] ?? [];
    if ($rssUrls) {
        $result = sync_rss_to_articles('ia', $rssUrls, 15);
        if ($result['ok']) {
            $message = '<div class="alert alert-success">' . $result['new'] . ' nouveaux articles synchronisés depuis les flux RSS.</div>';
        } else {
            $message = '<div class="alert alert-error">Erreur: ' . h($result['error']) . '</div>';
        }
    }
}
*/

$articles = load_articles('ia');

// Trier les articles : ceux avec images en premier
usort($articles, function($a, $b) {
    $aHasImage = !empty($a['image']);
    $bHasImage = !empty($b['image']);
    
    if ($aHasImage && !$bHasImage) return -1;
    if (!$aHasImage && $bHasImage) return 1;
    return 0;
});
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="mx-auto max-w-6xl px-4">
  <section class="panel">
    <div style="display: flex; justify-content: space-between; align-items: start; gap: 20px; flex-wrap: wrap;">
      <div>
        <h1 class="text-3xl font-bold">🤖 Mes outils de veille</h1>
        <p class="text-zinc-300">Articles et actualités sur l'IA générative, automatiquement synchronisés depuis des flux RSS.</p>
      </div>
      
      <!-- DÉCOMMENTER POUR ACTIVER LE BOUTON DE SYNCHRONISATION (EN LOCAL UNIQUEMENT)
      <form method="post">
        <button type="submit" name="sync_rss" value="1" class="btn btn-primary" style="white-space: nowrap;">
          🔄 Synchroniser
        </button>
      </form>
      -->
    </div>
    
    <?= $message ?>
  </section>

  <section class="cards">
    <?php if (empty($articles)): ?>
      <p class="muted">Aucun article pour le moment.</p>
    <?php endif; ?>
    <?php foreach ($articles as $a): ?>
      <article class="card hover:translate-y-[-2px] transition-transform">
        <?php if (!empty($a['image'])): ?>
          <div class="card-media" style="background-image:url('<?= h($a['image']) ?>');"></div>
        <?php else: ?>
          <div class="card-media placeholder" style="display: flex; align-items: center; justify-content: center; font-size: 48px; background: linear-gradient(135deg, rgba(124,58,237,0.2), rgba(124,58,237,0.1));">
            🤖
          </div>
        <?php endif; ?>
        <div class="card-body">
          <h3 class="card-title bg-clip-text text-transparent bg-gradient-to-r from-violet-300 to-pink-300"><?= h($a['title']) ?></h3>
          <?php if (!empty($a['description'])): ?>
            <p class="card-desc"><?= h($a['description']) ?></p>
          <?php endif; ?>
          <div class="card-meta">
            <span><?= h($a['site'] ?: parse_url($a['url'], PHP_URL_HOST)) ?></span>
            <a class="btn btn-link" target="_blank" rel="noopener" href="<?= h($a['url']) ?>">Lire l'article →</a>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </section>
</main>

<!-- Bouton retour en haut -->
<button class="back-to-top" id="backToTop" title="Retour en haut">
  ↑
</button>

<script>
// Afficher/masquer le bouton en fonction du scroll
const backToTopBtn = document.getElementById('backToTop');

window.addEventListener('scroll', function() {
  // Apparaît dès qu'on dépasse la hauteur de la fenêtre
  if (window.scrollY > window.innerHeight) {
    backToTopBtn.classList.add('visible');
  } else {
    backToTopBtn.classList.remove('visible');
  }
});

// Retour en haut avec animation fluide
backToTopBtn.addEventListener('click', function() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>
