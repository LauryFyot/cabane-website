<!-- Header + Backdrop (screen size) -->
<header id="bg-image" class="-mt-[70px] h-96 flex flex-col bg-fixed bg-center bg-cover" style="background-image: url('assets/img/Cabane dans les arbres.webp');">
    <div class="h-full w-full backdrop-opacity-10 bg-black/50 z-0 flex flex-col">

        <!-- Content -->
        <div class="w-full h-full flex-grow flex justify-center items-center">

            <!-- Navigation -->
            <!-- <div class="absolute left-10 h-full items-center hidden md:flex z-20">
                <button role="button" class="prev px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group" aria-label="prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:-translate-x-2 transition-all duration-200 ease-linear">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>

                </button>
            </div>
            <div class="absolute right-10 h-full items-center hidden md:flex z-20">
                <button role="button" class="next px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group" aria-label="next"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:translate-x-2 transition-all duration-200 ease-linear">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div> -->

            <!-- Text -->
            <div class="w-8/12 flex flex-row text-white items-center mt-10">
                <div class="flex flex-col justify-center gap-6">
                    <p class="font-abril text-3xl md:text-4xl">Cabane Perchée<br>de Chambonnière</p>

                    <p class="">Venez prendre un grand bol d'air dépaysant et insolite à moins d'une heure de Paris !</p>

                    <div class="flex gap-6">
                        <?php $text = "Galerie !"; $link = "gallery.php";
                        include 'components/buttons/button-light-white.php'; ?>
                        <?php $text = "Réserver !"; $link = "contact.php";
                        include 'components/buttons/button-plain-white.php'; ?>
                    </div>
                </div>

            </div>

        </div>
</header>

<script>
    $(document).ready(function () {
        const images = ['assets/img/Cabane dans les arbres.webp', 'assets/img/WE insolite.webp', 'assets/img/3 Acces a la Cabane.webp'];
        let index = 0;
        setInterval(() => {
            index = (index + 1) % images.length;
            $('#bg-image').fadeIn(400, function () {
                $(this).css('background-image', `url('${images[index]}')`).fadeIn(400);
            });
        }, 5000);
    });
</script>