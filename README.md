# Portfolio BTS SIO SLAM (PHP)

Un petit site portfolio en PHP/HTML/CSS/JS (sans framework) avec thème sombre violet, pages demandées, et ajout d’articles par simple lien (cyber/IA) stockés en JSON.

## Pages
- Accueil (`index.php`)
- Cybersécurité (`pages/cybersecurite.php`) — formulaire pour ajouter un article par URL
- Intelligence Artificielle (`pages/ia.php`) — idem
- Stage 1ère année (`pages/stage1.php`)
- Stage 2ème année (`pages/stage2.php`)
- Guide de bonnes conduites (`pages/guide.php`)
- Tableau de synthèse (`pages/synthese.php`)

## Lancer en local (Windows)
Vous avez besoin de PHP installé. Si ce n’est pas le cas, téléchargez "PHP for Windows" ou installez via winget.

### Installer PHP (si nécessaire)
Optionnel mais pratique avec winget:
```powershell
winget install --id=PHP.PHP -e
```

### Démarrer un serveur local
Dans PowerShell, placez-vous dans le dossier du projet puis lancez le serveur intégré de PHP:
```powershell
cd "c:\Users\Léo\Documents\Portfolio"
php -S localhost:8000
```
Ensuite ouvrez votre navigateur sur http://localhost:8000

## Données
- Les articles sont enregistrés en JSON:
  - `data/articles_cyber.json`
  - `data/articles_ia.json`

## Personnalisation
- Couleurs/Thème: `assets/css/style.css`
- En-tête/pied de page: `includes/header.php`, `includes/footer.php`
- Fonctions utilitaires: `includes/helpers.php`

## Sécurité et limites
- L’extraction de métadonnées (titre, image) est best effort. Certaines pages peuvent ne pas fournir d’OpenGraph/Twitter Cards.
- Un contrôle basique de l’URL est fait, mais évitez d’ajouter des URLs non fiables.
- En hébergement, désactivez l’affichage d’erreurs PHP et ajoutez des protections supplémentaires (rate limit, CSRF token, etc.).
