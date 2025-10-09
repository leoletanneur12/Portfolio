<?php
require_once __DIR__ . '/../includes/helpers.php';
$pageTitle = 'Guide de bonnes conduites';
$current = 'guide';
?>
<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="container">
  <section class="panel">
    <h1 class="text-3xl font-bold mb-2"> Guide de bonnes conduites IT</h1>
    <p class="muted">Règles essentielles pour utiliser les outils informatiques de manière professionnelle et sécurisée au quotidien.</p>
  </section>

  <div class="project-grid">
    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Comptes et accès</h3>
          <span class="project-badge dev">Identité</span>
        </div>
        <div style="font-size: 32px;"></div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        La sécurité commence par une bonne gestion de vos accès personnels et professionnels.
      </p>
      <ul class="task-list">
        <li>N''utilisez que votre compte nominatif</li>
        <li>Ne partagez jamais vos identifiants</li>
        <li>Activez l''authentification multifacteur (MFA)</li>
        <li>Verrouillez votre session en quittant votre poste</li>
        <li>Demandez des droits admin uniquement si nécessaire</li>
      </ul>
    </div>

    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Mots de passe</h3>
          <span class="project-badge task">Protection</span>
        </div>
        <div style="font-size: 32px;"></div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Un mot de passe robuste est votre première ligne de défense contre les cyberattaques.
      </p>
      <ul class="task-list">
        <li>Créez des mots de passe longs et uniques (12+ caractères)</li>
        <li>Privilégiez les passphrases mémorisables</li>
        <li>Utilisez un gestionnaire de mots de passe</li>
        <li>Ne notez jamais vos mots de passe en clair</li>
        <li>Changez-les immédiatement en cas de fuite</li>
      </ul>
    </div>

    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Messagerie et phishing</h3>
          <span class="project-badge dev">Email</span>
        </div>
        <div style="font-size: 32px;"></div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Les emails sont le vecteur d''attaque le plus courant. Restez vigilant en permanence.
      </p>
      <ul class="task-list">
        <li>Vérifiez l''expéditeur avant d''ouvrir un lien/pièce jointe</li>
        <li>Survolez les liens pour voir la vraie URL</li>
        <li>En cas de doute, confirmez par un autre canal</li>
        <li>Signalez immédiatement tout message suspect</li>
        <li>Ne transmettez jamais d''infos sensibles par email</li>
      </ul>
    </div>

    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Données sensibles</h3>
          <span class="project-badge task">RGPD</span>
        </div>
        <div style="font-size: 32px;"></div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        La protection des données personnelles et professionnelles est une obligation légale.
      </p>
      <ul class="task-list">
        <li>Ne collectez que le strict nécessaire</li>
        <li>Classez les données (public, interne, confidentiel)</li>
        <li>Chiffrez les informations critiques</li>
        <li>Contrôlez les accès selon les besoins</li>
        <li>Respectez les durées de conservation et droits des personnes</li>
      </ul>
    </div>

    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Stockage et partage</h3>
          <span class="project-badge dev">Cloud</span>
        </div>
        <div style="font-size: 32px;"></div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Utilisez uniquement les outils validés par votre organisation pour stocker et partager.
      </p>
      <ul class="task-list">
        <li>Stockez sur les espaces pro, pas les comptes personnels</li>
        <li>Évitez les clés USB/disques externes non autorisés</li>
        <li>Protégez les liens de partage (mot de passe, expiration)</li>
        <li>N''utilisez pas Dropbox, Drive perso, WeTransfer sans accord</li>
        <li>Sauvegardez régulièrement selon les procédures</li>
      </ul>
    </div>

    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Poste de travail</h3>
          <span class="project-badge task">Sécurité</span>
        </div>
        <div style="font-size: 32px;"></div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Votre poste est la porte d''entrée vers le réseau de l''entreprise. Protégez-le.
      </p>
      <ul class="task-list">
        <li>Gardez l''antivirus/EDR toujours actif</li>
        <li>Installez uniquement des logiciels autorisés</li>
        <li>Appliquez les mises à jour dès leur publication</li>
        <li>Évitez d''afficher des infos sensibles à l''écran</li>
        <li>Utilisez le VPN hors du réseau d''entreprise</li>
      </ul>
    </div>

    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">Télétravail et mobilité</h3>
          <span class="project-badge dev">Remote</span>
        </div>
        <div style="font-size: 32px;"></div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        Le travail à distance nécessite des précautions supplémentaires pour la confidentialité.
      </p>
      <ul class="task-list">
        <li>Travaillez dans un espace calme et privé</li>
        <li>Privilégiez le matériel fourni par l''entreprise</li>
        <li>Méfiez-vous des Wi-Fi publics (café, gare...)</li>
        <li>Ne laissez jamais votre équipement dans un véhicule</li>
        <li>Transportez votre matériel de manière discrète</li>
      </ul>
    </div>

    <div class="project-card">
      <div style="display: flex; align-items: start; justify-content: space-between; margin-bottom: 12px;">
        <div>
          <h3 class="text-xl font-bold" style="margin-bottom: 6px;">En cas d''incident</h3>
          <span class="project-badge task">Urgence</span>
        </div>
        <div style="font-size: 32px;"></div>
      </div>
      <p style="color: var(--muted); margin-bottom: 16px; line-height: 1.6;">
        La rapidité de réaction est cruciale pour limiter l''impact d''un incident de sécurité.
      </p>
      <ul class="task-list">
        <li>Déconnectez immédiatement la machine du réseau</li>
        <li>Alertez le support IT ou l''équipe sécurité sans délai</li>
        <li>Ne tentez pas de corriger seul sans procédure</li>
        <li>Documentez ce qui s''est passé (captures, logs...)</li>
        <li>Changez vos mots de passe si demandé</li>
      </ul>
    </div>
  </div>

  <section class="panel" style="margin-top: 40px;">
    <h2 class="text-2xl font-semibold mb-6"> Points clés à retenir</h2>
    <div class="skill-badges">
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🔐</div>
        <span class="skill-badge-text">Protégez vos accès</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🔑</div>
        <span class="skill-badge-text">Mots de passe robustes</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">📧</div>
        <span class="skill-badge-text">Vigilance phishing</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🗂️</div>
        <span class="skill-badge-text">Données classifiées</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">☁️</div>
        <span class="skill-badge-text">Outils validés uniquement</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🔄</div>
        <span class="skill-badge-text">Mises à jour régulières</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🚨</div>
        <span class="skill-badge-text">Signalement immédiat</span>
      </div>
      <div class="skill-badge-item">
        <div class="skill-badge-icon">🎯</div>
        <span class="skill-badge-text">Formation continue</span>
      </div>
    </div>
    <p style="color: var(--muted); margin-top: 20px; line-height: 1.7; text-align: center;">
      Ces bonnes pratiques réduisent considérablement les risques de sécurité et protègent à la fois vos données personnelles et celles de l''entreprise. 
      <strong>La cybersécurité est l''affaire de tous !</strong>
    </p>
  </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
