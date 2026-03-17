<?php
require_once __DIR__ . '/../includes/helpers.php';
$pageTitle = 'Mes réalisations';
$current = 'realisations';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="mx-auto max-w-6xl px-4">
  <section class="panel">
    <h1 class="text-3xl font-bold mb-4">🚀 Mes réalisations</h1>
    <p class="text-zinc-300 mb-8">
      Découvrez mes projets réalisés dans le cadre de ma formation BTS SIO SLAM et en autonomie.
      Chaque projet représente une opportunité d'apprentissage et de mise en pratique de mes compétences.
    </p>
  </section>

  <section class="project-grid">
    <!-- Projet 1 : Portfolio -->
    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Portfolio BTS SIO</h3>
          <span class="project-badge dev">En cours</span>
        </div>
        <div style="font-size: 32px;">💼</div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Site web personnel présentant mon parcours, mes compétences et mes projets. 
        Développé en <strong>PHP/HTML/CSS/JavaScript</strong> avec un système de veille technologique automatisé via flux RSS.
      </p>
      <div class="skill-badges">
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🐘</div>
          <span class="skill-badge-text">PHP</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🎨</div>
          <span class="skill-badge-text">CSS</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">⚡</div>
          <span class="skill-badge-text">JavaScript</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">📡</div>
          <span class="skill-badge-text">RSS</span>
        </div>
      </div>
    </div>

    <!-- Projet 2 : Mairie de Caux et Sauzens -->
    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Site Mairie de Caux et Sauzens</h3>
          <span class="project-badge dev">En cours</span>
        </div>
        <div style="font-size: 32px;">🏛️</div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Site web officiel pour la mairie de Caux et Sauzens. Développé avec <strong>Laravel</strong>, 
        il permet la gestion du contenu municipal, des actualités et des informations pratiques pour les habitants.
        (Non encore hébergé)
      </p>
      <div class="skill-badges">
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🔴</div>
          <span class="skill-badge-text">Laravel</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🐘</div>
          <span class="skill-badge-text">PHP</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🗄️</div>
          <span class="skill-badge-text">MySQL</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🎨</div>
          <span class="skill-badge-text">Blade</span>
        </div>
      </div>
    </div>

    <!-- Projet 3 : Photo4you -->
    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Photo4you</h3>
          <span class="project-badge dev">Terminé</span>
        </div>
        <div style="font-size: 32px;">📸</div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Site e-commerce de vente de photos développé avec <strong>Laravel</strong>. 
        Les utilisateurs peuvent parcourir un catalogue de photos, les acheter et télécharger leurs acquisitions.
      </p>
      <div class="skill-badges">
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🔴</div>
          <span class="skill-badge-text">Laravel</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🐘</div>
          <span class="skill-badge-text">PHP</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🗄️</div>
          <span class="skill-badge-text">MySQL</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🛒</div>
          <span class="skill-badge-text">E-commerce</span>
        </div>
      </div>
    </div>

  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
