<?php
$pageTitle = "Activités - Cabane Perchée de Chambonnière";
$current_page = 'activities';
ob_start();
?>
    <!-- Diaporama -->
    <?php include ('components/diaporama.php'); ?>

    <!-- Main -->
    <div class="w-full flex-grow flex flex-col justify-center items-center" style="background-image: url('assets/props/wood-1.webp'); background-size: 30% 100%; background-repeat: no-repeat; background-position: left top;">

        <!-- Container -->
        <div class="w-10/12 flex flex-col justify-start items-center py-10 gap-10 max-w-[1200px]">

            <!-- Top section -->
            <div class="flex flex-row w-full gap-12">
                <div class="flex flex-col w-full lg:w-1/2 gap-4">
                    <h1 class="font-abril text-4xl">Un weekend d'évasion ..</h1>
                    <div class="grid grid-cols-2 text-justify gap-4">
                        <p class="text-sm">
                            Idéalement située au centre de la seine et marne, vous serez à seulement 45mn de Paris. Vous pourrez facilement rayonner depuis la cabane et visiter de nombreuses richesses patrimoniales de la région
                        </p>
                        <p class="text-sm">
                            tels que les Chateaux de Vaux le Vicomte, de Blandy les Tours et de Fontainebleau, la cité médiévale de Provins, Crécy la Chapelle (la petite Venise de la brie) ...
                        </p>
                    </div>
                </div>

                <div class="hidden lg:flex lg:w-1/2 h-[200px] rounded-br-[100px] overflow-hidden">
                    <img src="assets/img/Cabane pres de Paris.webp" class="object-cover w-full h-full" alt="Your Image">
                </div>
            </div>


            <!-- Activities -->
            <div class="w-full flex flex-col gap-4">


                <!-- Vaux-le-Vicomte -->
                <?php
                $is_outdoor = "INTERIEUR";
                $type = "Culture";
                $img_link = "assets/img/activities/vauxlevicomte.webp";
                $address = "77950 MAINCY - FRANCE";
                $website = "https://vaux-le-vicomte.com/";
                $phone = "01.64.14.41.90";
                $title = "Château de Vaux le Vicomte";
                $description = "Le Château de Vaux Le Vicomte fût l'inspiration  du château de Versailles. Propriété de Nicolas Fouquet, surintendant des finances de Louis XIV, le jardinier André Le Nôtre, l’architecte Louis Le Vau et le peintre-décorateur Charles Le Brun ont œuvré à la création de ce joyau qui traverse les siècles.";
                $page_link = "activity-vauxlevicomte.php";
                include ('components/activity-tab.php'); ?>

                <!-- Provins -->
                <?php
                $is_outdoor = "EXTERIEUR";
                $type = "Culture";
                $img_link = "assets/img/activities/provins4.webp";
                $address = "77160 PROVINS - FRANCE";
                $website = "https://provins.net/";
                $phone = "01.64.60.26.26";
                $title = "Provins";
                $description = "A 30mn de la Cabane Perchée de Chambonnière, nous vous invitons à visiter la ville de Provins inscrite au Patrimoine mondial de l’humanité par l’UNESCO en 2001. Provins offre un témoignage extraordinaire et complet de l’architecture médiévale entre le  XIIe et le XIIIe siècle.";
                $page_link = "activities/provins.php";
                include ('components/activity-tab.php'); ?>

                <!-- Accrobranche -->
                <?php
                $is_outdoor = "Exterieur";
                $type = "Sport";
                $img_link = "assets/img/activities/accrobranche.webp";
                $address = "D231, 77160 Chenoise";
                $website = "https://www.jumpingforest.com/";
                $phone = "01 60 70 58 66";
                $title = "Accrobranche";
                $description = "Parc de loisirs situé près de Chenoise-Cucharmoy en Seine-et-Marne, Jumping Forest Chenoise vous propose plusieurs parcours d'accrobranche et un laser game en extérieur. Venez déjeuner et/ou passer un agréable moment avec votre famille, vos amis ou vos collègues !
                                Profitez de votre séjour à la Cabane perchée de Chambonnière pour passer un super moment en famille ou entre amis. Le Parc de loisirs  Jumping Forest à Chenoise vous propose plusieurs parcours d'accrobranche et un laser game en extérieur.";
                $page_link = "activities/accrobranche.php";
                include ('components/activity-tab.php'); ?>

                <!-- Parc des felins -->
                <?php
                $is_outdoor = "Exterieur";
                $type = "VISITE";
                $img_link = "assets/img/activities/parcdesfelins.webp";
                $address = "77540 Lumigny-Nesles-Ormeaux";
                $website = "https://lumigny-safari-reserve.com/";
                $phone = "01 64 51 33 33";
                $title = "Lumigny Safari Reserve";
                $description = "Pour les amoureux des animaux, à 5mn de la Cabane se trouvent le Parc des Félins/Terre de Singes. 600 animaux vous attendent au coeur de 90 ha de bois";
                $page_link = "activities/parcdesfelins.php";
                include ('components/activity-tab.php'); ?>

                <!-- Clokart -->
                <?php
                $is_outdoor = "Exterieur";
                $type = "Sport";
                $img_link = "assets/img/activities/clokart4.webp";
                $address = "D209, 77141 Vaudoy-en-Brie";
                $website = "http://clotkart.com/";
                $phone = "01 64 07 55 65";
                $title = "Clotkart";
                $description = "Découvrez les émotions du pilotage avec vos enfants et conjoint ou entre amis. Profitez de sessions de courses d'une dizaine de minutes sur le circuit Clotkart et son super tracé.";
                $page_link = "activities/clokart.php";
                include ('components/activity-tab.php'); ?>

                <!-- Galleria Continua -->
                <?php
                $is_outdoor = "Interieur";
                $type = "Culture";
                $img_link = "assets/img/activities/galleriacontinua.webp";
                $address = "46 Rue de la Ferté Gaucher, 77169 Boissy-le-Châtel";
                $website = "https://www.galleriacontinua.com/";
                $phone = "01 64 20 39 50";
                $title = "Galleria Continua";
                $description = "Immersion complète dans un lieu atypique. Cette usine réhabilitée en galerie d'art contemporain vous accueille avec des oeuvres venant du monde entier.";
                $page_link = "activities/galleriacontinua.php";
                include ('components/activity-tab.php'); ?>

                <!-- Activités-natures -->
                <?php
                $is_outdoor = "Exterieur";
                $type = "DECOUVERTE";
                $img_link = "assets/img/activities/tennis.webp";
                $address = "Chez nous !";
                $website = "";
                $phone = "";
                $title = "Activites Nature";
                $description = "De nombreuses activités vous permettront de vous reconnecter à la nature. A proximité de la Cabane vous avez de nombreuses possibilités: Accrobranche, Paintball, Pêche, Cyclisme, Golfs, Centres Equestres… Il y en a pour tous les gouts!";
                $page_link = "activities/activites-natures.php";
                include ('components/activity-tab.php'); ?>



            </div>
        </div>
    </div>

<?php
$pageContent = ob_get_clean();
include 'layout.php';
?>