<?php
require_once __DIR__ . '/../includes/helpers.php';
$pageTitle = 'Cas concrets';
$current = 'veille-cas';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="mx-auto max-w-6xl px-4">
  <section class="panel">
    <h1 class="text-3xl font-bold mb-4">💡 Cas concrets en Intelligence Artificielle Générative</h1>
    <p class="text-zinc-300">
      4 cas récents et faciles à expliquer pour montrer comment l'IA générative est utilisée au quotidien.
    </p>
  </section>

  <section class="cards" style="gap: 24px;">
    <!-- Cas 1: ChatGPT for documents -->
    <article class="project-card" style="border-left: 4px solid #10a37f;">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">ChatGPT Projects : résumer et organiser des documents</h3>
          <span class="project-badge task">2025</span>
          <span class="project-badge dev" style="margin-left: 8px;">OpenAI</span>
        </div>
        <div style="font-size: 32px;">🧠</div>
      </div>
      <p style="color: var(--muted); line-height: 1.6; margin-bottom: 12px;">
        On peut lui donner un PDF, des notes ou un long texte, puis lui demander un résumé clair, une liste d'idées ou un plan de travail.
        C'est simple à comprendre car il agit comme un assistant qui trie l'information à notre place.
      </p>
      <div class="skill-badges">
        <span class="skill-item">📄 Résumé de documents</span>
        <span class="skill-item">🗂️ Organisation</span>
        <span class="skill-item">✍️ Aide à la rédaction</span>
      </div>
    </article>

    <!-- Cas 2: NotebookLM -->
    <article class="project-card" style="border-left: 4px solid #ff6b6b;">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">NotebookLM : poser des questions sur ses propres sources</h3>
          <span class="project-badge task">2025</span>
          <span class="project-badge dev" style="margin-left: 8px;">Google</span>
        </div>
        <div style="font-size: 32px;">⚡</div>
      </div>
      <p style="color: var(--muted); line-height: 1.6; margin-bottom: 12px;">
        Cet outil permet d'importer des cours, des fiches ou des articles, puis de poser des questions directement dessus.
        Il peut aussi générer un résumé audio, ce qui le rend très facile à présenter comme exemple concret.
      </p>
      <div class="skill-badges">
        <span class="skill-item">📚 Analyse de sources</span>
        <span class="skill-item">🎧 Résumé audio</span>
        <span class="skill-item">❓ Questions-réponses</span>
      </div>
    </article>

    <!-- Cas 3: Adobe Firefly -->
    <article class="project-card" style="border-left: 4px solid #a78bfa;">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Adobe Firefly : générer des images pour un projet</h3>
          <span class="project-badge task">2025</span>
          <span class="project-badge dev" style="margin-left: 8px;">Adobe</span>
        </div>
        <div style="font-size: 32px;">💬</div>
      </div>
      <p style="color: var(--muted); line-height: 1.6; margin-bottom: 12px;">
        On tape une phrase simple comme "logo minimaliste pour un club de robotique" et l'outil propose une image à partir de ce texte.
        C'est un bon cas concret pour expliquer la génération de contenu visuel à partir d'une consigne.
      </p>
      <div class="skill-badges">
        <span class="skill-item">🎨 Génération d'images</span>
        <span class="skill-item">📝 Texte vers image</span>
        <span class="skill-item">🖼️ Création visuelle</span>
      </div>
    </article>

    <!-- Cas 4: GitHub Copilot -->
    <article class="project-card" style="border-left: 4px solid #4ade80;">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">GitHub Copilot : aider à écrire du code plus vite</h3>
          <span class="project-badge task">2025</span>
          <span class="project-badge dev" style="margin-left: 8px;">GitHub / Microsoft</span>
        </div>
        <div style="font-size: 32px;">🌟</div>
      </div>
      <p style="color: var(--muted); line-height: 1.6; margin-bottom: 12px;">
        Dans l'éditeur, il peut proposer une fonction, compléter une ligne ou expliquer un morceau de code.
        C'est un exemple très parlant pour montrer comment l'IA générative assiste un développeur au quotidien.
      </p>
      <div class="skill-badges">
        <span class="skill-item">💻 Assistance au code</span>
        <span class="skill-item">⚡ Complétion</span>
        <span class="skill-item">🛠️ Productivité</span>
      </div>
    </article>
  </section>

  <section class="panel" style="margin-top: 40px;">
    <h2 class="text-2xl font-semibold mb-4">🔮 Perspectives</h2>
    <p class="text-zinc-400">
      Ces exemples montrent des usages simples, récents et faciles à présenter à l'oral.
      L'IA générative sert déjà à résumer, créer des images, interroger ses documents et aider à coder.
      La veille technologique permet de suivre ces outils qui évoluent très vite et de comprendre leurs usages concrets.
    </p>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
