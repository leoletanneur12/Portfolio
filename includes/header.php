<?php
require_once __DIR__ . '/helpers.php';
$base = base_path();
?>
<!doctype html>
<html lang="fr" class="h-full">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0b0b10">
  <title><?= isset($pageTitle) ? h($pageTitle) . ' — ' : '' ?>Portfolio BTS SIO SLAM</title>
  <!-- Tailwind (CDN) for rapid, modern styling -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { inter: ['Inter', 'system-ui', 'sans-serif'] },
          colors: {
            primary: { DEFAULT: '#7c3aed', 600: '#6d28d9', 700: '#5b21b6' },
            accent: '#22d3ee'
          },
          boxShadow: {
            'glow': '0 10px 30px rgba(124,58,237,.25)'
          }
        }
      }
    }
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset('assets/css/style.css') ?>">
</head>
<body class="min-h-full font-inter text-zinc-100 bg-[radial-gradient(1200px_500px_at_50%_-10%,rgba(124,58,237,0.18),transparent_60%),_linear-gradient(180deg,#0a0a0f_0%,#0e0e16_100%)]">
  <header class="sticky top-0 z-50">
    <div class="mx-auto max-w-6xl px-4 py-3">
      <div class="flex items-center justify-between rounded-full border border-zinc-800/80 bg-zinc-950/60 backdrop-blur supports-[backdrop-filter]:bg-zinc-950/40 px-3 py-2 shadow-glow">
  <a class="flex items-center gap-2 font-extrabold tracking-tight text-zinc-100 hover:text-white" href="<?= url('index.php') ?>">
          <span class="inline-block h-8 w-8 rounded-full bg-gradient-to-tr from-primary to-fuchsia-500"></span>
          <span>Léo — BTS SIO SLAM</span>
        </a>
        <nav class="hidden md:flex items-center gap-1">
          <a class="px-3 py-2 rounded-full text-sm <?= ($current==='home'?'bg-primary/20 text-white':'text-zinc-300 hover:text-white hover:bg-zinc-800/60') ?>" href="<?= url('index.php') ?>">Accueil</a>
          <a class="px-3 py-2 rounded-full text-sm <?= ($current==='realisations'?'bg-primary/20 text-white':'text-zinc-300 hover:text-white hover:bg-zinc-800/60') ?>" href="<?= url('pages/realisations.php') ?>">Mes réalisations</a>
          <a class="px-3 py-2 rounded-full text-sm <?= ($current==='ia'?'bg-primary/20 text-white':'text-zinc-300 hover:text-white hover:bg-zinc-800/60') ?>" href="<?= url('pages/ia.php') ?>">Intelligence Artificielle</a>
          <a class="px-3 py-2 rounded-full text-sm <?= ($current==='stage1'?'bg-primary/20 text-white':'text-zinc-300 hover:text-white hover:bg-zinc-800/60') ?>" href="<?= url('pages/stage1.php') ?>">Stage 1ère année</a>
          <a class="px-3 py-2 rounded-full text-sm <?= ($current==='stage2'?'bg-primary/20 text-white':'text-zinc-300 hover:text-white hover:bg-zinc-800/60') ?>" href="<?= url('pages/stage2.php') ?>">Stage 2ème année</a>
          <a class="px-3 py-2 rounded-full text-sm <?= ($current==='guide'?'bg-primary/20 text-white':'text-zinc-300 hover:text-white hover:bg-zinc-800/60') ?>" href="<?= url('pages/guide.php') ?>">Guide</a>
          <a class="px-3 py-2 rounded-full text-sm <?= ($current==='synthese'?'bg-primary/20 text-white':'text-zinc-300 hover:text-white hover:bg-zinc-800/60') ?>" href="<?= url('pages/synthese.php') ?>">Synthèse</a>
        </nav>
      </div>
    </div>
  </header>
