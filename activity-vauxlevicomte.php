<?php
$pageTitle = "Cabane Perchée de Chambonnière";
ob_start();
?>

<!-- Diaporama -->
<?php include('components/diaporama.php'); ?>

<!-- Main -->
<div class="w-full flex-grow flex flex-col justify-center items-center relative py-10 gap-10">

    <!-- Top section -->
    <?php $title = "Vaux le vicomte !";
    $text = "Un chateau plein d'histoire !";
    $subtext = "Profitez des joies du chateau de Vaux-le-Vicomte à 20min de la cabane. Ses jardins, ses grands espaces ...";
    include('components/section-top.php'); ?>


    <!-- Image caroussel -->
    <?php
    $list_of_cards = array(
        array("assets/img/activities/vauxlevicomte.webp", ""),
        array("assets/img/activities/vauxlevicomte2.webp", ""),
        array("assets/img/activities/vauxlevicomte3.webp", ""),
        array("assets/img/activities/vauxlevicomte4.webp", "")
    );
    include 'components/carroussel-1.php'; ?>

    <?php
    $location = array(
        "text" => "Visitez le chateau de Vaux-le-Vicomte et ses jardins à 20min de la cabane !",
        "display" => "77950 MAINCY - FRANCE",
        "link" => "77950 MAINCY - FRANCE"
    );

    $website = array(
        "text" => "Retrouvez-toutes les informations sur le chateau ici !",
        "display" => "https://vaux-le-vicomte.com/",
        "link" => "https://vaux-le-vicomte.com/"
    );

    $phone = array(
        "text" => "Contactez le chateau de Vaux-le-Vicomte au numero suivant !",
        "display" => "0164010101",
        "link" => "0164010101"
    );
    include 'includes/section-activity-location.php'; ?>


    <div class="w-full flex-grow flex justify-center items-center bg-none lg:bg-[url('assets/props/bg-brown.webp')] lg:bg-no-repeat lg:bg-right-bottom lg:bg-[length:30%_50%]">

        <div class="w-10/12 flex flex-col gap-4 py-8 sm:gap-10 sm:flex-row justify-center items-center max-w-[1200px]">

            <!-- Top section -->
            <div class="flex flex-row justify-center w-full gap-12">
                <div class="flex flex-col w-full lg:w-1/2 gap-4">
                    <h1 class="font-abril text-2xl">En savoir plus ...</h1>
                    <p class="text-sm">
                        Le domaine de Vaux-le-Vicomte est le fruit d’un esprit créatif et passionné, celui de Nicolas Fouquet, le surintendant des finances de Louix XIV.
                        Pour bâtir sa demeure, il s’adjoint les services de trois des plus grands artistes du Grand Siècle :
                        <br>
                        <br>- l'architecte Louis Le Vau, premier architecte du roi,
                        <br>- le peintre Charles Le Brun, fondateur de l'Académie de peinture,
                        <br>- le paysagiste André Le Nôtre, contrôleur général des bâtiments du roi et
                        <br>- le maître-maçon Michel Villedo.
                        <br>
                        <br>
                        Ils unirent leur génie pour bâtir un modèle dont la majesté et l’équilibre inspirèrent Louis XIV qui fera appel à eux pour construire le château de Versailles, celui de Vaux le Vicomte servant alors de modèle.
                        <br>
                        <br>
                        Les enfants sont particulièrement à l’honneur au château de Vaux le Vicomte avec les nombreuses animations organisées spécialement pour eux tout au long de l’année. Visite costumée, livrets d'énigmes et de jeux attendent les familles.
                        Si vos enfants aiment les châteaux, les histoires de princes et princesses, se déguiser et sont curieux alors les Visites au château de vaux le Vicomte sur la thème de la vie des enfants du 17e siècle risque bien de leur plaire. Pour vivre l'expérience du Grand Siècle en famille, le château de Vaux le Vicomte propose une visite originale où les enfants apprendront les règles de la bienséance et les loisirs au temps de Nicolas Fouquet.
                        <br>
                        <br>
                        Plus de renseignements sur <a src="https://vaux-le-vicomte.com" class="text-blue-400 hover:underline cursor-pointer">vaux-le-vicomte.com</a>

                    </p>
                </div>

                <div class="hidden lg:flex lg:w-1/2 justify-center items-center">
                    <div class="hidden lg:flex w-full h-[300px] rounded-tl-[100px] overflow-hidden">
                        <img src="assets/img/activities/vauxlevicomte.webp" class="object-cover w-full h-full" alt="Your Image">
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
<?php
$pageContent = ob_get_clean();
include 'layout.php';
?>