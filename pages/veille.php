<?php
require_once __DIR__ . '/../includes/helpers.php';
$pageTitle = 'Ma veille';
$current = 'veille';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="mx-auto max-w-6xl px-4">
  <section class="panel">
    <h1 class="text-3xl font-bold mb-4">🔍 Ma veille technologique</h1>
    <p class="text-zinc-300 mb-8">
      Dans le cadre de ma formation BTS SIO, je réalise une veille technologique sur l'<strong>Intelligence Artificielle Générative</strong>.
      Découvrez mes outils de veille et des cas concrets d'utilisation de l'IA générative.
    </p>
  </section>

  <section class="project-grid">
    <!-- Mes outils -->
    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Mes outils de veille</h3>
          <span class="project-badge dev">Actualités IA générative</span>
        </div>
        <div style="font-size: 32px;">🤖</div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Collection d'articles automatiquement synchronisés depuis des sources spécialisées en Intelligence Artificielle générative.
        Flux RSS, blogs techniques et sites d'actualités tech.
      </p>
      <a href="<?= url('pages/veille-outils.php') ?>" class="btn btn-primary" style="display: inline-block;">
        Voir les articles →
      </a>
    </div>

    <!-- Cas concrets -->
    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Cas concrets</h3>
          <span class="project-badge task">Études de cas</span>
        </div>
        <div style="font-size: 32px;">💡</div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        4 faits marquants et cas d'usage concrets de l'Intelligence Artificielle générative.
        Analyse d'événements et d'applications réelles de l'IA générative.
      </p>
      <a href="<?= url('pages/veille-cas.php') ?>" class="btn btn-primary" style="display: inline-block;">
        Découvrir les cas →
      </a>
    </div>
  </section>

  <section class="panel" style="margin-top: 40px;">
    <h2 class="text-2xl font-semibold mb-4">📌 Pourquoi une veille sur l'IA générative ?</h2>
    <p class="text-zinc-400 mb-4">
      L'Intelligence Artificielle générative évolue à une vitesse fulgurante et transforme tous les secteurs d'activité.
      Cette veille technologique me permet de :
    </p>
    <ul class="task-list">
      <li>Rester informé des dernières avancées et innovations</li>
      <li>Comprendre les enjeux éthiques et sociétaux de l'IA générative</li>
      <li>Identifier les opportunités professionnelles dans ce domaine</li>
      <li>Développer une expertise sur les outils et frameworks d'IA générative</li>
    </ul>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
