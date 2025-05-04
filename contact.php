<?php
$pageTitle = "Galerie - Cabane Perchée de Chambonnière";
$current_page = 'contact';
ob_start();
?>
    <!-- Diaporama -->
    <?php include ('includes/section-contact-basic.php'); ?>

    
<?php
$pageContent = ob_get_clean();
include 'layout.php';
?>