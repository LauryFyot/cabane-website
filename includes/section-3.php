<div class="w-full flex-grow flex flex-col justify-center items-center bg-[#1a261c] text-white py-12 gap-12" style="background-image: url('assets/props/wood-left.webp'); background-size: 25% 100%; background-repeat: no-repeat; background-position: left top;">

    <!-- Container (row and col for mobile version) -->
    <div class="w-10/12 flex flex-col gap-4 justify-start items-top max-w-[1200px]">

        <h1 class="font-abril text-2xl mb-2">Nos sites touristiques ...</h1>
        <p class="text-sm">Et profitez de votre séjour pour découvrir les charmes de la Seine et Marne avec ses nombreux sites touristiques :</p>

        <div class="columns-3 gap-6 hidden lg:flex">
            <div class="text-sm flex flex-col gap-2">
                <li>Ses châteaux prestigieux (Fontainebleau, Vaux le Vicomte, Champs-s/ Marne,Ferrières-en-Brie ...)</li>
                <li>L'impressionnante architecture du Moyen Age en visitant la cité médiévale de Provins (classé ou patrimoine mondial de l'UNESCO) ou le château de Blandy-les-Tours</li>
            </div>
            <div class="text-sm flex flex-col gap-2">
                <li>Ses forêts et jardins envoûtants (Fontainebleau, Jardin Bossuet...)</li>
                <li>Le Parc des Félins,un parc zoologique unique au monde implanté en Seine-et-Morne dons un magnifique domaine forestier !</li>
            </div>
            <div class="text-sm flex flex-col gap-2">
                <li>AccroBréau: Super parcours d'accrobranche en pleine forêt, avec la plus gronde tyrolienne d'Ile de France. Ateliers spéciaux accessible dès 3 ans ! Tarif spécial hôtes</li>
                <li>Disneyland Paris !</li>
            </div>
        </div>
        <div class="text-sm flex-col gap-2 flex lg:hidden">
            <li>Ses châteaux prestigieux (Fontainebleau, Vaux le Vicomte, Champs-s/ Marne,Ferrières-en-Brie ...)</li>
            <li>L'impressionnante architecture du Moyen Age en visitant la cité médiévale de Provins (classé ou patrimoine mondial de l'UNESCO) ou le château de Blandy-les-Tours</li>
            <li>Ses forêts et jardins envoûtants (Fontainebleau, Jardin Bossuet...)</li>
            <li>Le Parc des Félins,un parc zoologique unique au monde implanté en Seine-et-Morne dons un magnifique domaine forestier !</li>
            <li>AccroBréau: Super parcours d'accrobranche en pleine forêt, avec la plus gronde tyrolienne d'Ile de France. Ateliers spéciaux accessible dès 3 ans ! Tarif spécial hôtes</li>
            <li>Disneyland Paris !</li>
        </div>
    </div>

    <?php
    $list_of_cards = array(
        array("assets/img/activities/vauxlevicomte.webp", "Vaux le Vicomte"),
        array("assets/img/activities/clokart4.webp", "CloKart"),
        array("assets/img/activities/provins.webp", "Provins"),
        array("assets/img/activities/parcdesfelins.webp", "Parc des félins"),
        array("assets/img/activities/accrobranche3.webp", "Accrobranche"),
        array("assets/img/activities/galleriacontinua.webp", "Galleria Continua")
    );
    include 'components/carroussel-1.php'; ?>
</div>


