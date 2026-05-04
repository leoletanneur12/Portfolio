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
          </tr>
          <tr>
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
          </tr>
          <tr>
            <td>
              <strong>Refonte du site de la mairie</strong>
              <p style="margin: 6px 0 0; font-size: 13px; color: var(--muted);">Projet de stage de 2ème année</p>
            </td>
            <td>Développement web, modernisation de l’interface, intégration de contenu</td>
            <td>PHP, Laravel, HTML, CSS</td>
            <td>
              <a href="#galerie-mairie" style="color: var(--accent); text-decoration: none; font-weight: 600;">
                📸 Voir les photos →
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <strong>Photo4U</strong>
              <p style="margin: 6px 0 0; font-size: 13px; color: var(--muted);">Plateforme web de partage et de gestion de photos</p>
            </td>
            <td>Conception d’interface, gestion d’authentification, organisation de galerie</td>
            <td>PHP, Laravel, base de données</td>
            <td>
              <a href="#galerie-photo4u" style="color: var(--accent); text-decoration: none; font-weight: 600;">
                📸 Voir les photos →
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <strong>Projet pompier</strong>
              <p style="margin: 6px 0 0; font-size: 13px; color: var(--muted);">Interface de gestion de données</p>
            </td>
            <td>Création de formulaires, affichage de listes, ergonomie de saisie</td>
            <td>PHP, HTML, CSS</td>
            <td>
              <a href="#galerie-pompier" style="color: var(--accent); text-decoration: none; font-weight: 600;">
                📸 Voir les photos →
              </a>
            </td>
          </tr>
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

    <article id="galerie-mairie" class="project-gallery-block" style="margin-top: 40px;">
      <h2 class="text-2xl font-semibold" style="margin-bottom: 8px;">Refonte du site de la mairie</h2>
      <p class="text-zinc-400" style="margin-bottom: 14px;">Captures du projet de refonte du site municipal réalisé pendant le stage de 2ème année.</p>
      <div class="project-gallery-grid">
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/stage2/mairie/mairie-1.png') ?>" alt="Refonte du site de la mairie - capture 1" loading="lazy">
          <figcaption>Capture 1</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/stage2/mairie/mairie-2.png') ?>" alt="Refonte du site de la mairie - capture 2" loading="lazy">
          <figcaption>Capture 2</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/stage2/mairie/mairie-3.png') ?>" alt="Refonte du site de la mairie - capture 3" loading="lazy">
          <figcaption>Capture 3</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/stage2/mairie/mairie-4.png') ?>" alt="Refonte du site de la mairie - capture 4" loading="lazy">
          <figcaption>Capture 4</figcaption>
        </figure>
      </div>
    </article>

    <article id="galerie-photo4u" class="project-gallery-block" style="margin-top: 40px;">
      <h2 class="text-2xl font-semibold" style="margin-bottom: 8px;">Photo4U</h2>
      <p class="text-zinc-400" style="margin-bottom: 14px;">Galerie des captures du projet Photo4U.</p>
      <div class="project-gallery-grid">
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/photo4u/photo4u-accueil.png') ?>" alt="Photo4U - accueil" loading="lazy">
          <figcaption>Accueil</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/photo4u/photo4u-dashboard.png') ?>" alt="Photo4U - tableau de bord" loading="lazy">
          <figcaption>Tableau de bord</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/photo4u/photo4u-galerie.png') ?>" alt="Photo4U - galerie" loading="lazy">
          <figcaption>Galerie</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/photo4u/photo4u-inscription.png') ?>" alt="Photo4U - inscription" loading="lazy">
          <figcaption>Inscription</figcaption>
        </figure>
      </div>
    </article>

    <article id="galerie-pompier" class="project-gallery-block" style="margin-top: 40px;">
      <h2 class="text-2xl font-semibold" style="margin-bottom: 8px;">Projet pompier</h2>
      <p class="text-zinc-400" style="margin-bottom: 14px;">Captures du module pompier avec affichage de liste et formulaire.</p>
      <div class="project-gallery-grid">
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/pompier/pompier-liste.png') ?>" alt="Projet pompier - liste" loading="lazy">
          <figcaption>Liste</figcaption>
        </figure>
        <figure class="project-shot">
          <img src="<?= asset('assets/docs/pompier/pompier-formulaire.png') ?>" alt="Projet pompier - formulaire" loading="lazy">
          <figcaption>Formulaire</figcaption>
        </figure>
      </div>
    </article>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
