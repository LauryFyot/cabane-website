<!-- Header -->
<?php $title = "Nous contacter !";
include 'components/header-small.php'; ?>

<!-- Form card -->
<div class="w-11/12 lg:w-9/12 bg-white shadow-xl mx-auto z-20 transform -translate-y-[50px] flex flex-col lg:flex-row">

    <!-- Left -->
    <div class="w-full lg:w-1/2 p-6">

        <p class="font-abril text-xl mb-4">Contactez-nous pour réserver !</p>

        <p class="text-xs pb-4">Pour connaitre la disponibilité, n'hésitez pas à nous appeler ou nous envoyer un mail avec les infos suivantes: nombre de personnes, quand souhaitez vous venir !</p>

        <!-- Via phone -->
        <p class="uppercase text-xs font-bold text-[#6c8b6c] mb-4">Par téléphone</p>
        <div class="mb-4 flex flex-wrap gap-2">
            <a href="tel:0608412216" class="bg-gray-100 shadow-sm text-gray-600 text-xs font-medium me-2 px-3 py-0.5 rounded-full cursor-pointer hover:bg-gray-700 hover:text-white"> <i class="fa-solid fa-phone mr-2"></i>0651320118</a>
        </div>

        <!-- Via mail -->
        <p class="uppercase text-xs font-bold text-[#6c8b6c] mb-4">Par mail</p>
        <div class="mb-4 flex flex-wrap gap-2">
            <a href="mailto:contact@cabane-perchee-de-chambonniere.com" class="inline-flex items-center bg-gray-100 shadow-sm text-gray-600 text-xs font-medium me-2 px-3 py-0.5 rounded-full cursor-pointer hover:bg-gray-700 hover:text-white">
                <i class="fa-solid fa-envelope mr-2"></i>
                contact@cabane-perchee-de-chambonniere.com
            </a>

        </div>


        <p class="font-abril text-xl my-4 mt-6">Accès !</p>

        <p class="text-xs pb-4">A seulement <b>50min de Paris</b> (A4 sortie 13), découvrez la cabane perchée !</p>

        <!-- Via adresse -->
        <p class="uppercase text-xs font-bold text-[#6c8b6c] mb-2">Notre adresse</p>
        <div class="mb-4 flex flex-wrap gap-2">
            <a href="https://www.google.com/maps?q=8+rue+de+la+chambonnière,+77540,+Le+Plessis-Feu-Aussoux" target="_blank" class="inline-flex items-center bg-gray-100 shadow-sm text-gray-600 text-xs font-medium me-2 px-3 py-0.5 rounded-full cursor-pointer hover:bg-gray-700 hover:text-white">
                <i class="fa-solid fa-map-location-dot mr-2"></i>
                8 rue de la chambonnière, 77540, Le Plessis-Feu-Aussoux
            </a>
            <a href="https://www.google.com/maps?q=8+rue+de+la+chambonnière,+77540,+Le+Plessis-Feu-Aussoux" target="_blank" class="inline-flex items-center bg-gray-100 shadow-sm text-gray-600 text-xs font-medium me-2 px-3 py-0.5 rounded-full cursor-pointer hover:bg-gray-700 hover:text-white">
            <i class="fa-solid fa-location-dot mr-2"></i>
                GPS : latitude 48.718656, longitude 3.035885
            </a>
        </div>
    </div>


    <!-- Right -->
    <div class="w-full lg:w-1/2">
        <iframe id="map" class="w-full h-full" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed/v1/place?&q=Cabane+Perchée+de+Chambonnière&zoom=8&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
    </div>
</div>