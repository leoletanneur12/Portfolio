<?php
require_once __DIR__ . '/../includes/helpers.php';
$pageTitle = 'Tableau de synthèse';
$current = 'synthese';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="container">
  <section class="panel">
    <h1>Tableau de synthèse</h1>
    <p>Ce tableau met en relation les activités réalisées et les compétences du référentiel BTS SIO.</p>
    
    <!-- Lien vers le PDF du tableau de synthèse -->
    <div style="margin-bottom: 20px; padding: 14px; background: linear-gradient(135deg, rgba(124,58,237,.1), rgba(124,58,237,.03)); border: 1px solid rgba(124,58,237,.35); border-radius: 12px;">
      <p style="margin: 0 0 10px; font-weight: 600; color: var(--text);">📄 Document officiel du BTS SIO</p>
      <a class="btn btn-primary" href="<?= asset('assets/docs/Tableau_synthese_LETANNEUR_Leo_2026.pdf') ?>" target="_blank" rel="noopener" download>
        Télécharger le tableau de synthèse (PDF)
      </a>
    </div>

    <div class="table-wrapper">
      <table class="synth-table">
        <thead>
          <tr>
            <th>Activité / Projet</th>
            <th>Compétences mobilisées</th>
            <th>Technos / Outils</th>
            <th>Livrables</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Exemple: Application web interne</td>
            <td>Dev d’applications, gestion de projet, sécurité</td>
            <td>PHP, JS, MySQL, Git</td>
            <td>Code source, documentation, tests</td>
          </tr>          <tr>
            <td>
              <strong>Mise en place GLPI</strong>
              <p style="margin: 6px 0 0; font-size: 13px; color: var(--muted);">Du 01/12/2025 au 19/12/2025</p>
            </td>
            <td>Gestion du patrimoine informatique, gestion des tickets, gestion des droits</td>
            <td>GLPI, IT Service Management</td>
            <td>
              <a href="#galerie-glpi" style="color: var(--accent); text-decoration: none; font-weight: 600;">
                📸 Voir les photos →
              </a>
            </td>
          </tr>          <!-- Ajoutez vos lignes ici -->
        </tbody>
      </table>
    </div>

    <!-- Section galerie GLPI (sera complétée avec les photos) -->
    <article id="galerie-glpi" class="project-gallery-block" style="margin-top: 40px;">
      <h2 class="text-2xl font-semibold" style="margin-bottom: 8px;">GLPI - Gestion de parc informatique</h2>
      <p class="text-zinc-400" style="margin-bottom: 14px;">Cas pratique sur un lycée avec création des groupes, gestion des droits et des tickets d'incidents.</p>
      <div class="project-gallery-grid">
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/glpi/glpi-1.png') ?>" alt="GLPI - écran d'accueil" loading="lazy">
          <figcaption>Accueil GLPI</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/glpi/glpi-2.png') ?>" alt="GLPI - gestion des groupes et des droits" loading="lazy">
          <figcaption>Groupes et droits</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/glpi/glpi-3.png') ?>" alt="GLPI - vue des tickets" loading="lazy">
          <figcaption>Tickets d'incidents</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/glpi/glpi-4.png') ?>" alt="GLPI - interface de gestion" loading="lazy">
          <figcaption>Gestion du parc</figcaption>
        </figure>
      </div>
    </article>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
