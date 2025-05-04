<div class="w-full flex-grow flex justify-center items-center">

    <!-- Container (row and col for mobile version) w-11/12 md:w-10/12 -->
    <div class="w-10/12 flex flex-col lg:flex-row justify-start items-top max-w-[1200px] gap-10">


        <!-- Left part -->
        <div class="w-full lg:w-1/2 bg-white flex gap-4 flex-col pb-10" style="background-image: url('assets/props/wood-1.webp'); background-size: 50% 100%; background-repeat: no-repeat; background-position: right top;">
            <img src="assets/img/Cabane insolite plusieurs pieces.webp" class="object-cover w-full flex lg:hidden" alt="Weekend insolite detente">

            <h1 class="font-abril text-2xl mb-4">La cabane vous accueille été comme hiver</h1>
            <p class="text-sm">
                Ouverte toute l'année et perchée au milieu des arbres, c'est le lieu idéal pour une virée romantique, un week-end en amoureux ou une nuit insolite en semaine pour casser la routine et se vider la tête. Elle accueille jusqu'à 4 personnes dans 2 chambres.
            </p>
            <p class="text-sm">
                Elle dispose de l'eau courante et de l'electricité, d’une cuisine complète, d'un coin repas, d'un salon, d’une salle d’eau avec douche et wc. Son accès unique par passerelle plate permet d’accueillir nos plus anciens.
                Une terrasse de 30m2 traversée par 3 arbres vous permet de profiter pleinement de la nature.
            </p>
            <p class="p-4 border-l-2 text-sm italic text-gray-500">
                Grace à son isolation complète, la cabane peut vous accueillir même en hiver. Un soin particulier a été apporté ....
            </p>
            <p class="text-sm mb-6">
                Grace à son isolation complète, la cabane peut vous accueillir même en hiver.
                Un soin particulier a été apporté à la décoration et au confort afin de vous offrir un cadre exceptionnel.
            </p>

            <?php $text = "Réserver !"; $link = "contact";
            include 'components/buttons/button-plain-black.php'; ?>

            <img src="assets/img/Cabane insolite plusieurs pieces.webp" class="object-cover w-full hidden lg:flex py-6" alt="Weekend insolite detente">
        </div>


        <!-- Right part -->
        <div class="w-1/2 lg:w-1/2 py-10 hidden lg:flex">
            <img src="assets/img/Weekend insolite detente.webp" class="object-cover w-full h-full max-h-[1100px]" alt="Weekend insolite detente">
        </div>


    </div>
</div>