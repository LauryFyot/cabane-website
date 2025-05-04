<?php include 'config/routes.php'; ?>
<!-- NAVBAR -->
<nav class="nav py-2 sticky w-full top-0 z-30 flex bg-[<?php echo $colorbase; ?>] justify-center h-[70px]">
    <div class="w-10/12 flex items-center justify-between flex-wrap max-w-[1200px] relative">
        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <p class="uppercase tracking-wide text-white">CABANE PERCHEE <br>DE <b>CHAMBONNIERE</b></p>
        </div>

        <!-- Burger (mobile only) -->
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-white hover:border-white" id="menu">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <!-- MENU DESKTOP -->
        <div class="hidden lg:flex flex-row gap-6 text-sm">
            <a href="<?= $routes['home'] ?>" class="text-white block py-2 link link-underline <?php if ($current_page == 'home') echo 'font-bold'; ?>">Home</a>
            <a href="<?= $routes['gallery'] ?>" class="text-white block py-2 link link-underline <?php if ($current_page == 'gallery') echo 'font-bold'; ?>">Galerie</a>
            <a href="<?= $routes['activities'] ?>" class="text-white block py-2 link link-underline <?php if ($current_page == 'activities') echo 'font-bold'; ?>">Activités</a>
            <a href="<?= $routes['description'] ?>" class="text-white block py-2 link link-underline <?php if ($current_page == 'description') echo 'font-bold'; ?>">Descriptif</a>
            <a href="<?= $routes['prices'] ?>" class="text-white block py-2 link link-underline <?php if ($current_page == 'prices') echo 'font-bold'; ?>">Tarifs</a>
            <a href="<?= $routes['contact'] ?>" class="text-white block py-2 link link-underline <?php if ($current_page == 'contact') echo 'font-bold'; ?>">Réservation & Accès</a>
        </div>
    </div>
</nav>

<!-- OVERLAY MOBILE (indépendant de la nav) -->
<div id="menu-overlay" class="fixed inset-0 hidden bg-black/40 backdrop-blur-md z-40 flex flex-col items-center justify-center p-6 text-[#a4643c] text-lg">
    <button id="close-menu" class="absolute top-4 right-6 text-3xl cursor-pointer z-50 p-4 rounded-full">
        <i class="fa-solid fa-xmark text-white cursor-pointer"></i>
    </button>


    <nav class="flex flex-col items-center gap-6 mt-8">
        <a href="<?= $routes['home'] ?>" class="text-white hover:underline <?php if ($current_page == 'home') echo 'font-bold'; ?>">Home</a>
        <a href="<?= $routes['gallery'] ?>" class="text-white hover:underline <?php if ($current_page == 'gallery') echo 'font-bold'; ?>">Galerie</a>
        <a href="<?= $routes['activities'] ?>" class="text-white hover:underline <?php if ($current_page == 'activities') echo 'font-bold'; ?>">Activités</a>
        <a href="<?= $routes['description'] ?>" class="text-white hover:underline <?php if ($current_page == 'description') echo 'font-bold'; ?>">Descriptif</a>
        <a href="<?= $routes['prices'] ?>" class="text-white hover:underline <?php if ($current_page == 'prices') echo 'font-bold'; ?>">Tarifs</a>
        <a href="<?= $routes['contact'] ?>" class="text-white hover:underline <?php if ($current_page == 'contact') echo 'font-bold'; ?>">Réservation & Accès</a>
    </nav>
</div>





<script>
    var a = $(".nav").offset().top;

    $(document).scroll(function() {
        if ($(this).scrollTop() > a) {
            $('.nav').css({
                "background": "#a4643c"
            });
        } else {
            $('.nav').css({
                "background": "<?php echo $colorbase; ?>"
            });
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuBtn = document.getElementById("menu");
        const overlay = document.getElementById("menu-overlay");
        const closeBtn = document.getElementById("close-menu");

        menuBtn.addEventListener("click", () => {
            overlay.classList.remove("hidden");
        });

        closeBtn.addEventListener("click", () => {
            overlay.classList.add("hidden");
        });
    });
</script>