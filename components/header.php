<!-- Header + Backdrop (screen size) -->
<header id="bg-image" class="-mt-[70px] h-screen flex flex-col bg-fixed bg-center bg-cover transition-all duration-500 ease-in-out">
    <div class="h-full w-full backdrop-opacity-10 bg-black/50 z-0 flex flex-col">

        <!-- Content -->
        <div class="w-full h-full flex-grow flex justify-center items-center">

            <!-- Container -->
            <div class="w-10/12 flex flex-col text-white justify-center gap-6 max-w-[1200px]">

                <!-- Slide numbers + arrows -->
                <div class="flex flex-col gap-2">
                    <div class="flex items-top">
                        <p class="text-2xl font-bold leading-4 slide-number">01</p>
                        <p class="text-sm leading-4 opacity-50">/03</p>
                    </div>
                    <div class="flex gap-6">
                        <i id="arrow-left" class="fa-solid fa-arrow-left-long opacity-50 cursor-pointer"></i>
                        <i id="arrow-right" class="fa-solid fa-arrow-right-long cursor-pointer"></i>
                    </div>
                </div>

                <!-- Title -->
                <p class="font-abril text-4xl md:text-6xl">Cabane Perchée<br>de Chambonnière</p>

                <!-- Subtext -->
                <p>Venez prendre un bol d'air dépaysant et insolite à moins d'une heure de Paris ! Un séjour inoubliable dans une cabane perchée dans les arbres...</p>
                <p class="opacity-50 text-xs">Soufflez. Respirez. Evadez-vous.</p>

                <!-- Buttons -->
                <div class="flex gap-6">
                    <?php $text = "Galerie !"; $link = "gallery.php";
                    include 'components/buttons/button-light-white.php'; ?>
                    <?php $text = "Réserver !"; $link = "contact.php";
                    include 'components/buttons/button-plain-white.php'; ?>
                </div>
            </div>

            <div class="flex flex-row items-center gap-2 fixed bottom-8 left-8">
                <img src="assets/img/Gites_de_France_logo.webp" alt="" class="h-[30px] md:h-[50px]">
                <div class="relative flex items-center h-[40px] w-[80px]">
                    <i class="text-white fa-solid fa-person absolute left-0 text-[20px]"></i>
                    <i class="text-white fa-solid fa-person absolute left-[10px] text-[20px]"></i>
                    <i class="text-white fa-solid fa-person absolute left-[20px] text-[20px]"></i>
                    <i class="text-white fa-solid fa-person absolute left-[30px] text-[20px]"></i>
                </div>
            </div>

            <!-- IKEA button -->
            <div class="fixed bottom-[130px] right-4 flex items-center justify-center transform rotate-90 text-white text-sm">
                <span class="block">IKEA - 2017</span>
            </div>

            <!-- Discover more button -->
            <a class="fixed bottom-0 right-0 py-2 px-6 w-fit bg-white text-black text-xs text-left flex flex-col cursor-pointer" href="https://www.facebook.com/IKEAFrance/photos/a.65492656331/10152097991936332/?comment_id=10152103056166332&_rdr" target="_blank">
                <div class="flex justify-between w-full items-center">
                    <p class="font-bold">Ils parlent de nous</p>
                    <i class="fa-solid fa-arrow-right-long"></i>
                </div>
                <p class="opacity-50 text-[9px] italic">Découvrez les articles autour de la cabane !</p>
            </a>
        </div>
    </div>
</header>


<script>
    const bgImages = [
        "assets/img/Cabane dans les arbres.webp",
        "assets/img/Cabane pres de Paris.webp",
        "assets/img/3 Acces a la Cabane.webp"
    ];

    let currentSlide = 0;

    const header = document.getElementById("bg-image");
    const slideNumber = document.querySelector(".slide-number");

    function updateBackground() {
        header.style.backgroundImage = `url('${bgImages[currentSlide]}')`;
        if (slideNumber) slideNumber.textContent = `0${currentSlide + 1}`;
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % bgImages.length;
        updateBackground();
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + bgImages.length) % bgImages.length;
        updateBackground();
    }

    document.getElementById("arrow-right").addEventListener("click", nextSlide);
    document.getElementById("arrow-left").addEventListener("click", prevSlide);

    window.addEventListener("DOMContentLoaded", updateBackground);
</script>