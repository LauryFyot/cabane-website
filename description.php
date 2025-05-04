<?php
$pageTitle = "Galerie - Cabane Perchée de Chambonnière";
$current_page = 'description';
$pageDescription = 'La cabane perchée de Chambonnière près de Disneyland® Paris, de la cité médiévale de Provins, du château de Vaux le Vicomte, de Coulommiers et du Parc des félins située en Seine et Marne, Ile de France. Cet hébergement insolite dans les arbres vous assure dépaysement et détente à moins de 45 minutes de Paris dans un environnement verdoyant et champêtre - Dormir dans les arbre près de Paris';
$pageKeyWords = "cabane, cabane dans les arbres, cabane perchée, cabanes en l'air, cabanes dans les arbres près de Paris, tree house close to paris, dormir dans cabane, location cabane, dormir dans une cabane, dormir dans les arbres, cabane perchée proche Paris, hébergement insolite, séjour insolite, nuit dans les arbres, week-end en amoureux, hébergement atypique, cabane en bois, cabane d'enfants, maison en bois, arbre, bois, maison perchée, maison en bois perchée, maison dans les arbres, maison sur pilotis, cabane sur pilotis, proche Paris, paris, Gîtes, Gîtes de France, Gite, Gites, Gîtes Insolites, suite familiale, chanvre, nature et insolite, forêt, balade en forêt, ile de france, seine et marne, Provins, Disneyland Paris, Disney, Crécy la Chapelle, parc des félins, Nangis, chambre d'hôtes, chambre d'hôtes trois épis, grand confort, chambre d'hôtes, 4 personnes et un bébé, golf, accrobranche, quad, balades à cheval, chant des oiseaux, dépaysement, dépaysant, cadre enchanteur, vacances PROVINS, provins, chambres d'hôtes seine et marne, chambre d'hôte provins, chambre hote provins, chambre hotes provins, chambres d hotes, chambres d hote, chambre d hotes, chambre d hote, chambre hote, chambres d'hôtes, chambres hotes, chambre hotes, chambres hôtes, chambre, chambres, bed and breakfast, bed &amp; breakfast, b and b, France, france, cité médiévale de provins, fête médiévale de provins, patrimoine mondial UNESCO, patrimoine mondial de l'humanité, hotes, hote,tourisme, vacances en chambre d'hote, vacances en chambre d'hôtes, vacances en chambre hôtes, vacances en chambre hotes, vacances en chambre hote, vacances, vacance, hebergement, hébergement, logement, se loger, week end,Provins,ville de Provins,humanité,patrimoine,mondial,patrimoine mondial,unesco,UNESCO,noel,train,vapeur,train vapeur,TVB,locomotive,ajecta,crèche,creche,marché de noël,marche de noel,moyen age,moyen-age,Moyen Age,moyen âge,médiéval,cité médiévale,cite medievale,fête médiévale,fete medievale,festivals,manifestations,photos provins,chevalerie,Paris,PARIS,rapace,Alain Peyrefitte,Peyrefitte,fête,fete,foire,foires,Champagne,champenois,champenoise,champenoises,patrimoine,famille,enfants,sorties en famille,Ile de France,IdF,ILE DE FRANCE,paris,,provinois,77,seine et marne,tourisme,sorties en ile de france,monuments classés,son et lumière,equestrio, la légende des chevaliers, la bataille des remparts, spectacle de chevalerie, les aigles des remparts, aigles,fauconnerie,rapaces,hébergements,hôtels";
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