<?php
require_once __DIR__ . '/../includes/helpers.php';
$pageTitle = 'Stage 2ème année';
$current = 'stage2';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="mx-auto max-w-6xl px-4">
  <section class="panel stage-hero">
    <h1 class="text-3xl font-bold">Stage de 2ème année</h1>
    <p class="muted">Refonte du site web municipal avec Laravel et développement d'une application de gestion de cantine, accompagné de dépannage réseau.</p>

    <div class="company-card">
      <div class="company-logo">
        <img src="https://cauxetsauzens.org/favicon.ico" alt="Mairie de Caux et Sauzens" onerror="this.parentElement.innerHTML='<span style=&quot;font-size:32px;font-weight:bold;color:#7c3aed;&quot;>CS</span>'">
      </div>
      <div class="company-info">
        <h3>Mairie de Caux et Sauzens</h3>
        <p>Commune de l'Aude proposant des services municipaux à ses habitants. La mairie gère les services administratifs, les équipements publics (cantine scolaire, etc.) et la communication locale.</p>
        <p style="margin-top: 8px; color: var(--muted); font-size: 0.95rem;">
          📍 <strong>Stage effectué à :</strong> Caux et Sauzens (11)
        </p>
        <a href="https://cauxetsauzens.org" target="_blank" rel="noopener">→ Visiter le site</a>
      </div>
    </div>
  </section>

  <section class="panel">
    <h2 class="text-2xl font-semibold">Projets réalisés</h2>
    <p class="muted">Développement web avec Laravel et résolution de problèmes réseau.</p>

    <div class="project-grid">
      <a class="project-card project-link" href="#galerie-mairie">
        <span class="project-badge dev">Refonte Web</span>
        <h3>Refonte du site de la mairie</h3>
        <p>Réécriture complète du site municipal existant avec Laravel pour une architecture moderne, maintenable et plus performante.</p>
        <div class="tech-tags">
          <span class="tech-tag">PHP</span>
          <span class="tech-tag">Laravel</span>
          <span class="tech-tag">Base de données</span>
        </div>
        <p class="project-link-hint">Voir les photos du projet →</p>
      </a>

      <div class="project-card">
        <span class="project-badge dev">Application</span>
        <h3>Gestion de la cantine</h3>
        <p>Développement d'une application dédiée à la gestion de la cantine scolaire : inscription des élèves, suivi des repas et administration.</p>
        <div class="tech-tags">
          <span class="tech-tag">PHP</span>
          <span class="tech-tag">Laravel</span>
          <span class="tech-tag">Base de données</span>
        </div>
      </div>

      <div class="project-card">
        <span class="project-badge task">Réseau</span>
        <h3>Dépannage réseau</h3>
        <p>Aide à la résolution de problèmes réseau rencontrés au sein de la mairie.</p>
        <div class="tech-tags">
          <span class="tech-tag">Réseau</span>
          <span class="tech-tag">Diagnostic</span>
        </div>
      </div>
    </div>
  </section>

  <article id="galerie-mairie" class="panel project-gallery-block">
    <h2 class="text-2xl font-semibold" style="margin-bottom: 8px;">Refonte du site de la mairie</h2>
    <p class="muted" style="margin-bottom: 14px;">Cliquez sur les captures pour les ouvrir en grand.</p>
    <div class="project-gallery-grid">
      <figure class="project-shot">
        <img src="<?= asset('assets/docs/stage2/mairie/mairie-1.png') ?>" alt="Refonte du site de la mairie - maquette d'accueil" loading="lazy">
        <figcaption>Maquette d’accueil</figcaption>
      </figure>
      <figure class="project-shot">
        <img src="<?= asset('assets/docs/stage2/mairie/mairie-2.png') ?>" alt="Refonte du site de la mairie - page de présentation" loading="lazy">
        <figcaption>Page de présentation</figcaption>
      </figure>
      <figure class="project-shot">
        <img src="<?= asset('assets/docs/stage2/mairie/mairie-3.png') ?>" alt="Refonte du site de la mairie - interface de contenu" loading="lazy">
        <figcaption>Interface de contenu</figcaption>
      </figure>
      <figure class="project-shot">
        <img src="<?= asset('assets/docs/stage2/mairie/mairie-4.png') ?>" alt="Refonte du site de la mairie - vue détaillée" loading="lazy">
        <figcaption>Vue détaillée</figcaption>
      </figure>
    </div>
  </article>

  <section class="panel">
    <h2 class="text-2xl font-semibold">💼 Compétences mobilisées</h2>
    <div class="skill-badges">
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🐘</div>
        <span class="skill-badge-text">Développement PHP / Laravel</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🗄️</div>
        <span class="skill-badge-text">Bases de données</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🎯</div>
        <span class="skill-badge-text">Travail en autonomie</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">📄</div>
        <span class="skill-badge-text">Documentation</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🌐</div>
        <span class="skill-badge-text">Réseau</span>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
