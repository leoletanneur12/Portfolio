<?php
require_once __DIR__ . '/../includes/helpers.php';
$pageTitle = 'Stage 1ère année';
$current = 'stage1';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="mx-auto max-w-6xl px-4">
  <section class="panel stage-hero">
    <h1 class="text-3xl font-bold">Stage de 1ère année</h1>
    <p class="muted">Découverte du développement C# et ASP.NET, accompagné de tâches support et déploiement sur parc informatique.</p>
    
    <div class="company-card">
      <div class="company-logo">
        <img src="https://www.actiontelecom.fr/wp-content/uploads/2019/05/cropped-logo_action_telecom.png" alt="Action Telecom" onerror="this.parentElement.innerHTML='<span style=&quot;font-size:32px;font-weight:bold;color:#7c3aed;&quot;>AT</span>'">
      </div>
      <div class="company-info">
        <h3>Action Telecom</h3>
        <p>Entreprise spécialisée en solutions télécoms, réseaux et informatiques pour les professionnels (PME, collectivités, secteur public). 
        Action Telecom propose des services de téléphonie d'entreprise, infrastructure réseau, sécurité informatique et maintenance de parcs informatiques.</p>
        <p style="margin-top: 8px; color: var(--muted); font-size: 0.95rem;">
          📍 <strong>Siège social :</strong> Toulouse | <strong>Stage effectué à :</strong> Carcassonne (11)
        </p>
        <a href="https://www.actiontelecom.fr" target="_blank" rel="noopener">→ Visiter le site</a>
      </div>
    </div>
  </section>

  <section class="panel">
    <h2 class="text-2xl font-semibold">Projets réalisés</h2>
    <p class="muted">Développement d'applications en C# et ASP.NET, de la console au web.</p>
    
    <div class="project-grid">
      <div class="project-card">
        <span class="project-badge dev">Développement</span>
        <h3>Découverte du C#</h3>
        <p>Apprentissage du langage C# et préparation de l'environnement de développement avec Visual Studio Community et SQL Server Express.</p>
        <div class="tech-tags">
          <span class="tech-tag">C#</span>
          <span class="tech-tag">Visual Studio</span>
          <span class="tech-tag">SQL Server Express</span>
        </div>
      </div>

      <div class="project-card">
        <span class="project-badge dev">Web</span>
        <h3>Dictionnaire ASP.NET</h3>
        <p>Application web de dictionnaire développée en ASP.NET permettant la recherche et l'affichage de définitions.</p>
        <div class="tech-tags">
          <span class="tech-tag">ASP.NET</span>
          <span class="tech-tag">C#</span>
          <span class="tech-tag">SQL Server</span>
        </div>
      </div>

      <div class="project-card">
        <span class="project-badge dev">Console & Web</span>
        <h3>Jeu du nombre mystère</h3>
        <p>Développement d'un jeu interactif en deux versions : console classique puis interface web, pour deviner un nombre aléatoire.</p>
        <div class="tech-tags">
          <span class="tech-tag">C#</span>
          <span class="tech-tag">ASP.NET</span>
        </div>
      </div>
    </div>
  </section>

  <section class="panel">
    <h2 class="text-2xl font-semibold">Tâches support & réseau</h2>
    <p class="muted">Interventions techniques en atelier et chez les clients.</p>
    
    <div class="project-grid">
      <div class="project-card">
        <span class="project-badge task">Support</span>
        <h3>Formatage & installation</h3>
        <p>Préparation et configuration de postes de travail pour clients.</p>
        <ul class="task-list">
          <li>Formatage d'ordinateurs</li>
          <li>Installation de Windows</li>
          <li>Configuration des PC clients</li>
        </ul>
      </div>

      <div class="project-card">
        <span class="project-badge task">Déploiement</span>
        <h3>Intervention client</h3>
        <p>Déplacement sur site client pour un déploiement massif de postes.</p>
        <ul class="task-list">
          <li>Installation sur environ 60 PC</li>
          <li>Configuration réseau et logiciels</li>
          <li>Accompagnement utilisateurs</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="panel">
    <h2 class="text-2xl font-semibold">💼 Compétences mobilisées</h2>
    <div class="skill-badges">
      <div class="skill-badge-item">
        <div class="skill-badge-icon">💻</div>
        <span class="skill-badge-text">Développement C# / ASP.NET</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🗄️</div>
        <span class="skill-badge-text">Bases de données SQL</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🛠️</div>
        <span class="skill-badge-text">Support utilisateur</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">📦</div>
        <span class="skill-badge-text">Installation & déploiement</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🎯</div>
        <span class="skill-badge-text">Travail en autonomie</span>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
