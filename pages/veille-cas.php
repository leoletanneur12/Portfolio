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
      4 événements et applications marquantes qui ont révolutionné l'IA générative.
    </p>
  </section>

  <section class="cards" style="gap: 24px;">
    <!-- Cas 1: ChatGPT-o1 -->
    <article class="project-card" style="border-left: 4px solid #10a37f;">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">ChatGPT-o1 : l'IA qui raisonne comme un humain</h3>
          <span class="project-badge task">Septembre 2024</span>
          <span class="project-badge dev" style="margin-left: 8px;">OpenAI</span>
        </div>
        <div style="font-size: 32px;">🧠</div>
      </div>
      <p style="color: var(--muted); line-height: 1.6; margin-bottom: 12px;">
        GPT-o1 introduit le raisonnement en chaîne : l'IA "réfléchit" avant de répondre, comme un humain. 
        Performances exceptionnelles en mathématiques, physique et programmation. Cette IA a obtenu 83% à l'IMO 
        (Olympiades Internationales de Mathématiques) contre 13% pour GPT-4. Un bond majeur vers l'AGI.
      </p>
      <div class="skill-badges">
        <span class="skill-item">Raisonnement complexe</span>
        <span class="skill-item">Chain of Thought</span>
        <span class="skill-item">Résolution de problèmes</span>
      </div>
    </article>

    <!-- Cas 2: Sora débarque au public -->
    <article class="project-card" style="border-left: 4px solid #ff6b6b;">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Sora accessible au grand public</h3>
          <span class="project-badge task">Décembre 2024</span>
          <span class="project-badge dev" style="margin-left: 8px;">OpenAI</span>
        </div>
        <div style="font-size: 32px;">�</div>
      </div>
      <p style="color: var(--muted); line-height: 1.6; margin-bottom: 12px;">
        Après un an d'attente, Sora devient accessible à tous. Génération de vidéos jusqu'à 20 secondes en 1080p 
        à partir d'un simple texte. L'IA comprend la physique, crée des personnages cohérents et révolutionne 
        la création de contenu vidéo. Les créateurs professionnels adoptent massivement l'outil.
      </p>
      <div class="skill-badges">
        <span class="skill-item">Génération vidéo</span>
        <span class="skill-item">Text-to-Video</span>
        <span class="skill-item">Création de contenu</span>
      </div>
    </article>

    <!-- Cas 3: Google Gemini 2.0 -->
    <article class="project-card" style="border-left: 4px solid #4ade80;">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Gemini 2.0 : l'IA multimodale ultime</h3>
          <span class="project-badge task">Décembre 2024</span>
          <span class="project-badge dev" style="margin-left: 8px;">Google DeepMind</span>
        </div>
        <div style="font-size: 32px;">🌟</div>
      </div>
      <p style="color: var(--muted); line-height: 1.6; margin-bottom: 12px;">
        Gemini 2.0 Flash surpasse GPT-4o sur tous les benchmarks. Traitement natif de texte, images, vidéos et audio. 
        Génération d'images intégrée, code ultra-performant, et agents IA capables d'actions autonomes. 
        Google reprend la tête de la course à l'IA générative.
      </p>
      <div class="skill-badges">
        <span class="skill-item">Multimodal</span>
        <span class="skill-item">Agents IA</span>
        <span class="skill-item">Vision + Audio</span>
      </div>
    </article>

    <!-- Cas 4: DeepSeek-V3 -->
    <article class="project-card" style="border-left: 4px solid #3b82f6;">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">DeepSeek-V3 : l'IA open-source qui défie les géants</h3>
          <span class="project-badge task">Décembre 2024</span>
          <span class="project-badge dev" style="margin-left: 8px;">DeepSeek (Chine)</span>
        </div>
        <div style="font-size: 32px;">🚀</div>
      </div>
      <p style="color: var(--muted); line-height: 1.6; margin-bottom: 12px;">
        DeepSeek-V3 rivalise avec GPT-4 et Claude 3.5 pour seulement 5,5 millions de dollars de coût d'entraînement. 
        Open-source et ultra-performant en code, ce modèle chinois prouve qu'on peut créer des IA de classe mondiale 
        avec des budgets réduits. Un tremblement de terre dans l'industrie de l'IA.
      </p>
      <div class="skill-badges">
        <span class="skill-item">Open-source</span>
        <span class="skill-item">Efficacité</span>
        <span class="skill-item">671B paramètres</span>
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
