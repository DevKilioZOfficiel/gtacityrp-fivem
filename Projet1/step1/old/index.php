<?php 
$title = "Mes Personnages";
$description = "Gérer mes personnages GTACity RP";
$background_color = "bg-fixed bg-gtacity-bleu-nuit"; // bg-gradient-to-b from-gtacity-bleu-nuit from-10% to-gtacity-bleu-nuit2 to-100%
require('app/config/app.php');
require('app/models/base.php');
require('layouts/header.php'); ?>
<div>
    <!-- DEBUT  BOUTON QUITTER -->
    <div class="flex justify-end">
        <button type="button" id="closeButton" class="m-9 p-0 hover-effect middle none center rounded-lg bg-red-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
            <svg class="inline text-red-900 w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
            Quitter
        </button>
    </div>
    <!-- FIN BOUTON QUITTER -->
    <div class="h-full mx-auto px-4">
        <div class="flex justify-center">
            <img class="w-[100px] h-[100px] sm:w-[200px] sm:h-[200px]" src="<?= base_url('assets/images/logo.png'); ?>" loading="lazy">
        </div>
        <div class="flex justify-center">
            <div class="mt-10 mb-10">
                <p class="text-lg sm:text-xl text-white font-bold text-center">Bienvenue sur le serveur GTACity RP. Nous vous souhaitons un bon jeu parmi nous !</p>
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 2xl:px-40 3xl:px-8 grid grid-cols-1 md:grid-cols-3">

        <!-- PROFILE 1 -->
            <div class="p-2 relative flex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px]">
                <div class="bg-gtacity-bleu-corporate rounded-t-[10px] p-5">
                    <h2 class="uppercase font-bold text-md 3xl:text-2xl text-white text-center">Personnage principal</h2>
                </div>
                <div class="overflow-hidden h-[150px] pt-5" style="background-image: url('<?= base_url('assets/images/personnages/back.jpg'); ?>'); background-position: center;">
                    <img src="<?= base_url('assets/images/personnages/personnage.png'); ?>" class="gtacity-profil h-full w-full object-cover object-top" alt="Mateo MROZEK">
                </div>
                <div class="bg-gtacity-bleu-corporate2 flex-auto p-6 text-center">
                    <h5 class="text-white uppercase font-bold mb-3">Mateo MROZEK</h5>
                    <p class="text-white mb-3">
                        Faction: N/A
                    </p>
                    <p class="text-white mb-8">
                    Date de naissance: 18/03/2001
                    </p>
                    <p class="text-white mb-0">
                    Dernière utilisation: 23/07/2022 - 14:00
                    </p>
                </div>
                <div class="bg-gtacity-bleu-corporate rounded-b-[10px] p-5 grid grid-cols-2 md:grid-cols-2">
                    <!-- DEBUT PLAY PROFILE -->
                    <button type="button" class="w-[97%] hover-effect middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        <svg class="inline text-green-900 w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"></path>
                        </svg>
                    </button>
                    <!-- FIN PLAY PROFILE -->
                    <!-- DEBUT DELETE PROFILE -->
                    <button type="button" class="w-[97%] hover-effect middle none center rounded-lg bg-red-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        <svg class="inline text-red-900 w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                        </svg>
                    </button>
                    <!-- FIN DELETE PROFILE -->
                </div>
            </div>
        <!-- FIN PROFILE 1 -->
        <!-- PROFILE 2 -->
            <div class="p-2 relative flex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px]">
                <div class="bg-gtacity-bleu-corporate rounded-t-[10px] p-5">
                    <h2 class="uppercase font-bold text-md 3xl:text-2xl text-white text-center">Personnage secondaire</h2>
                </div>
                <div class="overflow-hidden h-[150px] pt-5" style="background-image: url('<?= base_url('assets/images/personnages/back.jpg'); ?>'); background-position: center;">
                    <!--<img src="<?= base_url('assets/images/personnages/no-personnage.png'); ?>" class="h-full w-full object-cover object-top" alt="Mateo MROZEK">-->
                </div>
                <div class="bg-gtacity-bleu-corporate2 flex-auto p-6 text-center">
                    <h5 class="text-white uppercase font-bold mb-3">Nouveau personnage</h5>
                    <!-- <p class="text-white mb-3">
                        Faction: N/A
                    </p>
                    <p class="text-white mb-8">
                    Date de naissance: 18/03/2001
                    </p>
                    <p class="text-white mb-0">
                    Dernière utilisation: 23/07/2022 - 14:00
                    </p>-->
                </div>
                <div class="bg-gtacity-bleu-corporate rounded-b-[10px] p-5">
                    <!-- DEBUT CREATE PROFILE -->
                    <button type="button" class="w-full hover-effect middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Créer mon personnage
                    </button>
                    <!-- FIN CREATE PROFILE -->
                </div>
            </div>
        <!-- FIN PROFILE 2 -->
        <!-- PROFILE VIP -->
            <div class="p-2 relative flex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px]">
                <div class="bg-gtacity-vip-profile-head rounded-t-[10px] p-5">
                    <h2 class="uppercase font-bold text-md 3xl:text-2xl text-white text-center">Personnage VIP</h2> <!-- text-[#99701b]-->
                </div>
                <div class="overflow-hidden h-[150px] pt-5" style="background-image: url('<?= base_url('assets/images/personnages/back.jpg'); ?>'); background-position: center;">
                    <img src="<?= base_url('assets/images/personnages/personnage2.png'); ?>" class="gtacity-profil h-full w-full object-cover object-top" alt="Mateo MROZEK">
                </div>
                <div class="bg-gtacity-bleu-corporate2 flex-auto p-6 text-center">
                    <h5 class="text-white uppercase font-bold mb-3">Jarod Ross</h5>
                    <p class="text-white mb-3">
                        Faction: N/A
                    </p>
                    <p class="text-white mb-8">
                    Date de naissance: --/--/----
                    </p>
                    <p class="text-white mb-0">
                    Dernière utilisation: 23/07/2022 - 17:57
                    </p>
                </div>
                <div class="bg-gtacity-bleu-corporate rounded-b-[10px] p-5 grid grid-cols-2 md:grid-cols-2">
                    <!-- DEBUT PLAY PROFILE -->
                    <button type="button" class="w-[97%] hover-effect middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        <svg class="inline text-green-900 w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"></path>
                        </svg>
                    </button>
                    <!-- FIN PLAY PROFILE -->
                    <!-- DEBUT DELETE PROFILE -->
                    <button type="button" class="w-[97%] hover-effect middle none center rounded-lg bg-red-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        <svg class="inline text-red-900 w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                        </svg>
                    </button>
                    <!-- FIN DELETE PROFILE -->
                </div>
            </div>
        <!-- FIN PROFILE VIP -->
        </div>
    </div>
</div>
<?php require('layouts/footer.php'); ?>