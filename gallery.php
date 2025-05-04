<?php
$pageTitle = "Galerie - Cabane Perchée de Chambonnière";
$current_page = 'gallery';
ob_start();
?>

    <!-- Diaporama -->
    <?php include ('components/diaporama.php'); ?>

    <!-- Galerie -->
    <div class="w-full flex-grow flex flex-col justify-center items-center gap-10 py-10" style="background-image: url('assets/props/wood-1.webp'); background-size: 30% 100%; background-repeat: no-repeat; background-position: right top;">

        <!-- Top section -->
        <?php $title = "La galerie <br>photo !";
        $text = "Immergez-vous dans un cocon de verdure !";
        $subtext = "Vous-trouverez ici les photos de la cabane sous toutes ses coutures ! Evadez-vous et venez vivre des instants insolites à moins d'1h de Paris pour un weekend-end ou plus.";
        include ('components/section-top.php'); ?>

        <!-- Gallery container -->

        <?php include ('includes/section-gallery.php'); ?>
    </div>

<?php
$pageContent = ob_get_clean();
include 'layout.php';
?>