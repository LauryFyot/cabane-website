<div class="w-full flex-grow flex justify-center items-center bg-[#415641] text-white py-10" style="background-image: url('assets/props/wood-left.webp'); background-size: 25% 100%; background-repeat: no-repeat; background-position: left top;">

    <!-- Container (row and col for mobile version) -->
    <div class="w-10/12 flex flex-col gap-4 py-1 sm:gap-10 sm:flex-row justify-start items-center max-w-[1200px]">

        <!-- Form -->
        <div class="w-full sm:w-1/2 flex flex-col gap-4">
            <!-- Top -->
            <h1 class="font-abril text-2xl">Calculateur de tarifs</h1>
            <p class="text-sm text-justify">Découvrez le prix de votre séjour ici !</p>

            <!-- Nb persons -->
            <div class="flex flex-col gap-2">
                <p class="text-xs text-justify uppercase">Nombre de personnes</p>
                <label for="pers" class="inline-flex items-center cursor-pointer dark:border-white border-2 text-xs">
                    <input id="pers" name="pers" type="checkbox" class="hidden peer" checked>
                    <span class="w-1/2 px-4 py-2 dark:bg-transparent peer-checked:dark:bg-white peer-checked:dark:text-black">2 pers.</span>
                    <span class="w-1/2 px-4 py-2 text-black dark:bg-white peer-checked:dark:bg-transparent peer-checked:dark:text-white">4 pers.</span>
                </label>
            </div>

            <!-- Dates -->
            <div class="flex flex-col gap-2">
                <p class="uppercase text-xs font-medium tracking-tight">Date d'arrivée / départ</p>
                <div id="date-picker" class="border-2 text-xs px-3 py-2 flex flex-row justify-between gap-2 items-center">
                    <i class="fa-solid fa-calendar-days text-white"></i>
                    <input class="flex flex-1 border-none text-xs bg-transparent p-0 text-white outline-none w-full" type="text" name="daterange" value="01/01/2024 - 01/15/2024" />
                </div>
            </div>

            <!-- Calculer -->
            <?php $text = "Calculer !";
            include 'components/buttons/button-plain-white.php'; ?>


        </div>


        <!-- Display price -->
        <div class="w-full sm:w-1/2">
            <!-- Card -->
            <div class="bg-white h-[350px] w-full text-black p-10 flex justify-between flex-col" style="background-image: url('assets/props/wood-1.webp'); background-size: 50% 100%; background-repeat: no-repeat; background-position: right top;">
                <!-- Price -->
                <div>
                    <p id="price_display" class="text-4xl font-extrabold">275€</p>
                    <div class="bg-black h-[2px] w-2/3"></div>
                    <p id="price_without_discount" class="text-xs text-black font-semibold mt-1"></p>
                </div>

                <!-- Recap -->
                <div>
                    <p class="text-xs font-extrabold">Récapitulatif: </p>
                    <p id="nb_people" class="text-xs text-[#888888]">4 personnes</p>
                    <p id="dates" class="text-xs text-[#888888]">23/04/2024 - 26/04/2024 (2 nuits)</p>
                    <div class="flex mt-2">
                        <p id="price_per_night" class="text-xs text-[#888888]">130€</p>
                        <p class="text-xs text-[#888888]">/nuit</p>
                    </div>

                    <p id="reduction" class="text-xs text-[#888888] mt-4">-40% appliqués sur la deuxième nuit !</p>
                </div>

                <!-- Réserver  -->
                <?php $text = "Réserver !"; $link = "contact.php";
                include 'components/buttons/button-plain-black.php'; ?>
            </div>
        </div>

    </div>
</div>



<script>

    function calculerTarif() {

        const start = $('#date-picker input[name="daterange"]').data('daterangepicker').startDate;
        const end = $('#date-picker input[name="daterange"]').data('daterangepicker').endDate;
        const nbPersonnes = document.querySelector('#pers').checked ? "2p" : "4p";

        const prixKey = nbPersonnes === "2p" ? "prix_2_personnes" : "prix_4_personnes";
        const startStr = start.format("YYYY-MM-DD");
        const endStr = end.format("YYYY-MM-DD");

        // Filtrer les dates dans la plage [start, end[
        const jours = tarifs.filter(jour => jour.date >= startStr && jour.date < endStr);
        const nbNuits = jours.length;

        const totalSansReduction = jours.reduce((sum, jour) => sum + jour[prixKey], 0);
        let reductionValeur = 0;

        if (nbNuits >= 2) {
            const prix2eNuit = jours[1][prixKey];
            reductionValeur = Math.round(prix2eNuit * 0.4);
            reductionText = `-40% appliqués sur la deuxième nuit (soit une réduction de <b>${reductionValeur}€</b> sur votre séjour !)`;
        } else {
            reductionText = `Bénéficiez de -40% appliqués sur la deuxième nuit en prenant un séjour de 2 nuits ou plus!`;
        }

        const totalAvecReduction = totalSansReduction - reductionValeur;
        const prixParNuit = Math.round(totalAvecReduction / nbNuits);

        console.log(totalSansReduction, totalAvecReduction, reductionValeur, totalAvecReduction)



        // ------ MAJ --------
        const price_display = document.querySelector("#price_display");
        const nb_people = document.querySelector("#nb_people");
        const dates = document.querySelector("#dates");
        const price_per_night = document.querySelector("#price_per_night");
        const reduction = document.querySelector("#reduction");
        const price_without_discount = document.getElementById("price_without_discount");

        // Prix total
        price_display.textContent = `${totalAvecReduction}€`;

        // Prix barré
        price_without_discount.innerHTML = totalSansReduction != totalAvecReduction ? `Prix sans réduction : <span id="price_without_discount" class="line-through text-[#888888]">${totalSansReduction}€</span>` : "";

        // Nb personnes
        nb_people.textContent = nbPersonnes === "2p" ? "2 personnes" : "4 personnes";

        // Dates et nb nuits
        dates.textContent = `${start.format("DD/MM/YYYY")} - ${end.format("DD/MM/YYYY")} (${nbNuits} nuit${nbNuits > 1 ? "s" : ""})`;

        // Prix par nuit
        price_per_night.textContent = `${prixParNuit}€`;

        // Réduction
        reduction.innerHTML = reductionText;
    }
</script>


<script>
    let tarifs = [];

    $(function () {
        const today = moment();
        const afterTomorrow = moment().add(2, 'days');
        const input = $('input[name="daterange"]');

        input.val(`${today.format("DD/MM/YYYY")} - ${afterTomorrow.format("DD/MM/YYYY")}`);

        input.daterangepicker({
            opens: 'left',
            startDate: today,
            endDate: afterTomorrow
        }, function (start, end) {
            calculerTarif();
        });

        document.querySelector('#pers').addEventListener('change', calculerTarif);

        // 👇 Charger les tarifs après que tout est initialisé
        fetch('assets/js/tarifs.json')
            .then(response => response.json())
            .then(data => {
                tarifs = data;
                calculerTarif(); // ❇️ maintenant que tout est prêt
            });
    });
</script>
