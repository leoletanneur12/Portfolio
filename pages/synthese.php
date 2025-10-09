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
          <!-- Ajoutez vos lignes ici -->
        </tbody>
      </table>
    </div>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
