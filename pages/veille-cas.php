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
      4 événements et applications marquantes qui ont révolutionné l'IA générative en février-mars 2026.
    </p>
  </section>

  <section class="cards" style="gap: 24px;">
    <!-- Cas 1: Claude 3.7 Sonnet -->
    <article class="project-card" style="border-left: 4px solid #10a37f;">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Claude 3.7 Sonnet : le raisonnement hybride selon les besoins</h3>
          <span class="project-badge task">Février 2026</span>
          <span class="project-badge dev" style="margin-left: 8px;">Anthropic</span>
        </div>
        <div style="font-size: 32px;">🧠</div>
      </div>
      <p style="color: var(--muted); line-height: 1.6; margin-bottom: 12px;">
        Modèle hybride capable de basculer entre réponse rapide et raisonnement prolongé (Extended Thinking) selon la complexité de la tâche. 
        Meilleure performance du marché en code et en logique lors de son lancement. 
        Une approche novatrice qui mêle vitesse classique et profondeur analytique à la demande.
      </p>
      <div class="skill-badges">
        <span class="skill-item">🔀 Raisonnement hybride</span>
        <span class="skill-item">💻 Code</span>
        <span class="skill-item">🧩 Réflexion approfondie</span>
      </div>
    </article>

    <!-- Cas 2: Grok 3 -->
    <article class="project-card" style="border-left: 4px solid #ff6b6b;">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Grok 3 : le supercalculateur au service du raisonnement</h3>
          <span class="project-badge task">Février 2026</span>
          <span class="project-badge dev" style="margin-left: 8px;">xAI / Elon Musk</span>
        </div>
        <div style="font-size: 32px;">⚡</div>
      </div>
      <p style="color: var(--muted); line-height: 1.6; margin-bottom: 12px;">
        Annoncé comme "le modèle le plus intelligent du monde" à son lancement, Grok 3 est entraîné sur le supercalculateur Colossus (200 000 GPU). 
        Intégré nativement dans X (Twitter) avec un mode DeepSearch pour la recherche web en temps réel. 
        Une démonstration de force computationnelle sans précédent.
      </p>
      <div class="skill-badges">
        <span class="skill-item">🧠 Raisonnement</span>
        <span class="skill-item">🔍 Recherche web</span>
        <span class="skill-item">⚙️ Supercalcul</span>
      </div>
    </article>

    <!-- Cas 3: GPT-4.5 -->
    <article class="project-card" style="border-left: 4px solid #a78bfa;">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">GPT-4.5 : l'IA à intelligence émotionnelle</h3>
          <span class="project-badge task">Février 2026</span>
          <span class="project-badge dev" style="margin-left: 8px;">OpenAI</span>
        </div>
        <div style="font-size: 32px;">💬</div>
      </div>
      <p style="color: var(--muted); line-height: 1.6; margin-bottom: 12px;">
        Premier modèle OpenAI axé sur l'intelligence émotionnelle, GPT-4.5 offre des conversations plus naturelles, empathiques et moins "robotiques". 
        Très grand modèle non-raisonneur, il est optimisé pour l'interaction humaine plutôt que pour la performance sur les benchmarks. 
        Un changement de paradigme : l'IA qui comprend le contexte émotionnel.
      </p>
      <div class="skill-badges">
        <span class="skill-item">❤️ Intelligence émotionnelle</span>
        <span class="skill-item">💬 UX conversationnelle</span>
        <span class="skill-item">📝 Traitement du langage</span>
      </div>
    </article>

    <!-- Cas 4: Gemini 2.5 Pro -->
    <article class="project-card" style="border-left: 4px solid #4ade80;">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Gemini 2.5 Pro : le champion du contexte long et du multimodal</h3>
          <span class="project-badge task">Mars 2026</span>
          <span class="project-badge dev" style="margin-left: 8px;">Google DeepMind</span>
        </div>
        <div style="font-size: 32px;">🌟</div>
      </div>
      <p style="color: var(--muted); line-height: 1.6; margin-bottom: 12px;">
        Nouveau leader sur les benchmarks de raisonnement et de code, avec une fenêtre de contexte massive d'1 million de tokens — soit des livres entiers ou des bases de code complètes. 
        Capacités multimodales avancées en natif : audio, vidéo, images et texte traités simultanément. 
        Google reprend la tête de la course à l'IA avec un modèle polyvalent et sans équivalent.
      </p>
      <div class="skill-badges">
        <span class="skill-item">📖 Contexte long</span>
        <span class="skill-item">🎥 Multimodal</span>
        <span class="skill-item">🧠 Raisonnement</span>
      </div>
    </article>
  </section>

  <section class="panel" style="margin-top: 40px;">
    <h2 class="text-2xl font-semibold mb-4">🔮 Perspectives</h2>
    <p class="text-zinc-400">
      Ces cas concrets illustrent l'impact révolutionnaire de l'Intelligence Artificielle générative. 
      De la création de contenu (texte, image, vidéo) à l'assistance au développement, l'IA générative 
      transforme nos méthodes de travail et ouvre des possibilités créatives inédites. La veille technologique 
      permet de suivre ces évolutions rapides et d'anticiper les transformations à venir dans tous les secteurs.
    </p>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
