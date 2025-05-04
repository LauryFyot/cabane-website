<?php
$pageTitle = "Cabane Perchée de Chambonnière";
$current_page = 'prices';
ob_start();
?>

<!-- Diaporama -->
<?php include('components/diaporama.php'); ?>

<!-- Main -->
<div class="w-full flex-grow flex flex-col justify-center items-center pt-10">

    <!-- Top section -->
    <?php $title = "Découvrez les tarifs !";
    $text = "Découvrez la cabane lors d'un séjour unique !";
    $subtext = "Tarif spécial 2 nuits et plus <b>-40% à partir de la 2ème nuitée</b> !
                        Immergez vous dans la nature, perchés dans les arbres dans une cabane en bois à moins d’1h de Paris !";
    include('components/section-top.php'); ?>


    <!-- Price caroussel -->
    <?php include 'includes/section-price.php'; ?>

    <!-- Price calculator -->
    <?php include 'includes/section-calculator.php'; ?>

    <!-- Our services -->
    <?php include 'includes/section-services.php'; ?>

    <!-- Réserver -->
    <div class="mb-10 flex flex-col items-center gap-2">
    <p class="italic text-xs text-center font-semibold uppercase">Parfois une petite pause s'impose !</p>
    <p class="italic text-xs text-gray-500 text-center mb-2">Venez réaliser votre rêve d'enfant<br>et dormir dans les arbres à la cabane perchée de Chambonnière...</p>
        <?php $text = "Réserver !"; $link = "contact";
        include 'components/buttons/button-plain-black.php'; ?>
    </div>

</div>
<?php
$pageContent = ob_get_clean();
include 'layout.php';
?>