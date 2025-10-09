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
        // Flux RSS Intelligence Artificielle
        'https://siecledigital.fr/category/intelligence-artificielle/feed/',
        'https://www.lemondeinformatique.fr/flux-rss/thematique/intelligence-artificielle/rss.xml',
        'https://feeds.feedburner.com/kdnuggets-data-mining-analytics',
        'https://www.artificialintelligence-news.com/feed/',
    ],
];
