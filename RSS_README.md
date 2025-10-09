# Synchronisation automatique des flux RSS

## Configuration

Les flux RSS sont configurés dans `config_rss.php`. Vous pouvez modifier les URLs des flux pour chaque catégorie.

### Flux actuels :

**Cybersécurité :**
- CERT-FR
- ZATAZ
- The Hacker News
- BleepingComputer

**Intelligence Artificielle :**
- Siècle Digital
- Le Monde Informatique
- KDnuggets

## Utilisation

### Méthode 1 : Synchronisation manuelle depuis les pages

Sur les pages Cybersécurité et IA, cliquez sur le bouton **🔄 Synchroniser RSS** pour récupérer les derniers articles automatiquement.

### Méthode 2 : Script de synchronisation

Exécutez le script `sync_rss.php` depuis la ligne de commande :

```bash
php sync_rss.php
```

### Méthode 3 : Tâche planifiée (recommandé)

**Windows :**
1. Ouvrez le Planificateur de tâches
2. Créez une nouvelle tâche
3. Définissez le déclencheur (ex: toutes les heures)
4. Action : `php.exe` avec l'argument `C:\wamp64\www\Portfolio\sync_rss.php`

**Linux/Mac (cron) :**
```bash
# Synchronisation toutes les heures
0 * * * * php /chemin/vers/Portfolio/sync_rss.php
```

## Fonctionnement

Le système :
1. Lit les flux RSS configurés
2. Parse les articles (titre, description, image, lien)
3. Vérifie les doublons (basé sur l'URL)
4. Ajoute les nouveaux articles au format JSON
5. Affiche automatiquement les articles sur les pages

Les articles sont stockés dans :
- `data/articles_cyber.json`
- `data/articles_ia.json`

## Ajout manuel

Vous pouvez toujours ajouter des articles manuellement en collant une URL. Le système essaiera d'extraire automatiquement :
- Le titre (balise `<title>` ou Open Graph)
- La description (meta description ou og:description)
- L'image (og:image ou twitter:image)
- Le nom du site (og:site_name)
