<!-- Caroussel -->
<div class="w-full flex-grow flex justify-center items-center py-10">
    <div class="w-10/12 flex justify-center items-center relative h-[530px] max-w-[900px]">

        <!-- Content (container + slider) -->
        <div id="app" class="absolute w-full h-full mx-auto transition-all duration-500 ease-linear">
            <div class="relative">
                <div class="slides-container w-full h-full mx-auto snap-x snap-mandatory gap-8  overflow-y-hidden flex items-center justify-start scroll-smooth relative pb-4">



                    <!-- Hors vacances scolaires -->
                    <article class="slide overflow-hidden rounded-lg shadow-md transition hover:shadow-lg hover:shadow-gray-300 w-1/2 min-w-[290px] slide hors-vacances-scolaires snap-start">
                        <img alt="Office" src="assets/img/Cabane dans les arbres.webp" class="h-56 w-full object-cover" />

                        <div class="bg-white p-4 sm:p-6">
                            <h3 class="mt-0.5 text-lg font-semibold text-gray-900 mb-2">Hors Vacances Scolaires</h3>

                            <!-- Price div -->
                            <div class="slides-container w-full flex">
                                <!-- Price card -->
                                <div class="slide w-full rounded transition">

                                    <p class="text-sm text-gray-500 mb-1 underline">A la nuité</p>
                                    <p class="text-xs text-gray-500 mb-2">Profitez des vacances scolaires pour venir vous ressourcer ! Un cocon de verdure vous attend à tout periode de l'année ...</p>
                                    <p class="text-xs text-gray-700 mb-4 italic">Remise de -40% sur la 2ᵉ nuitée et plus !</p>

                                    <!-- All Prices -->
                                    <div class="flex flex-row justify-between w-full price-2p">
                                        <div class="flex flex-col justify-center items-center w-1/2">
                                            <p class="text-xs font-semibold">En semaine</p>
                                            <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-[#88B181] to-[#365031]">175€</h1>
                                            <p class="text-xs text-gray-900">/2pers</p>
                                        </div>

                                        <div class="flex flex-col justify-center items-center w-1/2">
                                            <p class="text-xs font-semibold">En weekend</p>
                                            <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-[#88B181] to-[#365031]">215€</h1>
                                            <p class="text-xs text-gray-900">/2pers</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-row flex-nowrap w-full price-4p hidden">
                                        <div class="flex flex-col justify-center items-center w-1/2">
                                            <p class="text-xs font-semibold">En semaine</p>
                                            <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-[#88B181] to-[#365031]">195€</h1>
                                            <p class="text-xs text-gray-900">/4pers</p>
                                        </div>

                                        <div class="flex flex-col justify-center items-center w-1/2">
                                            <p class="text-xs font-semibold">En weekend</p>
                                            <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-[#88B181] to-[#365031]">235€</h1>
                                            <p class="text-xs text-gray-900">/4pers</p>
                                        </div>
                                    </div>

                                    <div class="flex-row justify-around w-full price-full-week-2p hidden">
                                        <div class="flex flex-col justify-center items-center">
                                            <p class="text-xs font-semibold">Forfait semaine</p>
                                            <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-[#88B181] to-[#365031]">605€</h1>
                                            <p class="text-xs text-gray-900">/2pers</p>
                                        </div>
                                    </div>

                                    <div class="flex-row justify-around w-full price-full-week-4p hidden">
                                        <div class="flex flex-col justify-center items-center">
                                            <p class="text-xs font-semibold">Forfait semaine</p>
                                            <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-[#88B181] to-[#365031]">605€</h1>
                                            <p class="text-xs text-gray-900">/4pers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Toggle buttons -->
                            <div class="w-full flex flex-col mt-4 gap-2 relative">
                                <p class="breakfast-mention hidden text-xs text-gray-500 italic absolute bottom-0 left-0 w-1/2"><i class="fa-solid fa-circle-info pr-2"></i>Sans petits déjeuners<br>(option +80€)</p>

                                <div class="w-full flex flex-row justify-end">
                                    <div class="flex flex-row justify-center items-center gap-2">
                                        <label class="relative h-5 w-11 cursor-pointer">
                                            <input type="checkbox" class="peer sr-only toggle-4pers" />
                                            <span class="absolute inset-0 rounded-full bg-gray-300 transition peer-checked:bg-[#365031]"></span>
                                            <span class="absolute inset-y-0 start-0 m-1 h-3 w-3 rounded-full bg-white transition-all peer-checked:start-6"></span>
                                        </label>
                                        <p class="text-xs text-gray-500">4 pers.</p>
                                    </div>
                                </div>

                                <div class="w-full flex flex-row justify-end">
                                    <div class="flex flex-row justify-center items-center gap-2">
                                        <label class="relative h-5 w-11 cursor-pointer">
                                            <input type="checkbox" class="peer sr-only toggle-semaine" />
                                            <span class="absolute inset-0 rounded-full bg-gray-300 transition peer-checked:bg-[#365031]"></span>
                                            <span class="absolute inset-y-0 start-0 m-1 h-3 w-3 rounded-full bg-white transition-all peer-checked:start-6"></span>
                                        </label>
                                        <p class="text-xs text-gray-500">Forfait semaine</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>



                    <!-- Vacances scolaires -->
                    <article class="slide overflow-hidden rounded-lg shadow-md transition hover:shadow-lg hover:shadow-gray-300 w-1/2 min-w-[290px] snap-center slide vacances-scolaires">
                        <img alt="Office" src="assets/img/WE insolite.webp" class="h-56 w-full object-cover" />

                        <div class="bg-white p-4 sm:p-6">
                            <h3 class="mt-0.5 text-lg font-semibold text-gray-900 mb-2">Vacances Scolaires & Ponts</h3>

                            <!-- Price div -->
                            <div class="slides-container w-full flex">
                                <!-- Price card -->
                                <div class="slide w-full rounded transition">

                                    <p class="text-sm text-gray-500 mb-1 underline">A la nuité</p>
                                    <p class="text-xs text-gray-500 mb-2">Profitez des vacances scolaires pour venir vous ressourcer ! Un cocon de verdure vous attend à tout periode de l'année ...</p>
                                    <p class="text-xs text-gray-700 mb-4 italic"></i>Remise de -40% sur la 2ᵉ nuitée et plus !</p>

                                    <!-- All Prices -->
                                    <div class="flex flex-row justify-between w-full price-2p">
                                        <div class="flex flex-col justify-center items-center w-1/2">
                                            <p class="text-xs font-semibold">En semaine</p>
                                            <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-[#88B181] to-[#365031]">195€</h1>
                                            <p class="text-xs text-gray-900">/2pers</p>
                                        </div>

                                        <div class="flex flex-col justify-center items-center w-1/2">
                                            <p class="text-xs font-semibold">En weekend</p>
                                            <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-[#88B181] to-[#365031]">235€</h1>
                                            <p class="text-xs text-gray-900">/2pers</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-row flex-nowrap w-full price-4p hidden">
                                        <div class="flex flex-col justify-center items-center w-1/2">
                                            <p class="text-xs font-semibold">En semaine</p>
                                            <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-[#88B181] to-[#365031]">225€</h1>
                                            <p class="text-xs text-gray-900">/4pers</p>
                                        </div>

                                        <div class="flex flex-col justify-center items-center w-1/2">
                                            <p class="text-xs font-semibold">En weekend</p>
                                            <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-[#88B181] to-[#365031]">255€</h1>
                                            <p class="text-xs text-gray-900">/4pers</p>
                                        </div>
                                    </div>

                                    <div class="flex-row justify-around w-full price-full-week-2p hidden">
                                        <div class="flex flex-col justify-center items-center">
                                            <p class="text-xs font-semibold">Forfait semaine</p>
                                            <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-[#88B181] to-[#365031]">750€</h1>
                                            <p class="text-xs text-gray-900">/2pers</p>
                                        </div>
                                    </div>

                                    <div class="flex-row justify-around w-full price-full-week-4p hidden">
                                        <div class="flex flex-col justify-center items-center">
                                            <p class="text-xs font-semibold">Forfait semaine</p>
                                            <h1 class="font-extrabold text-transparent text-xl bg-clip-text bg-gradient-to-r from-[#88B181] to-[#365031]">750€</h1>
                                            <p class="text-xs text-gray-900">/4pers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Toggle buttons -->
                            <div class="w-full flex flex-col mt-4 gap-2 relative">
                                <p class="breakfast-mention hidden text-xs text-gray-500 italic absolute bottom-0 left-0 w-1/2"><i class="fa-solid fa-circle-info pr-2"></i>Sans petits déjeuners<br>(option +80€)</p>

                                <div class="w-full flex flex-row justify-end">
                                    <div class="flex flex-row justify-center items-center gap-2">
                                        <label class="relative h-5 w-11 cursor-pointer">
                                            <input type="checkbox" class="peer sr-only toggle-4pers" />
                                            <span class="absolute inset-0 rounded-full bg-gray-300 transition peer-checked:bg-[#365031]"></span>
                                            <span class="absolute inset-y-0 start-0 m-1 h-3 w-3 rounded-full bg-white transition-all peer-checked:start-6"></span>
                                        </label>
                                        <p class="text-xs text-gray-500">4 pers.</p>
                                    </div>
                                </div>
                                <div class="w-full flex flex-row justify-end">
                                    <div class="flex flex-row justify-center items-center gap-2">
                                        <label class="relative h-5 w-11 cursor-pointer">
                                            <input type="checkbox" class="peer sr-only toggle-semaine" />
                                            <span class="absolute inset-0 rounded-full bg-gray-300 transition peer-checked:bg-[#365031]"></span>
                                            <span class="absolute inset-y-0 start-0 m-1 h-3 w-3 rounded-full bg-white transition-all peer-checked:start-6"></span>
                                        </label>
                                        <p class="text-xs text-gray-500">Forfait semaine</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

        <!-- Navigation hidden md:flex -->
        <!-- <div class="absolute left-4 h-full items-center flex z-10 mb-20">
            <button role="button" id="prev" class="prev px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group" aria-label="prev">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:-translate-x-2 transition-all duration-200 ease-linear">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>

            </button>
        </div>
        <div class="absolute right-4 h-full items-center flex z-10 mb-20">
            <button role="button" id="next" class="next px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group" aria-label="next">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 group-active:translate-x-2 transition-all duration-200 ease-linear">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div> -->
    </div>
</div>


<!-- Toggle price -->
<script>
    $(document).ready(function() {
        // Function to handle toggling prices based on the toggle buttons
        function togglePrices() {
            $(".toggle-semaine, .toggle-4pers").on("change", function() {
                const card = $(this).closest(".slide"); // Find the parent card element

                const isWeekSelected = card.find(".toggle-semaine").prop("checked");
                const is4PeopleSelected = card.find(".toggle-4pers").prop("checked");

                if (isWeekSelected && !is4PeopleSelected) {
                    // console.log("2 people - full week");
                    card.find(".price-2p").addClass("hidden");
                    card.find(".price-4p").addClass("hidden");
                    card.find(".price-full-week-2p").removeClass("hidden");
                    card.find(".price-full-week-4p").addClass("hidden");
                    card.find(".breakfast-mention").removeClass("hidden");
                } else if (isWeekSelected && is4PeopleSelected) {
                    // console.log("4 people - full week");
                    card.find(".price-2p").addClass("hidden");
                    card.find(".price-4p").addClass("hidden");
                    card.find(".price-full-week-2p").addClass("hidden");
                    card.find(".price-full-week-4p").removeClass("hidden");
                    card.find(".breakfast-mention").removeClass("hidden");
                } else if (!isWeekSelected && is4PeopleSelected) {
                    // console.log("4 people - one night");
                    card.find(".price-2p").addClass("hidden");
                    card.find(".price-4p").removeClass("hidden");
                    card.find(".price-full-week-2p").addClass("hidden");
                    card.find(".price-full-week-4p").addClass("hidden");
                    card.find(".breakfast-mention").addClass("hidden");
                } else {
                    // console.log("2 people - one night");
                    card.find(".price-2p").removeClass("hidden");
                    card.find(".price-4p").addClass("hidden");
                    card.find(".price-full-week-2p").addClass("hidden");
                    card.find(".price-full-week-4p").addClass("hidden");
                    card.find(".breakfast-mention").addClass("hidden");
                }
            });
        }

        togglePrices();
    });
</script>


<!-- Carrousel -->
<script>
    const slidesContainer = document.querySelector(".slides-container");
    const slideWidth = slidesContainer.querySelector(".slide").clientWidth;
    const prevButton = document.querySelector("#prev");
    const nextButton = document.querySelector("#next");
    console.log(slideWidth)

    nextButton.addEventListener("click", () => {
        slidesContainer.scrollLeft += slideWidth + 1;
        console.log("heyyy", slideWidth + 1);
    });

    prevButton.addEventListener("click", () => {
        slidesContainer.scrollLeft -= slideWidth - 1;
        console.log("hoyyy", slideWidth - 1);
    });
</script>