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

    <!-- Projet 2 : Exemple - À personnaliser -->
    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Application Web</h3>
          <span class="project-badge task">Planifié</span>
        </div>
        <div style="font-size: 32px;">🌐</div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Projet d'application web à venir. Description du projet, objectifs et technologies utilisées.
      </p>
      <div class="skill-badges">
        <div class="skill-badge-item">
          <div class="skill-badge-icon">⚛️</div>
          <span class="skill-badge-text">React</span>
        </div>
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🗄️</div>
          <span class="skill-badge-text">SQL</span>
        </div>
      </div>
    </div>

    <!-- Projet 3 : Exemple - À personnaliser -->
    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Script d'automatisation</h3>
          <span class="project-badge dev">Terminé</span>
        </div>
        <div style="font-size: 32px;">🤖</div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Script permettant d'automatiser des tâches répétitives. Développé en Python.
      </p>
      <div class="skill-badges">
        <div class="skill-badge-item">
          <div class="skill-badge-icon">🐍</div>
          <span class="skill-badge-text">Python</span>
        </div>
      </div>
    </div>

    <!-- Ajoutez vos propres projets ici -->
  </section>

  <section class="panel" style="margin-top: 40px;">
    <h2 class="text-2xl font-semibold mb-4">💡 Comment ajouter un projet ?</h2>
    <p class="text-zinc-400 mb-4">
      Pour ajouter un nouveau projet, éditez le fichier <code style="background: var(--chip); padding: 2px 8px; border-radius: 4px;">pages/realisations.php</code> 
      et copiez/collez un bloc de projet existant.
    </p>
    <ul class="task-list">
      <li>Modifiez le titre, la description et les technologies</li>
      <li>Changez le badge de statut : <strong>En cours</strong>, <strong>Terminé</strong>, <strong>Planifié</strong></li>
      <li>Personnalisez l'emoji représentant le projet</li>
    </ul>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
