# 🎓 Portfolio BTS SIO SLAM - Léo Letanneur# Portfolio BTS SIO SLAM (PHP)



Portfolio professionnel présentant mon parcours en BTS Services Informatiques aux Organisations, option SLAM (Solutions Logicielles et Applications Métiers).Un petit site portfolio en PHP/HTML/CSS/JS (sans framework) avec thème sombre violet, pages demandées, et ajout d’articles par simple lien (cyber/IA) stockés en JSON.



## ✨ Fonctionnalités## Pages

- Accueil (`index.php`)

- 💼 **Présentation personnelle** : compétences techniques, projets et parcours- Cybersécurité (`pages/cybersecurite.php`) — formulaire pour ajouter un article par URL

- 🔐 **Veille technologique Cybersécurité** : articles automatiquement synchronisés via flux RSS- Intelligence Artificielle (`pages/ia.php`) — idem

- 🤖 **Veille Intelligence Artificielle** : actualités IA récupérées automatiquement- Stage 1ère année (`pages/stage1.php`)

- 📚 **Documentation de stages** : présentation détaillée des stages 1ère et 2ème année- Stage 2ème année (`pages/stage2.php`)

- 📖 **Guide des bonnes pratiques** : règles professionnelles d'usage des outils informatiques- Guide de bonnes conduites (`pages/guide.php`)

- 📊 **Tableau de synthèse** : récapitulatif des compétences et réalisations- Tableau de synthèse (`pages/synthese.php`)



## 🛠️ Technologies utilisées## Lancer en local (Windows)

Vous avez besoin de PHP installé. Si ce n’est pas le cas, téléchargez "PHP for Windows" ou installez via winget.

- **Frontend** : HTML5, CSS3, JavaScript (vanilla)

- **Backend** : PHP 8+### Installer PHP (si nécessaire)

- **Base de données** : Fichiers JSON (articles)Optionnel mais pratique avec winget:

- **Thème** : Dark mode avec palette violet/noir```powershell

- **Flux RSS** : Synchronisation automatique des articleswinget install --id=PHP.PHP -e

```

## 📁 Structure du projet

### Démarrer un serveur local

```Dans PowerShell, placez-vous dans le dossier du projet puis lancez le serveur intégré de PHP:

Portfolio/```powershell

├── index.php                    # Page d'accueilcd "c:\Users\Léo\Documents\Portfolio"

├── pages/php -S localhost:8000

│   ├── cybersecurite.php       # Veille cybersécurité```

│   ├── ia.php                  # Veille IAEnsuite ouvrez votre navigateur sur http://localhost:8000

│   ├── stage1.php              # Stage 1ère année

│   ├── stage2.php              # Stage 2ème année## Données

│   ├── guide.php               # Guide de bonnes pratiques- Les articles sont enregistrés en JSON:

│   └── synthese.php            # Tableau de synthèse  - `data/articles_cyber.json`

├── includes/  - `data/articles_ia.json`

│   ├── header.php              # En-tête commun

│   ├── footer.php              # Pied de page## Personnalisation

│   └── helpers.php             # Fonctions utilitaires- Couleurs/Thème: `assets/css/style.css`

├── assets/- En-tête/pied de page: `includes/header.php`, `includes/footer.php`

│   └── css/- Fonctions utilitaires: `includes/helpers.php`

│       └── style.css           # Styles globaux

├── data/## Sécurité et limites

│   ├── articles_cyber.json     # Articles cybersécurité- L’extraction de métadonnées (titre, image) est best effort. Certaines pages peuvent ne pas fournir d’OpenGraph/Twitter Cards.

│   └── articles_ia.json        # Articles IA- Un contrôle basique de l’URL est fait, mais évitez d’ajouter des URLs non fiables.

├── config_rss.php              # Configuration des flux RSS- En hébergement, désactivez l’affichage d’erreurs PHP et ajoutez des protections supplémentaires (rate limit, CSRF token, etc.).

└── sync_rss.php                # Script de synchronisation
```

## 🚀 Installation locale

### Prérequis
- PHP 8.0 ou supérieur
- Un serveur web (Apache/WAMP recommandé) ou le serveur intégré PHP

### Méthode 1 : Avec WAMP (recommandé)
1. Clonez le projet dans `c:\wamp64\www\Portfolio`
2. Démarrez WAMP
3. Accédez à `http://localhost/Portfolio`

### Méthode 2 : Serveur intégré PHP
```powershell
cd c:\wamp64\www\Portfolio
php -S localhost:8000
```
Puis ouvrez `http://localhost:8000`

## 📰 Système de flux RSS

Le portfolio récupère automatiquement des articles depuis plusieurs sources :

**Cybersécurité :**
- CERT-FR
- ZATAZ
- The Hacker News
- BleepingComputer
- Krebs on Security
- Schneier on Security

**Intelligence Artificielle :**
- Siècle Digital IA
- Le Monde Informatique IA
- KDnuggets
- AI News

### Synchronisation manuelle (en local uniquement)
Décommentez le bouton de synchronisation dans les fichiers `pages/cybersecurite.php` et `pages/ia.php`, puis cliquez sur "🔄 Synchroniser".

**⚠️ Important** : Recommentez le bouton avant de mettre en ligne pour éviter que les visiteurs puissent synchroniser.

## 🎨 Personnalisation

- **Thème/Couleurs** : Modifier `assets/css/style.css`
- **Header/Footer** : Éditer `includes/header.php` et `includes/footer.php`
- **Flux RSS** : Ajouter/modifier les sources dans `config_rss.php`
- **Contenu** : Mettre à jour les fichiers dans `pages/`

## 🔒 Sécurité

- ✅ Pas de base de données (utilisation de JSON)
- ✅ Échappement HTML automatique via `h()`
- ✅ Validation des URLs
- ⚠️ **En production** : désactiver `display_errors` et commenter les boutons de synchronisation RSS

## 📝 Licence

Projet personnel réalisé dans le cadre du BTS SIO SLAM.

---

**Léo Letanneur** - Étudiant BTS SIO 2ème année option SLAM
