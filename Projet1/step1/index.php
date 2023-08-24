<?php 
$title = "Mes Personnages";
$description = "Gérer mes personnages GTACity RP";
$background_color = "bg-fixed bg-gtacity-bleu2"; // bg-gradient-to-b from-gtacity-bleu-nuit from-10% to-gtacity-bleu-nuit2 to-100%
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
    <div class="h-full mx-auto px-4 relative top-[-115px]  3xl:top-[-10px]">
        <div class="flex justify-center">
            <img class="w-[50px] h-[50px] sm:w-[100px] sm:h-[100px] 3xl:w-[200px] 3xl:h-[200px]" src="<?= base_url('assets/images/logo.png'); ?>" loading="lazy">
        </div>
        <div class="flex justify-center">
            <div class="mb-10">
                <p class="text-lg sm:text-xl text-white font-bold text-center">Bienvenue sur le serveur GTACity RP. Nous vous souhaitons un bon jeu parmi nous !</p>
            </div>
        </div>
        <div class="flex -top-10 mx-auto max-w-[75%] px-2 2xl:px-2 3xl:px-2 grid grid-cols-1 md:grid-cols-3">

        <!-- PROFILE 1 -->
            <!-- SI PROFIL 1 NON EXISTANT -->
            <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] neon-color mb-5" style="display:block;" id="profile1_create">
                <div class="bg-gtacity-bleu-corporate-locked rounded-t-[10px] p-5">
                    <h2 class="z-10 uppercase font-bold text-md 3xl:text-2xl text-white text-center">Personnage principal</h2>
                </div>
                <div class="overflow-hidden h-[150px] pt-5 opacity-25" style="background-image: url('<?= base_url('assets/images/personnages/back.jpg'); ?>'); background-position: center;">
                    <img src="<?= base_url('assets/images/personnages/personnage.png'); ?>"  style="filter: blur(5px);" class="gtacity-profil h-full w-full object-cover object-top" alt="Mateo MROZEK">
                </div>
                <!-- RENDU SI PROFIL NON EXISTA?T -->
                <div class="bg-gtacity-bleu-corporate2-locked flex-auto p-6 text-center h-[250px]">
                    <!--<h5 class="text-white uppercase font-bold mb-3">Nouveau personnage</h5>-->
                    <p class="text-white font-bold mt-10 mb-3">
                        Ce personnage n'existe pas.
                    </p>
                    <p class="text-white font-bold mt-5">
                        Créer une nouvelle histoire
                    </p>
                </div>
                <!-- DEBUT BOUTONS PROFIL NON EXISTANT -->
                <div class="bg-gtacity-bleu-corporate rounded-b-[10px] p-5 grid grid-cols-1 md:grid-cols-1">
                    <button type="button" class="no-opacity mix-blend-normal w-full hover-effect middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40">
                        Créer mon personnage
                    </button>
                </div>
                <!-- FIN BOUTONS PROFIL NON EXISTANT -->
            </div>
            <!-- FIN PROFILE 1 NON EXISTANT -->
            <!-- SI PROFIL 1 EXISTE -->
            <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] neon-color mb-5" style="display:none;" id="profile1_exist">
                <div class="bg-gtacity-bleu-corporate rounded-t-[10px] p-5">
                    <h2 class="uppercase font-bold text-md 3xl:text-2xl text-white text-center">Personnage principal</h2>
                </div>
                <div class="overflow-hidden h-[150px] pt-5" style="background-image: url('<?= base_url('assets/images/personnages/back.jpg'); ?>'); background-position: center;">
                    <img src="<?= base_url('assets/images/personnages/personnage.png'); ?>" class="gtacity-profil h-full w-full object-cover object-top" alt="Mateo MROZEK">
                </div>
                <div class="bg-gtacity-bleu-corporate2 flex-auto p-6 text-center h-[245px]">
                    <h5 class="text-white uppercase text-md 3xl:text-2xl font-bold mb-3">Mateo MROZEK</h5>
                    <p class="text-white mb-3">
                        Citoyen
                    </p>
                    <p class="text-white mb-9">
                    Né le: 18/03/2001
                    </p>
                    <p class="text-white mb-0 sm:text-[12px]">
                    Dernière utilisation: 23/07/2022 - 14:00
                    </p>
                </div>
                <div class="bg-gtacity-bleu-corporate rounded-b-[10px] p-5 grid grid-cols-3 md:grid-cols-3">
                    <!-- DEBUT PLAY PROFILE -->
                    <button type="button" class="col-span-2 w-[97%] hover-effect middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        <svg class="inline text-green-900 w-6 h-6" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                            <path d="M479.565-114.022v-68.13h298.283v-595.696H479.565v-68.37h298.283q27.697 0 48.033 20.337 20.337 20.336 20.337 48.033v595.696q0 27.599-20.337 47.865-20.336 20.265-48.033 20.265H479.565Zm-60.5-182.369-48.978-48.5L471.13-445.935H114.022v-68.13H469.13L368.087-615.109l48.978-48.5L601.435-479l-182.37 182.609Z"/>
                        </svg>
                    </button>
                    <!-- FIN PLAY PROFILE -->
                    <!-- DEBUT DELETE PROFILE -->
                    <button type="button" class="w-[97%] hover-effect middle none center rounded-lg bg-red-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none modal-open"  data-modal-target="modal-delete-1">
                        <svg class="inline text-red-900 w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                        </svg>
                    </button>
                    <!-- FIN DELETE PROFILE -->
                </div>
            </div>
            <!-- FIN PROFIL 1 EXISTANT -->
        <!-- FIN PROFILE 1 -->



        <!-- PROFILE 2 -->
            <!-- SI PROFIL 2 NON EXISTANT -->
            <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] neon-color mb-5" style="display:block;" id="profile2_create">
                <div class="bg-gtacity-bleu-corporate-locked rounded-t-[10px] p-5">
                    <h2 class="z-10 uppercase font-bold text-md 3xl:text-2xl text-white text-center">Personnage secondaire</h2>
                </div>
                <div class="overflow-hidden h-[150px] pt-5 opacity-25" style="background-image: url('<?= base_url('assets/images/personnages/back.jpg'); ?>'); background-position: center;">
                    <img src="<?= base_url('assets/images/personnages/personnage.png'); ?>"  style="filter: blur(5px);" class="gtacity-profil h-full w-full object-cover object-top" alt="Mateo MROZEK">
                </div>
                <!-- RENDU SI PROFIL NON EXISTA?T -->
                <div class="bg-gtacity-bleu-corporate2-locked flex-auto p-6 text-center h-[250px]">
                    <!--<h5 class="text-white uppercase font-bold mb-3">Nouveau personnage</h5>-->
                    <p class="text-white font-bold mt-10 mb-3">
                        Ce personnage n'existe pas.
                    </p>
                    <p class="text-white font-bold mt-5">
                        Créer une nouvelle histoire
                    </p>
                </div>
                <!-- DEBUT BOUTONS PROFIL NON EXISTANT -->
                <div class="bg-gtacity-bleu-corporate rounded-b-[10px] p-5 grid grid-cols-1 md:grid-cols-1">
                    <button type="button" class="no-opacity mix-blend-normal w-full hover-effect middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40">
                        Créer mon personnage
                    </button>
                </div>
                <!-- FIN BOUTONS PROFIL NON EXISTANT -->
            </div>
            <!-- FIN PROFILE 2 NON EXISTANT -->
            <!-- SI PROFIL 2 EXISTE -->
            <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] neon-color mb-5" style="display:none;" id="profile2_exist">
                <div class="bg-gtacity-bleu-corporate rounded-t-[10px] p-5">
                    <h2 class="uppercase font-bold text-md 3xl:text-2xl text-white text-center">Personnage secondaire</h2>
                </div>
                <div class="overflow-hidden h-[150px] pt-5" style="background-image: url('<?= base_url('assets/images/personnages/back.jpg'); ?>'); background-position: center;">
                    <img src="<?= base_url('assets/images/personnages/personnage.png'); ?>" class="gtacity-profil h-full w-full object-cover object-top" alt="Mateo MROZEK">
                </div>
                <div class="bg-gtacity-bleu-corporate2 flex-auto p-6 text-center h-[245px]">
                    <h5 class="text-white uppercase text-md 3xl:text-2xl font-bold mb-3">Mateo MROZEK</h5>
                    <p class="text-white mb-3">
                        Citoyen
                    </p>
                    <p class="text-white mb-9">
                    Né le: 18/03/2001
                    </p>
                    <p class="text-white mb-0 sm:text-[12px]">
                    Dernière utilisation: 23/07/2022 - 14:00
                    </p>
                </div>
                <div class="bg-gtacity-bleu-corporate rounded-b-[10px] p-5 grid grid-cols-3 md:grid-cols-3">
                    <!-- DEBUT PLAY PROFILE -->
                    <button type="button" class="col-span-2 w-[97%] hover-effect middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        <svg class="inline text-green-900 w-6 h-6" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                            <path d="M479.565-114.022v-68.13h298.283v-595.696H479.565v-68.37h298.283q27.697 0 48.033 20.337 20.337 20.336 20.337 48.033v595.696q0 27.599-20.337 47.865-20.336 20.265-48.033 20.265H479.565Zm-60.5-182.369-48.978-48.5L471.13-445.935H114.022v-68.13H469.13L368.087-615.109l48.978-48.5L601.435-479l-182.37 182.609Z"/>
                        </svg>
                    </button>
                    <!-- FIN PLAY PROFILE -->
                    <!-- DEBUT DELETE PROFILE -->
                    <button type="button" class="w-[97%] hover-effect middle none center rounded-lg bg-red-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none modal-open"  data-modal-target="modal-delete-2">
                        <svg class="inline text-red-900 w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                        </svg>
                    </button>
                    <!-- FIN DELETE PROFILE -->
                </div>
            </div>
            <!-- FIN PROFIL 2 EXISTANT -->
        <!-- FIN PROFIL 2 -->



        <!-- PROFIL VIP -->
            <!-- SI MEMBRE NON VIP -->
            <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] neon-color mb-5" style="display:block;" id="profile3_notvip">
                <div class="bg-gtacity-vip-profile-head-locked rounded-t-[10px] p-5">
                    <h2 class="uppercase font-bold text-md 3xl:text-2xl text-white text-center">Personnage VIP</h2> <!-- text-[#99701b]-->
                </div>
                <div class="overflow-hidden h-[150px] pt-5 opacity-25" style="background-image: url('<?= base_url('assets/images/personnages/back.jpg'); ?>'); background-position: center;">
                    <img src="<?= base_url('assets/images/personnages/personnage.png'); ?>"  style="filter: blur(5px);" class="gtacity-profil h-full w-full object-cover object-top" alt="Mateo MROZEK">
                </div>
                <!-- SI NON VIP -->
                <div class="bg-gtacity-bleu-corporate2-locked flex-auto p-6 text-center mt-0 mb-0 h-[250px]">
                    <div class="flex items-center justify-center">
                        <svg class="w-24 h-24 flex justify-center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="#F6B93B" d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/>
                        </svg>
                    </div>
                    <p class="text-white font-bold mt-5 mb-3">
                        Vous n'êtes pas encore VIP
                    </p>
                </div>
                <div class="bg-gtacity-bleu-corporate-locked rounded-b-[10px] p-5 grid grid-cols-1 md:grid-cols-1">
                    <!-- DEBUT REJOINDRE PROFILE -->
                    <button type="button" class="w-full hover-effect middle none center rounded-lg bg-gtacity-vip-profile-head py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-gtacity-vip-profile-head transition-all hover:shadow-lg hover:shadow-gtacity-vip-profile-head focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        Rejoignez le club
                    </button>
                    <!-- FIN REJOINDRE PROFILE -->
                </div>
            </div>
            <!-- FIN MEMBRE NON VIP -->

            <!-- SI PROFIL 3 NON EXISTANT -->
            <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] neon-color mb-5" style="display:none;" id="profile3_create">
                <div class="bg-gtacity-vip-profile-head-locked rounded-t-[10px] p-5">
                    <h2 class="z-10 uppercase font-bold text-md 3xl:text-2xl text-white text-center">PERSONNAGE VIP</h2>
                </div>
                <div class="overflow-hidden h-[150px] pt-5 opacity-25" style="background-image: url('<?= base_url('assets/images/personnages/back.jpg'); ?>'); background-position: center;">
                    <img src="<?= base_url('assets/images/personnages/personnage.png'); ?>"  style="filter: blur(5px);" class="gtacity-profil h-full w-full object-cover object-top" alt="Mateo MROZEK">
                </div>
                <!-- RENDU SI PROFIL NON EXISTA?T -->
                <div class="bg-gtacity-bleu-corporate2-locked flex-auto p-6 text-center h-[250px]">
                    <!--<h5 class="text-white uppercase font-bold mb-3">Nouveau personnage</h5>-->
                    <p class="text-white font-bold mt-10 mb-3">
                        Ce personnage n'existe pas.
                    </p>
                    <p class="text-white font-bold mt-5">
                        Créer une nouvelle histoire
                    </p>
                </div>
                <!-- DEBUT BOUTONS PROFIL NON EXISTANT -->
                <div class="bg-gtacity-bleu-corporate rounded-b-[10px] p-5 grid grid-cols-1 md:grid-cols-1">
                    <button type="button" class="no-opacity mix-blend-normal w-full hover-effect middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40">
                        Créer mon personnage
                    </button>
                </div>
                <!-- FIN BOUTONS PROFIL NON EXISTANT -->
            </div>
            <!-- FIN PROFILE 3 NON EXISTANT -->
            <!-- SI PROFIL 3 EXISTE -->
            <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] neon-color mb-5" style="display:none;" id="profile3_exist">
                <div class="bg-gtacity-vip-profile-head rounded-t-[10px] p-5">
                    <h2 class="uppercase font-bold text-md 3xl:text-2xl text-white text-center">PERSONNAGE VIP</h2>
                </div>
                <div class="overflow-hidden h-[150px] pt-5" style="background-image: url('<?= base_url('assets/images/personnages/back.jpg'); ?>'); background-position: center;">
                    <img src="<?= base_url('assets/images/personnages/personnage.png'); ?>" class="gtacity-profil h-full w-full object-cover object-top" alt="Mateo MROZEK">
                </div>
                <div class="bg-gtacity-bleu-corporate2 flex-auto p-6 text-center h-[245px]">
                    <h5 class="text-white uppercase text-md 3xl:text-2xl font-bold mb-3">Mateo MROZEK</h5>
                    <p class="text-white mb-3">
                        Citoyen
                    </p>
                    <p class="text-white mb-9">
                    Né le: 18/03/2001
                    </p>
                    <p class="text-white mb-0 sm:text-[12px]">
                    Dernière utilisation: 23/07/2022 - 14:00
                    </p>
                </div>
                <div class="bg-gtacity-bleu-corporate rounded-b-[10px] p-5 grid grid-cols-3 md:grid-cols-3">
                    <!-- DEBUT PLAY PROFILE -->
                    <button type="button" class="col-span-2 w-[97%] hover-effect middle none center rounded-lg bg-green-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                        <svg class="inline text-green-900 w-6 h-6" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                            <path d="M479.565-114.022v-68.13h298.283v-595.696H479.565v-68.37h298.283q27.697 0 48.033 20.337 20.337 20.336 20.337 48.033v595.696q0 27.599-20.337 47.865-20.336 20.265-48.033 20.265H479.565Zm-60.5-182.369-48.978-48.5L471.13-445.935H114.022v-68.13H469.13L368.087-615.109l48.978-48.5L601.435-479l-182.37 182.609Z"/>
                        </svg>
                    </button>
                    <!-- FIN PLAY PROFILE -->
                    <!-- DEBUT DELETE PROFILE -->
                    <button type="button" class="w-[97%] hover-effect middle none center rounded-lg bg-red-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none modal-open"  data-modal-target="modal-delete-3">
                        <svg class="inline text-red-900 w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                        </svg>
                    </button>
                    <!-- FIN DELETE PROFILE -->
                </div>
            </div>
            <!-- FIN PROFIL 2 EXISTANT -->
        <!-- FIN PROFIL VIP -->

        <!-- MODAL DELETE ACCOUNT -->
            <div class="modal fixed inset-0 flex items-center justify-center overflow-auto z-10 hidden" id="modal-delete-1">
                <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-50"></div>
                <div class="modal-container modal-border bg-[#1F3147] w-[60%] max-h-[90%] rounded-lg shadow-lg z-20 overflow-auto">
                    <div class="modal-content py-4 px-6 overflow-auto">
                        <div class="flex items-center justify-between">
                            <h2 class="w-full text-2xl text-white font-bold mb-4 text-center">Supprimer le profil [NOM]</h2>
                            <span class="inline right-0 modal-close pb-[20px]"><i class="fa-solid fa-xmark fa-xl" style="color: #ff0000;"></i></span>
                        </div>              
                        <!-- Mettez ici le contenu du modal -->
                        <h3 class="w-full text-sm text-white font-bold mb-4 text-center">Êtes-vous sûr de supprimer ce profil ?</h3>
                        <div class="grid grid-cols-1">
                            <div class="flex pt-3 items-center justify-center">
                                <button id="add_to_gps" type="button" class="m-2 inline hover-effect middle none center rounded-lg bg-red-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none modal-close">Supprimer le profil</button>
                                <button type="button" class="m-2 inline hover-effect middle none center rounded-lg bg-gray-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-gray-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none modal-close">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN DELETE ACCOUNT 2 -->
            <!-- MODAL DELETE ACCOUNT -->
            <div class="modal fixed inset-0 flex items-center justify-center overflow-auto z-10 hidden" id="modal-delete-2">
                <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-50"></div>
                <div class="modal-container modal-border bg-[#1F3147] w-[60%] max-h-[90%] rounded-lg shadow-lg z-20 overflow-auto">
                    <div class="modal-content py-4 px-6 overflow-auto">
                        <div class="flex items-center justify-between">
                            <h2 class="w-full text-2xl text-white font-bold mb-4 text-center">Supprimer le profil [NOM]</h2>
                            <span class="inline right-0 modal-close pb-[20px]"><i class="fa-solid fa-xmark fa-xl" style="color: #ff0000;"></i></span>
                        </div>              
                        <!-- Mettez ici le contenu du modal -->
                        <h3 class="w-full text-sm text-white font-bold mb-4 text-center">Êtes-vous sûr de supprimer ce profil ?</h3>
                        <div class="grid grid-cols-1">
                            <div class="flex pt-3 items-center justify-center">
                                <button id="add_to_gps" type="button" class="m-2 inline hover-effect middle none center rounded-lg bg-red-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none modal-close">Supprimer le profil</button>
                                <button type="button" class="m-2 inline hover-effect middle none center rounded-lg bg-gray-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-gray-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none modal-close">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN DELETE ACCOUNT 1 -->
            <!-- MODAL DELETE ACCOUNT -->
            <div class="modal fixed inset-0 flex items-center justify-center overflow-auto z-10 hidden" id="modal-delete-3">
                <div class="modal-overlay absolute inset-0 bg-gray-500 opacity-50"></div>
                <div class="modal-container modal-border bg-[#1F3147] w-[60%] max-h-[90%] rounded-lg shadow-lg z-20 overflow-auto">
                    <div class="modal-content py-4 px-6 overflow-auto">
                        <div class="flex items-center justify-between">
                            <h2 class="w-full text-2xl text-white font-bold mb-4 text-center">Supprimer le profil [NOM]</h2>
                            <span class="inline right-0 modal-close pb-[20px]"><i class="fa-solid fa-xmark fa-xl" style="color: #ff0000;"></i></span>
                        </div>              
                        <!-- Mettez ici le contenu du modal -->
                        <h3 class="w-full text-sm text-white font-bold mb-4 text-center">Êtes-vous sûr de supprimer ce profil VIP ?</h3>
                        <div class="grid grid-cols-1">
                            <div class="flex pt-3 items-center justify-center">
                                <button id="add_to_gps" type="button" class="m-2 inline hover-effect middle none center rounded-lg bg-red-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none modal-close">Supprimer le profil</button>
                                <button type="button" class="m-2 inline hover-effect middle none center rounded-lg bg-gray-500 py-3 px-6 font-sans text-xs sm:text-sm font-bold uppercase text-white shadow-md shadow-gray-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none modal-close">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN DELETE ACCOUNT 1 -->
        </div>
    </div>
</div>
<script>
const modalOpenButtons = document.querySelectorAll('.modal-open');
const modalCloseButtons = document.querySelectorAll('.modal-close');

modalOpenButtons.forEach((button) => {
  button.addEventListener('click', function () {
    const modalId = button.getAttribute('data-modal-target');
    const modal = document.getElementById(modalId);
    modal.classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  });
});

modalCloseButtons.forEach((button) => {
  button.addEventListener('click', function () {
    const modal = button.closest('.modal');
    modal.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  });
});
</script>
<?php require('layouts/footer.php'); ?>