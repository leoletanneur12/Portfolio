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
    <a class="project-card project-link" href="#galerie-portfolio" aria-label="Voir les photos du projet Portfolio BTS SIO">
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
      <p class="project-link-hint">Cliquer pour voir les photos du projet</p>
    </a>

    <!-- Projet 2 : Photo4u -->
    <a class="project-card project-link" href="#galerie-photo4u" aria-label="Voir les photos du projet Photo4u">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Photo4u - Site de vente de photos en ligne</h3>
          <span class="project-badge dev">Terminé</span>
        </div>
        <div style="font-size: 32px;">📸</div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Site e-commerce permettant de consulter, rechercher et acheter des photos en ligne.
        Le projet met en avant la gestion d'un catalogue, des fiches produits et du parcours utilisateur.
      </p>
      <div class="skill-badges">
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🐘</div>
          <span class="skill-badge-text">PHP</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🗄️</div>
          <span class="skill-badge-text">MySQL</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">⚡</div>
          <span class="skill-badge-text">JavaScript</span>
        </div>
      </div>
      <p class="project-link-hint">Cliquer pour voir les photos du projet</p>
    </a>

    <!-- Projet 3 : Pompier -->
    <a class="project-card project-link" href="#galerie-pompier" aria-label="Voir les photos du projet Pompier">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Pompier - Gestion des pompiers</h3>
          <span class="project-badge dev">Terminé</span>
        </div>
        <div style="font-size: 32px;">🚒</div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Petit site de gestion des pompiers avec formulaire pour ajouter, modifier et supprimer des pompiers.
        Ce projet met en pratique les operations CRUD et la gestion des donnees en base.
      </p>
      <div class="skill-badges">
        <div class="skill-badge-item">
          <div class="skill-badge-icon">📝</div>
          <span class="skill-badge-text">CRUD</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🐘</div>
          <span class="skill-badge-text">PHP</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🗄️</div>
          <span class="skill-badge-text">MySQL</span>
        </div>
      </div>
      <p class="project-link-hint">Cliquer pour voir les photos du projet</p>
    </a>

    <!-- Ajoutez vos propres projets ici -->
  </section>

  <section class="panel" style="margin-top: 40px;">
    <h2 class="text-2xl font-semibold mb-4">📷 Photos des projets</h2>

    <article id="galerie-portfolio" class="project-gallery-block">
      <h3 class="text-xl font-bold" style="margin-bottom: 8px;">Portfolio BTS SIO</h3>
      <p class="text-zinc-400" style="margin-bottom: 14px;">Le portfolio est deja consultable directement, avec un aperçu de la veille RSS intégrée au site.</p>
      <div class="project-gallery-grid" style="margin-bottom: 14px;">
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/portfolio/portfolio-rss.png') ?>" alt="Portfolio BTS SIO - veille RSS" loading="lazy">
          <figcaption>Veille RSS du portfolio</figcaption>
        </figure>
      </div>
      <a class="btn" href="<?= url('index.php') ?>">Voir l'accueil du portfolio</a>
    </article>

    <article id="galerie-photo4u" class="project-gallery-block">
      <h3 class="text-xl font-bold" style="margin-bottom: 8px;">Photo4u</h3>
      <p class="text-zinc-400" style="margin-bottom: 14px;">Captures des principales pages du site de vente de photos en ligne.</p>
      <div class="project-gallery-grid">
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/photo4u/photo4u-accueil.png') ?>" alt="Photo4u - page d'accueil" loading="lazy">
          <figcaption>Accueil</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/photo4u/photo4u-inscription.png') ?>" alt="Photo4u - page d'inscription" loading="lazy">
          <figcaption>Inscription</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/photo4u/photo4u-dashboard.png') ?>" alt="Photo4u - espace photographe" loading="lazy">
          <figcaption>Dashboard photographe</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/photo4u/photo4u-galerie.png') ?>" alt="Photo4u - galerie photos" loading="lazy">
          <figcaption>Galerie photos</figcaption>
        </figure>
      </div>
    </article>

    <article id="galerie-pompier" class="project-gallery-block">
      <h3 class="text-xl font-bold" style="margin-bottom: 8px;">Pompier - Gestion des pompiers</h3>
      <p class="text-zinc-400" style="margin-bottom: 14px;">Apercus du formulaire et des operations de gestion CRUD.</p>
      <div class="project-gallery-grid">
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/pompier/pompier-liste.png') ?>" alt="Pompier - liste des pompiers" loading="lazy">
          <figcaption>Liste des pompiers</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/pompier/pompier-formulaire.png') ?>" alt="Pompier - formulaire de gestion" loading="lazy">
          <figcaption>Formulaire de gestion</figcaption>
        </figure>
      </div>
    </article>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
