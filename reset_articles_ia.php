<?php
// Script pour réinitialiser les articles IA avant une nouvelle synchronisation
require_once __DIR__ . '/includes/helpers.php';

// Vider le fichier des articles IA
$emptyArray = [];
if (save_articles('ia', $emptyArray)) {
    echo "✅ Articles IA réinitialisés avec succès.\n";
    echo "👉 Rendez-vous sur pages/veille-outils.php et cliquez sur 'Synchroniser' pour récupérer les nouveaux articles.\n";
} else {
    echo "❌ Erreur lors de la réinitialisation.\n";
}
