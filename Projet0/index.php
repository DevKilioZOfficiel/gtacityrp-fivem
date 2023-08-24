<?php 
$title = "Charte Graphique";
$description = "Retrouvez la charte graphique officielle de GTACityRP";
$background_color = "bg-fixed bg-gtacity-bleu2"; // bg-gradient-to-b from-gtacity-bleu-nuit from-10% to-gtacity-bleu-nuit2 to-100%
require('app/config/app.php');
require('app/models/base.php');
require('layouts/header.php'); ?>
<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 mt-5 mb-2">
    <h1 class="text-3xl font-bold tracking-tight text-white">Couleurs du projet</h1>
    <div class="grid grid-cols-1 md:grid-cols-3">
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">
        <div class="w-full bg-gtacity-bleu2 mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Fond bleu 2 - Principal</h3>
                HEX: #142132<br>
                RBG: rgba(20, 33, 50, 1)<br>
                HSL: hsla(214, 43%, 14%, 1)<br>
                HSV: hsva(214, 60%, 20%, 1)<br>
                CMYK: cmyk(60%, 34%, 0%, 80%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">
        <div class="w-full bg-gtacity-bleu1 mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Fond bleu 1 - Secondaire</h3>
                HEX: #60608A<br>
                RBG: rgba(296, 96, 138, 1)<br>
                HSL: hsla(240, 18%, 46%, 1)<br>
                HSV: hsva(240, 30%, 54%, 1)<br>
                CMYK: cmyk(30%, 30%, 0%, 46%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">

        <div class="w-full bg-gtacity-bleu-nuit mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Bleu Nuit</h3>
                HEX: #282434<br>
                RBG: rgba(40, 36, 52, 1)<br>
                HSL: hsla(255, 18%, 17%, 1)<br>
                HSV: hsva(255, 31%, 20%, 1)<br>
                CMYK: cmyk(23%, 31%, 0%, 80%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">
        <div class="w-full bg-gtacity-bleu-nuit2 mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Bleu Nuit 2</h3>
                HEX: #271950<br>
                RBG: rgba(39, 25, 80, 1)<br>
                HSL: hsla(255, 52%, 21%, 1)<br>
                HSV: hsva(255, 69%, 31%, 1)<br>
                CMYK: cmyk(51%, 69%, 0%, 69%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">
        <div class="w-full bg-gtacity-bleu-corporate mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Bleu Corporate</h3>
                HEX: #005FA5<br>
                RBG: rgba(0, 95, 165, 1)<br>
                HSL: hsla(205, 100%, 32%, 1)<br>
                HSV: hsva(205, 100%, 65%, 1)<br>
                CMYK: cmyk(100%, 42%, 0%, 35%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">
        
        <div class="w-full bg-gtacity-bleu-corporate-locked mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Bleu Corporate - Element "bloqué"</h3>
                HEX: #005FA54D<br>
                RBG: rgba(0, 95, 165, 0.3)<br>
                HSL: hsla(205, 100%, 32%, 0.3)<br>
                HSV: hsva(205, 100%, 65%, 0.3)<br>
                CMYK: cmyk(100%, 42%, 0%, 35%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">
        <div class="w-full bg-gtacity-bleu-corporate2 mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Bleu Corporate 2</h3>
                HEX: #00487D<br>
                RBG: rgba(0, 72, 125, 1)<br>
                HSL: hsla(205, 100%, 25%, 1)<br>
                HSV: hsva(205, 100%, 49%, 1)<br>
                CMYK: cmyk(100%, 42%, 0%, 51%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">
        
        <div class="w-full bg-gtacity-bleu-corporate2-locked mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Bleu Corporate 2 - Element "bloqué"</h3>
                HEX: #00487D4D<br>
                RBG: rgba(0, 72, 125, 0.3)<br>
                HSL: hsla(205, 100%, 25%, 0.3)<br>
                HSV: hsva(205, 100%, 49%, 0.3)<br>
                CMYK: cmyk(100%, 42%, 0%, 51%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">

        <div class="w-full bg-gtacity-bleu-tiers mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Bleu Tiers</h3>
                HEX: #0B0B4D<br>
                RBG: rgba(11, 11, 77, 1)<br>
                HSL: hsla(240, 75%, 17%, 1)<br>
                HSV: hsva(240, 86%, 30%, 1)<br>
                CMYK: cmyk(86%, 86%, 0%, 70%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">

        <div class="w-full bg-gtacity-bleu-tiers2 mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Bleu Tiers</h3>
                HEX: #191970<br>
                RBG: rgba(25, 25, 112, 1)<br>
                HSL: hsla(240, 64%, 27%, 1)<br>
                HSV: hsva(240, 78%, 44%, 1)<br>
                CMYK: cmyk(78%, 78%, 0%, 56%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">

        <div class="w-full bg-gtacity-selected-profile mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Element selectionné</h3>
                HEX: #5FA8DF<br>
                RBG: rgba(95, 168, 223, 1)<br>
                HSL: hsla(206, 67%, 62%, 1)<br>
                HSV: hsva(206, 57%, 87%, 1)<br>
                CMYK: cmyk(57%, 25%, 0%, 13%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">

        <div class="w-full bg-gtacity-vip-profile-head mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Header Element VIP</h3>
                HEX: #F6B93B<br>
                RBG: rgba(246, 185, 59, 1)<br>
                HSL: hsla(40, 91%, 60%, 1)<br>
                HSV: hsva(40, 76%, 96%, 1)<br>
                CMYK: cmyk(0%, 25%, 76%, 4%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">

        <div class="w-full bg-gtacity-vip-profile-head-locked mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Header Element VIP - Bloqué (membre non VIP)</h3>
                HEX: #F6B93B4D<br>
                RBG: rgba(246, 185, 59, 0.3)<br>
                HSL: hsla(40, 91%, 60%, 0.3)<br>
                HSV: hsva(40, 76%, 96%, 0.3)<br>
                CMYK: cmyk(0%, 25%, 76%, 4%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">

        <div class="w-full bg-gtacity-vip-profile mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Fond Contenu Element VIP</h3>
                HEX: #FDCB6E<br>
                RBG: rgba(253, 203, 110, 1)<br>
                HSL: hsla(39, 97%, 71%, 1)<br>
                HSV: hsva(39, 57%, 99%, 1)<br>
                CMYK: cmyk(0%, 20%, 57%, 1%)<br>
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">

        <div class="w-full bg-gtacity-vip-profile mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Fond Contenu Element VIP - Sélectionné</h3>
                HEX: #DABB0B<br>
                RBG: rgba(218, 187, 11, 1)<br>
                HSL: hsla(51, 90%, 45%, 1)<br>
                HSV: hsva(51, 95%, 85%, 1)<br>
                CMYK: cmyk(0%, 14%, 95%, 15%)<br>
            </div>
        </div>
      </div>
    </div>
    <h1 class="text-3xl font-bold tracking-tight text-white mb-2">Polices d'écritures du projet</h1>
    <div class="grid grid-cols-1 md:grid-cols-2">
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">
        <div class="w-full bg-gtacity-bleu1 mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Aucune police donné</h3>
            </div>
        </div>
      </div>
    </div>

    <h1 class="text-3xl font-bold tracking-tight text-white mb-2">Logo du projet</h1>
    <div class="grid grid-cols-1 md:grid-cols-3">
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">
        <div class="w-full bg-gtacity-bleu1 mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Logo Principal</h3>
                <img class="w-24 h-24" src="<?= base_url('assets/images/logo.png'); ?>">
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">
        <div class="w-full bg-gtacity-bleu1 mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Logo Rouge</h3>
                <img class="w-24 h-24" src="<?= base_url('assets/images/logo-rouge.png'); ?>">
            </div>
        </div>
      </div>
      <div class="flex sm:ml-[10%] sm:mr-[10%] relativeflex flex-col min-w-0 break-words border-1 border-gray-300 rounded-[10px] mb-5">
        <div class="w-full bg-gtacity-bleu1 mb-5 flex flex-wrap color-block w-full h-full flex-col rounded-xl bg-clip-border text-gray-700 shadow-md">
            <div class="mt-5 p-6 text-white">
                <h3 class="font-medium">Logo Vert</h3>
                <img class="w-24 h-24" src="<?= base_url('assets/images/logo-vert.png'); ?>">
            </div>
        </div>
      </div>
    </div>
</div>
<?php require('layouts/footer.php'); ?>