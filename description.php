<?php
$pageTitle = "Galerie - Cabane Perchée de Chambonnière";
$current_page = 'description';
ob_start();
?>

<!-- Diaporama -->
<?php include('components/diaporama.php'); ?>

<!-- Main -->
<div class="w-full flex-grow flex flex-col justify-center items-center relative py-10 gap-10">

    <!-- Top section -->
    <?php $title = "Détails de la cabane";
    $text = "Découvrez la cabane sous toutes ses coutures !";
    $subtext = "La cabane est équipée d'un ensemble d'équipements complet : salle de bain, cuisine tout équipée et même cheminée ! Tout pour vous sentir dans un cocon dans les arbres mais avec le confort digne d'une vie de chateau !";
    include('components/section-top.php'); ?>


    <!-- Equipement -->
    <div class="w-full flex-grow flex justify-center items-center">
        <div class="w-10/12 flex flex-row gap-10 max-w-[1200px]">

            <!-- Left part -->
            <div class="w-full md:w-1/2 flex flex-col gap-4">
                <h1 class="font-abril text-lg">Equipement</h1>
                <p class="text-sm text-gray-500 border-b pb-4">La cabane est équipée d'un ensemble d'équipements complet : salle de bain, cuisine tout équipée et même cheminée ! Tout pour vous sentir dans un cocon dans les arbres mais avec le confort digne d'une vie de chateau !</p>
                <!-- Left part -->
                <div class="grid gap-4 grid-cols-2">
                    <?php
                    // Define your data array
                    $yourDataArray = array(
                        array(
                            'image_url' => 'assets/icons/clock.webp',
                            'text' => 'Check-in 17h',
                        ),
                        array(
                            'image_url' => 'assets/icons/clock.webp',
                            'text' => 'Check-out 11h',
                        ),
                        array(
                            'image_url' => 'assets/icons/people.webp',
                            'text' => '4 personnes (2 + 2x1)',
                        ),
                        array(
                            'image_url' => 'assets/icons/spatula.webp',
                            'text' => 'Cuisine équipée',
                        ),
                        array(
                            'image_url' => 'assets/icons/shower.webp',
                            'text' => 'Salle de bain et douche',
                        ),
                        array(
                            'image_url' => 'assets/icons/toilette.webp',
                            'text' => 'Toilettes',
                        ),
                        array(
                            'image_url' => 'assets/icons/bbq.webp',
                            'text' => 'Barbecue <span class="italic text-xs text-gray-500">(sur demande)</span>',
                        ),
                        array(
                            'image_url' => 'assets/icons/fire.webp',
                            'text' => 'Cheminée éthanol',
                        )
                    );
                    ?>

                    <?php foreach ($yourDataArray as $item): ?>
                        <div class="flex items-center space-x-2">
                            <img src="<?php echo $item['image_url']; ?>" class="w-4 h-4">
                            <span class="text-sm"><?php echo $item['text']; ?></span>
                        </div>
                    <?php endforeach; ?>

                    <!-- <a class="text-xs">Voir tous les équipements</a> -->
                </div>
            </div>

            <!-- Right part -->
            <div class="hidden md:flex md:w-1/2 h-80 rounded-lg overflow-hidden">
                <img src="assets/img/Sejour insolite.webp" class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <!-- Détails -->
    <div class="w-full flex justify-center items-start pb-8">
        <div class="w-10/12 flex flex-col gap-4 max-w-[1200px]">

            <h1 class="font-abril text-lg">Détails</h1>
            <p class="text-sm text-gray-500 pb-4">La cabane est équipée d'un ensemble d'équipements complet : salle de bain, cuisine tout équipée et même cheminée ! Tout pour vous sentir dans un cocon dans les arbres mais avec le confort digne d'une vie de chateau !</p>


            <div class="columns-1 sm:columns-2 md:columns-3 gap-4">

                <?php
                $equipmentByRoom = array(
                    'Salon' => array(
                        'icon' => 'assets/icons/salon.webp',
                        'items' => array(
                            'Canapé 3 places',
                            'TV écran plat',
                            'Luminaire',
                            'Table basse',
                            'Cheminée bio éthanol <span class="italic text-xs text-gray-500">(exclusivement pour les couples ou familles avec enfants de plus de 7 ans)</span>'
                        )
                    ),
                    'Terrasse' => array(
                        'icon' => 'assets/icons/bbq.webp',
                        'items' => array(
                            '1 salon de jardin 4 places'
                        )
                    ),
                    'Salle de bain' => array(
                        'icon' => 'assets/icons/shampoo.webp',
                        'items' => array(
                            'Douche',
                            'WC',
                            'Chauffage electrique'
                        )
                    ),
                    'Cuisine' => array(
                        'icon' => 'assets/icons/spatula.webp',
                        'items' => array(
                            'Frigo / congélateur',
                            'Plaque de cuisson électrique 2 feux',
                            'Micro-onde',
                            'Poubelle',
                            'Set complet couverts pour 6 pers',
                            'Machine Senseo / 1 bouilloire',
                            'Dosettes café et thé de courtoisie',
                            'Verres / mugs / tasse à café',
                            'Essoreuse salade',
                            'Casseroles x 2 / poêle x1',
                            'Passoire',
                            'Plat pyrex x 1',
                            'Set accessoires cuisine'
                        )
                    ),
                    'Coin repas' => array(
                        'icon' => 'assets/icons/table-a-dinner.webp',
                        'items' => array(
                            'Table 4 places',
                            '4 chaises'
                        )
                    ),
                    'Chambre 1' => array(
                        'icon' => 'assets/icons/double-bed.webp',
                        'items' => array(
                            'Lit 140',
                            'Couettes hiver / oreillers',
                            '2 tables de chevet',
                            '2 lampes de chevet',
                            'Volet roulant électrique'
                        )
                    ),
                    'Chambre 2' => array(
                        'icon' => 'assets/icons/single-bed.webp',
                        'items' => array(
                            '2 lits 80*210cm',
                            '2 couettes hiver + oreillers',
                            '2 lampes de chevet',
                            '2 boîtes de rangement'
                        )
                    )
                );
                
                ?>


                <?php foreach ($equipmentByRoom as $room => $data): ?>
                    <div class="mb-4 break-inside-avoid p-4 border rounded-xl">
                        <div class="flex items-center gap-2 mb-2">
                            <img src="<?php echo $data['icon']; ?>" alt="<?php echo $room; ?>" class="w-5 h-5 object-contain">
                            <h2 class="text-sm font-bold uppercase"><?php echo $room; ?></h2>
                        </div>
                        <ul class="text-sm text-gray-700 list-disc list-inside">
                            <?php foreach ($data['items'] as $item): ?>
                                <li><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?php
$pageContent = ob_get_clean();
include 'layout.php';
?>