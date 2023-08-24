<!DOCTYPE html>
<html lang="fr" style="height: inherit; <?php if(empty($_GET['debug'])){ ?>display: none;<?php } ?>" class="CharSelect">
    <title><?= APP_NAME; ?> - <?= $title; ?></title>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="title" content="<?= APP_NAME; ?> - <?= $title; ?>">
        <meta name="description" content="<?= $description; ?>">
        <meta name="author" content="© GTACityRP by Mateo | 2023">
        <meta name="revisit-after" content="15 days">
        <meta name="language" content="fr">
        <meta name="image" content="<?= base_url('assets/images/logo.png'); ?>">
        <meta name="robots" content="noindex,nofollow">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <script>
          tailwind.config = {
            theme: {
              screens: {
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
                '3xl': '1924px',
              },
              extend: {
                colors: {
                  'background': 'rgb(96,96,138)',
                  'neon-color': '#1092ee',
                  'gtacity-bleu-nuit': '#282434',
                  'gtacity-bleu-nuit2': '#271950',
                  'gtacity-bleu-corporate': '#005FA5',
                  'gtacity-bleu-corporate-locked': 'rgb(0 95 165 / 30%)',
                  'gtacity-bleu-corporate2': '#00487D',
                  'gtacity-bleu-corporate2-locked': 'rgb(0 72 125 / 30%)',
                  'gtacity-bleu-tiers': '#0B0B4D',
                  'gtacity-bleu-tiers2': '#191970',
                  'gtacity-selected-profile': '#5fa8df',
                  'gtacity-vip-profile-head': '#f6b93b',
                  'gtacity-vip-profile-head-locked': 'rgb(246 185 59 / 30%)',
                  'gtacity-vip-profile': '#fdcb6e',
                  'gtacity-vip-profile-selected': '#dabb0b',
                  'gtacity-bleu1': 'rgb(96,96,138)',
                  'gtacity-bleu2': 'rgb(20,33,50)',
                }
             }
            }
        }
        </script>
        <style>
  /* Empêcher la sélection de texte */
  .no-select {
    user-select: none;
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
  }
</style>
        <link href="<?= base_url('assets/css/main.css?t='.time()); ?>" rel="stylesheet">
    </head>
<body class="<?= $background_color; ?> no-select">