<div class="w-full flex-grow flex justify-center items-center" id="gallery">
    <div class="w-10/12 flex flex-col gap-4 lg:gap-0 lg:flex-row justify-start items-center max-w-[1200px]">

        <!-- Grid -->
        <div class="w-full grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-x-2 gap-y-6">

            <?php
            $galleryItems = array(
                array(
                    'img' => 'assets/img/Cabane dans les arbres.webp',
                    'title' => 'Là haut, tout là haut',
                    'subtitle' => 'Cosy dans les arbres',
                ),
                array(
                    'img' => 'assets/img/Weekend insolite detente.webp',
                    'title' => 'Les poules de la cabane !',
                    'subtitle' => 'Cot-cot, cot-cot etc ...',
                ),
                array(
                    'img' => 'assets/img/Nuit insolite.webp',
                    'title' => 'La chambre du haut !',
                    'subtitle' => 'La chambre des gens perchés',
                ),
                array(
                    'img' => 'assets/img/WE insolite.webp',
                    'title' => 'Un moment en famille',
                    'subtitle' => "Oui oui, c'est nous sur la photo",
                ),
                array(
                    'img' => 'assets/img/Cabane pres de Paris.webp',
                    'title' => 'Le salon !',
                    'subtitle' => 'Pour lire au calme (ou pas!)',
                ),
                array(
                    'img' => 'assets/img/Sejour insolite.webp',
                    'title' => 'La cuisine !',
                    'subtitle' => "C'est nous et <s class='mx-[3px]'>Schmidt</s> IKEA !",
                ),
                array(
                    'img' => 'assets/img/3 Acces a la Cabane.webp',
                    'title' => 'La cabane sous toutes ses coutures',
                    'subtitle' => 'Avec une rampe toute douce !',
                ),
                array(
                    'img' => 'assets/img/Chambonniere15.webp',
                    'title' => "Un ptit dej' au soleil",
                    'subtitle' => 'Pour profiter de la terrasse',
                ),
                array(
                    'img' => "assets/img/4 Nuit insolite d'hiver - Copie.webp",
                    'title' => "La cabane sous la neige",
                    'subtitle' => 'Une belle cabane bien blanche',
                ),
                array(
                    'img' => 'assets/img/_DSC5236 22.webp',
                    'title' => "L'écureuil est parmi nous!",
                    'subtitle' => 'Un animal tout doux tout doux',
                ),
                array(
                    'img' => 'assets/img/descriptif10.webp',
                    'title' => "Une bonne lecture",
                    'subtitle' => "Quoi de mieux qu'un bon livre",
                ),
                array(
                    'img' => 'assets/img/ikea_paris-9.webp',
                    'title' => "Faites travailler vos gosses",
                    'subtitle' => 'Les dures lois de la vaisselle',
                ),
            );
            ?>

            <?php foreach ($galleryItems as $item): ?>
                <div class="flex flex-col cursor-pointer">
                    <div class="aspect-square overflow-hidden">
                        <img class="gallery-img object-cover w-full h-full hover:scale-110 transition duration-500"
                            src="<?php echo $item['img']; ?>"
                            alt="<?php echo strip_tags($item['title']); ?>">
                    </div>
                    <p class="sm:flex text-sm mt-4 font-abril">
                        <?php echo $item['title']; ?>
                    </p>
                    <p class="sm:flex text-xs text-gray-400">
                        <?php echo $item['subtitle']; ?>
                    </p>
                </div>
            <?php endforeach; ?>



        </div>

    </div>
</div>

<!-- Popup -->
<div id="image-popup" class="hidden fixed top-0 left-0 w-full h-screen items-center justify-center bg-black bg-opacity-80 z-50">
    <div class="w-full h-full relative flex justify-center items-center">
        <!-- Image -->
        <img src="" alt="Full-size image" id="popup-image" class="max-h-full">
        <!-- Navigation -->
        <button id="prev-btn" class="absolute top-1/2 left-4 bg-white p-2 rounded-full text-black w-10 h-10">←</button>
        <button id="next-btn" class="absolute top-1/2 right-4 bg-white p-2 rounded-full text-black w-10 h-10">→</button>
        <!-- Counter -->
        <div class="flex flex-col gap-2 absolute bottom-10 right-10 text-white">
            <div class="flex items-top">
                <p id="counter" class="text-2xl font-bold leading-4"></p>
                <p id="counter-total" class="text-sm leading-4 opacity-50"></p>
            </div>
        </div>
        <!-- Close -->
        <button id="close-btn" class="absolute top-4 right-4 bg-white p-2 rounded-full text-black w-10 h-10">&times;</button>
    </div>
</div>




<script>
    $(document).ready(function() {

        var srcList = $('.gallery-img').map(function() {
            return $(this).attr('src');
        }).get();
        var currentImageSrc = "";
        console.log(srcList);
        console.log(srcList.length);

        // Open popup when image is clicked
        $('.gallery-img').click(function() {
            var imgSrc = $(this).attr('src');
            $('#popup-image').attr('src', imgSrc);
            $('#image-popup').toggleClass('hidden');
            currentImageSrc = imgSrc;
            updateCounter()
        });

        // Close popup when close button is clicked
        $('#close-btn').click(function() {
            $('#image-popup').toggleClass('hidden');
        });

        // Next button functionality
        $('#next-btn').click(function() {
            var currentIndex = srcList.indexOf(currentImageSrc);
            var nextIndex = (currentIndex + srcList.length) % (srcList.length - 1);
            var nextImage = srcList[nextIndex];

            $('#popup-image').attr('src', nextImage);
            currentImageSrc = nextImage;
            updateCounter()
        });

        // Previous button functionality
        $('#prev-btn').click(function() {
            var currentIndex = srcList.indexOf(currentImageSrc);
            var previousIndex = (currentIndex - 1 + (srcList.length - 1)) % (srcList.length - 1);
            var previousImage = srcList[previousIndex];

            $('#popup-image').attr('src', previousImage);
            currentImageSrc = previousImage;
            updateCounter()
        });

        // Update image counter
        function updateCounter() {
            var index = srcList.indexOf(currentImageSrc) + 1;
            var total = srcList.length - 1;
            $('#counter').text(index);
            $('#counter-total').text(' / ' + total);
        }
    });
</script>