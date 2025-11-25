<?php
// Configuration des flux RSS pour chaque catégorie

return [
    'cyber' => [
        // Flux RSS cybersécurité
        'https://www.cert.ssi.gouv.fr/feed/',
        'https://www.zataz.com/feed/',
        'https://feeds.feedburner.com/TheHackersNews',
        'https://www.bleepingcomputer.com/feed/',
        'https://krebsonsecurity.com/feed/',
        'https://www.schneier.com/blog/atom.xml',
    ],
    'ia' => [
        // Flux RSS Intelligence Artificielle Générative (sources françaises)
        'https://siecledigital.fr/category/intelligence-artificielle/feed/',
        'https://www.blogdumoderateur.com/feed/',
        'https://www.lebigdata.fr/feed',
        'https://www.01net.com/actualites/intelligence-artificielle/feed/',
        'https://www.usine-digitale.fr/intelligence-artificielle/rss',
        'https://www.frandroid.com/tag/intelligence-artificielle/feed',
        'https://www.journaldunet.com/rss/intelligence-artificielle/',
        'https://www.lemondeinformatique.fr/flux-rss/thematique/intelligence-artificielle/rss.xml',
    ],
];
