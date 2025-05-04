<!-- Caroussel -->
<div class="w-full relative h-40 md:h-72">

    <!-- Content (container + slider) -->
    <div class="absolute w-full h-full transition-all duration-500 ease-linear">
        <div class="slides-container w-full h-full snap-x snap-mandatory gap-2 overflow-x-scroll overflow-y-hidden flex items-center justify-start scroll-smooth relative">

            <?php foreach ($list_of_cards as $index => $card): ?>
                <div class="slide h-full w-52 md:w-96 flex-shrink-0 snap-center overflow-hidden cursor-pointer">
                    <!-- Wrapper de l'image qui gère uniquement le zoom -->
                    <div class="h-full w-full relative group">
                        <!-- Image de fond avec zoom au hover -->
                        <div class="absolute inset-0 bg-center bg-cover transition duration-500 group-hover:scale-110" style="background-image: url('<?php echo $card[0]; ?>');"></div>
                        <!-- Overlay + Texte, indépendant du zoom -->
                        <div class="relative z-10 h-full w-full backdrop-opacity-10 bg-black/30 flex flex-col justify-end p-4">
                            <h1 class="font-abril text-2xl text-white"><?php echo $card[1]; ?></h1>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>

    <!-- Navigation hidden md:flex -->
    <div id="prev" class="absolute left-4 h-full items-center flex z-20">
        <button role="button" class="px-2 py-2 rounded-full bg-neutral-100 text-neutral-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:-translate-x-2 transition-all duration-200 ease-linear">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>

        </button>
    </div>
    <div id="next" class="absolute right-4 h-full items-center flex z-20">
        <button role="button" class="px-2 py-2 rounded-full bg-neutral-100 text-neutral-900">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:translate-x-2 transition-all duration-200 ease-linear">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </button>
    </div>
</div>


<!-- Carrousel -->
<script>
    const slidesContainer = document.querySelector(".slides-container");
    const slideWidth = slidesContainer.querySelector(".slide").clientWidth;
    const prevButton = document.querySelector("#prev");
    const nextButton = document.querySelector("#next");

    nextButton.addEventListener("click", () => {
        slidesContainer.scrollLeft += slideWidth + 1;
    });

    prevButton.addEventListener("click", () => {
        slidesContainer.scrollLeft -= slideWidth - 1;
    });
</script>