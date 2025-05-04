<?php
$pageTitle = "Cabane Perchée de Chambonnière";
$current_page = 'home';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ob_start();
?>
    <!-- Header -->
    <?php include 'components/header.php'; ?>

    <!-- Section 1 -->
    <?php include 'includes/section-1.php'; ?>

    <!-- Section 2 -->
    <?php include 'includes/section-2.php'; ?>

    <!-- Section 3 -->
    <?php include 'includes/section-3.php'; ?>

<?php
$pageContent = ob_get_clean();
include 'layout.php';
?>

<!-- <script>
    $(document).ready(function () {
        const images = ['assets/img/Cabane dans les arbres.webp', 'assets/img/WE insolite.webp', 'assets/img/3 Acces a la Cabane.webp'];
        let index = 0;
        setInterval(() => {
            index = (index + 1) % images.length;
            $('#bg-image').fadeIn(500, function () {
                $(this).css('background-image', `url('${images[index]}')`).fadeIn(500);
            });
        }, 5000);
    });
</script> -->
