<?php 
$title = "Loading";
$description = "Loading GTACity RP";
$background_color = "bg-fixed background-with-overlay"; // bg-gradient-to-b from-gtacity-bleu-nuit from-10% to-gtacity-bleu-nuit2 to-100%
require('app/config/app.php');
require('app/models/base.php');
require('layouts/header.php'); ?>
<div class="relative h-screen">
  <!-- Div contenant le carrousel -->
  <div class="swiper mySwiper absolute top-0 left-0 w-full h-full z-0">
    <div class="swiper-wrapper">
      <div class="swiper-slide background-with-overlay">
        <img src="<?= base_url('assets/images/wallpapers/1.jpg'); ?>" />
      </div>
      <div class="swiper-slide background-with-overlay">
        <img src="<?= base_url('assets/images/wallpapers/2.jpg'); ?>" />
      </div>
      <div class="swiper-slide background-with-overlay">
        <img src="<?= base_url('assets/images/wallpapers/3.jpg'); ?>" />
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Div contenant le contenu principal -->
  <div class="flex flex-col justify-between items-center py-4">
    <div class="flex justify-center items-center flex-grow z-10">
      <img class="w-[250px] h-[250px] sm:w-[350px] sm:h-[350px]" src="<?= base_url('assets/images/logo.png'); ?>" loading="lazy" alt="Logo">
    </div>

    <div class="fixed bottom-0 left-0 flex flex-col items-start pb-4 ml-4">
      <p class="mb-4 px-4 py-2 text-3xl text-white font-bold uppercase">Bienvenue sur GTACity RP. Le serveur officiel de Garryschool !</p>
    </div>
    <div class="fixed bottom-0 right-0 flex flex-col items-end pb-4 ml-4">
      <p class="mb-4 px-4 py-2 text-3xl text-white font-bold uppercase">Chargement en cours...</p>
    </div>
  </div>
</div>
<?php require('layouts/footer.php'); ?>