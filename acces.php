<?php
$pageTitle = "Cabane Perchée de Chambonnière";
$current_page = 'access';
ob_start();
?>

<!-- Diaporama -->
<?php include ('components/diaporama.php'); ?>

<!-- Main -->
<div class="w-full flex-grow flex flex-col justify-center items-center py-10 gap-10" style="background-image: url('assets/props/wood-1.webp'); background-size: 30% 100%; background-repeat: no-repeat; background-position: right top;">

    <!-- Top section -->
    <?php $title = "Venir chez<br>nous !";
    $text = "Découvrez la cabane lors d'un séjour unique !";
    $subtext = "A 50min de Paris (A4 sortie 13), dhjzbfjkehrbfkjzehrbfkzjehrbfkzjehrbfkzjehrbf dcqdvcqùldf m,vsdflk m,vsfd";
    include ('components/section-top.php'); ?>

    <!-- Access container -->
    <div class="w-10/12 flex flex-col gap-8 md:flex-row justify-start items-center h-80 max-w-[1200px]">

        <!-- Left -->
        <div class="w-full md:w-1/2 h-full">
            <div class="w-full h-full flex flex-col gap-4 items-left text-left justify-center">
                <div class="flex flex-row gap-4 w-full items-top">
                    <i class="fa-solid fa-map-pin"></i>
                    <p class="text-sm font-semibold flex-grow">Adresse:</p>
                    <p class="text-xs text-right">8 rue de la chambonnière, 77540, Le Plessis-Feu-Aussoux</p>
                </div>
                <div class="h-[1px] w-full bg-gray-200"></div>
                <div class="flex flex-row gap-4 w-full items-top">
                    <i class="fa-solid fa-paper-plane"></i>
                    <p class="text-sm font-semibold flex-grow">Mail:</p>
                    <p class="text-xs text-right">contact@cabane-perchee-de-chambonniere.com</p>
                </div>
                <div class="h-[1px] w-full bg-gray-200"></div>
                <div class="flex flex-row gap-4 w-full items-top">
                    <i class="fa-solid fa-phone"></i>
                    <p class="text-sm font-semibold flex-grow">Téléphone:</p>
                    <p class="text-xs text-right">0608412216</p>
                </div>
                <div class="h-[1px] w-full bg-gray-200"></div>
                <div class="flex flex-row gap-4 w-full items-top">
                    <i class="fa-solid fa-location-dot"></i>
                    <p class="text-sm font-semibold flex-grow">GPS:</p>
                    <p class="text-xs text-right">
                        Latitude: 48.718656<br>
                        Longitude: 3.035885
                    </p>
                </div>
            </div>
        </div>


        <!-- Right -->
        <div class="hidden md:flex md:w-1/2 h-full rounded-xl overflow-hidden">
            <img src="assets/img/descriptif9.webp" class="object-cover w-full h-full" alt="Your Image">
        </div>
    </div>


    <!-- Maps -->
    <div id="google-maps-cabane" class="w-full h-[500px]">
        <iframe id="map" class="w-full h-full" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?&q=Cabane+Perchée+de+Chambonnière&zoom=8&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
    </div>
</div>


<?php
$pageContent = ob_get_clean();
include 'layout.php';
?>