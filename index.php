<?php
require_once __DIR__ . '/includes/helpers.php';
$pageTitle = 'Accueil';
$current = 'home';
$devSkills = [
  ['name' => 'HTML', 'icon' => '🌐', 'level' => 'Avancé'],
  ['name' => 'CSS', 'icon' => '🎨', 'level' => 'Avancé'],
  ['name' => 'JavaScript', 'icon' => '⚡', 'level' => 'Intermédiaire'],
  ['name' => 'PHP', 'icon' => '🐘', 'level' => 'Avancé'],
  ['name' => 'Java', 'icon' => '☕', 'level' => 'Intermédiaire'],
  ['name' => 'SQL', 'icon' => '🗄️', 'level' => 'Intermédiaire'],
  ['name' => 'Python', 'icon' => '🐍', 'level' => 'Intermédiaire'],
  ['name' => 'Laravel', 'icon' => '⚙️', 'level' => 'Débutant'],
  ['name' => 'Bootstrap', 'icon' => '🅱️', 'level' => 'Intermédiaire'],
  ['name' => 'Android', 'icon' => '🤖', 'level' => 'Débutant'],
];
?>
<?php include __DIR__ . '/includes/header.php'; ?>

<main class="mx-auto max-w-6xl px-4">
  <section class="relative py-16 md:py-24">
    <div class="relative">
      <!-- Badge animé -->
      <div class="inline-flex items-center gap-2 rounded-full border border-violet-500/30 bg-gradient-to-r from-violet-900/40 to-purple-900/40 px-4 py-2 text-sm text-violet-200 shadow-lg backdrop-blur-sm animate-pulse-slow">
        <span class="relative flex h-2 w-2">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-violet-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-2 w-2 bg-violet-500"></span>
        </span>
        <span class="font-medium">Étudiant BTS SIO • Portfolio 2025</span>
      </div>
      
      <!-- Titre principal avec effet gradient animé -->
      <h1 class="mt-8 text-5xl md:text-7xl font-black leading-tight tracking-tight">
        <span class="block bg-gradient-to-br from-violet-200 via-fuchsia-300 to-pink-400 bg-clip-text text-transparent animate-gradient">
          Hey, je suis Léo 👋
        </span>
        <span class="block mt-2 bg-gradient-to-r from-violet-400 via-purple-400 to-pink-500 bg-clip-text text-transparent">
          Développeur & Créateur
        </span>
      </h1>
      
      <!-- Description enrichie -->
      <div class="mt-6 max-w-3xl">
        <p class="text-lg text-zinc-300 leading-relaxed">
          <span class="text-xl font-semibold text-white">19 ans</span> • 
          <span class="text-violet-300 font-medium">BTS SIO2 option SLAM</span>
        </p>
        <p class="mt-3 text-zinc-400 text-base leading-relaxed">
          Passionné par le <strong class="text-violet-300">développement web</strong> et 
          la <strong class="text-fuchsia-300">cybersécurité</strong>. 
          Je crée des applications modernes et je reste à l'affût des dernières tendances 
          en <strong class="text-pink-300">intelligence artificielle</strong>.
        </p>
      </div>
      
      <!-- Statistiques rapides -->
      <div class="mt-8 grid grid-cols-3 gap-4 max-w-xl">
        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-violet-900/30 to-purple-900/20 border border-violet-500/20">
          <div class="text-2xl font-bold text-violet-300">2</div>
          <div class="text-xs text-zinc-400 mt-1">Années BTS</div>
        </div>
        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-fuchsia-900/30 to-pink-900/20 border border-fuchsia-500/20">
          <div class="text-2xl font-bold text-fuchsia-300">10+</div>
          <div class="text-xs text-zinc-400 mt-1">Projets</div>
        </div>
        <div class="text-center p-4 rounded-xl bg-gradient-to-br from-pink-900/30 to-rose-900/20 border border-pink-500/20">
          <div class="text-2xl font-bold text-pink-300">10</div>
          <div class="text-xs text-zinc-400 mt-1">Technologies</div>
        </div>
      </div>
      
      <!-- Boutons d'action redessinés -->
      <div class="mt-10 flex flex-wrap gap-4">
        <a class="group relative inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-violet-600 to-purple-600 px-6 py-3.5 text-white font-medium shadow-lg shadow-violet-500/30 hover:shadow-xl hover:shadow-violet-500/50 hover:scale-105 transition-all duration-200" href="<?= url('pages/realisations.php') ?>">
          <span>�</span>
          <span>Mes réalisations</span>
          <span class="group-hover:translate-x-1 transition-transform">→</span>
        </a>
        
        <a class="group relative inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-fuchsia-600 to-pink-600 px-6 py-3.5 text-white font-medium shadow-lg shadow-fuchsia-500/30 hover:shadow-xl hover:shadow-fuchsia-500/50 hover:scale-105 transition-all duration-200" href="<?= url('pages/veille.php') ?>">
          <span>🔍</span>
          <span>Ma veille</span>
          <span class="group-hover:translate-x-1 transition-transform">→</span>
        </a>
        
        <a class="group relative inline-flex items-center gap-2 rounded-xl border-2 border-violet-500/30 bg-zinc-900/60 backdrop-blur-sm px-6 py-3.5 text-zinc-100 font-medium hover:bg-violet-900/20 hover:border-violet-500/50 transition-all duration-200" href="#competences">
          <span>💡</span>
          <span>Mes compétences</span>
        </a>

        <a class="group relative inline-flex items-center gap-2 rounded-xl border-2 border-violet-400/40 bg-zinc-900/60 backdrop-blur-sm px-6 py-3.5 text-zinc-100 font-medium hover:bg-violet-900/10 hover:border-violet-400/60 transition-all duration-200" href="<?= asset('assets/docs/CV_LETANNEUR_Leo.pdf') ?>" target="_blank" rel="noopener">
          <span>📄</span>
          <span>Mon CV</span>
        </a>
      </div>
    </div>
  </section>

  <section class="panel">
    <h2 class="text-2xl font-semibold mb-6">📘 BTS SIO — Services Informatiques aux Organisations</h2>
    
    <div class="project-grid" style="margin-bottom: 40px;">
      <div class="project-card">
        <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
          <div>
            <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Présentation générale</h3>
            <span class="project-badge dev">Bac+2</span>
          </div>
          <div style="font-size: 32px;">🎓</div>
        </div>
        <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
          Le BTS SIO est un <strong>diplôme d'État</strong> qui combine théorie et pratique (1350h sur 2 ans + 10 semaines de stage minimum). 
          Il couvre des compétences communes à toute l'informatique et propose deux spécialisations.
        </p>
        <div class="skill-badges">
          <div class="skill-badge-item">
            <div class="skill-badge-icon">📚</div>
            <span class="skill-badge-text">Formation complète</span>
          </div>
          <div class="skill-badge-item">
            <div class="skill-badge-icon">💼</div>
            <span class="skill-badge-text">Stage obligatoire</span>
          </div>
          <div class="skill-badge-item">
            <div class="skill-badge-icon">🔐</div>
            <span class="skill-badge-text">Cybersécurité</span>
          </div>
          <div class="skill-badge-item">
            <div class="skill-badge-icon">🛠️</div>
            <span class="skill-badge-text">Support technique</span>
          </div>
          <div class="skill-badge-item">
            <div class="skill-badge-icon">📊</div>
            <span class="skill-badge-text">Gestion de projet</span>
          </div>
          <div class="skill-badge-item">
            <div class="skill-badge-icon">🚀</div>
            <span class="skill-badge-text">Débouchés variés</span>
          </div>
        </div>
      </div>
    </div>

    <div class="project-grid">
      <div class="project-card">
        <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
          <div>
            <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Option SISR</h3>
            <span class="project-badge task">Infrastructure</span>
          </div>
          <div style="font-size: 32px;">🖥️</div>
        </div>
        <p style="color: var(--muted); margin-bottom: 6px; font-size: 14px; font-style: italic;">
          Solutions d'Infrastructure, Systèmes et Réseaux
        </p>
        <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
          Spécialisation en <strong>administration systèmes et réseaux</strong>, virtualisation, supervision et sécurité des infrastructures.
        </p>
        <h4 style="font-size: 14px; font-weight: 600; margin-bottom: 8px; color: var(--cyan);">Métiers visés :</h4>
        <ul class="task-list">
          <li>Technicien systèmes & réseaux</li>
          <li>Administrateur infrastructure</li>
          <li>Support technique N2/N3</li>
          <li>Technicien virtualisation</li>
        </ul>
      </div>

      <div class="project-card">
        <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
          <div>
            <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Option SLAM</h3>
            <span class="project-badge dev">Développement</span>
          </div>
          <div style="font-size: 32px;">💻</div>
        </div>
        <p style="color: var(--muted); margin-bottom: 6px; font-size: 14px; font-style: italic;">
          Solutions Logicielles et Applications Métiers
        </p>
        <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
          Spécialisation en <strong>conception et développement</strong> d'applications web et logicielles, bases de données, tests et maintenance.
        </p>
        <h4 style="font-size: 14px; font-weight: 600; margin-bottom: 8px; color: var(--cyan);">Métiers visés :</h4>
        <ul class="task-list">
          <li>Développeur web / logiciel</li>
          <li>Concepteur d'applications</li>
          <li>Analyste programmeur</li>
          <li>Développeur full-stack</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="panel" id="competences">
    <h2 class="text-2xl font-semibold">💡 Compétences techniques</h2>
    <p class="muted">Langages et technologies que je maîtrise.</p>
    <div class="skills-grid">
      <?php foreach ($devSkills as $skill): ?>
        <div class="skill-item">
          <div style="display: flex; align-items: center; gap: 10px;">
            <span style="font-size: 20px;"><?= $skill['icon'] ?></span>
            <div class="skill-name"><?= h($skill['name']) ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
