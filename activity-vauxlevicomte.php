<?php
$pageTitle = "Cabane Perchée de Chambonnière";
$pageDescription = 'La cabane perchée de Chambonnière près de Disneyland® Paris, de la cité médiévale de Provins, du château de Vaux le Vicomte, de Coulommiers et du Parc des félins située en Seine et Marne, Ile de France. Cet hébergement insolite dans les arbres vous assure dépaysement et détente à moins de 45 minutes de Paris dans un environnement verdoyant et champêtre - Dormir dans les arbre près de Paris';
$pageKeyWords = "cabane, cabane dans les arbres, cabane perchée, cabanes en l'air, cabanes dans les arbres près de Paris, tree house close to paris, dormir dans cabane, location cabane, dormir dans une cabane, dormir dans les arbres, cabane perchée proche Paris, hébergement insolite, séjour insolite, nuit dans les arbres, week-end en amoureux, hébergement atypique, cabane en bois, cabane d'enfants, maison en bois, arbre, bois, maison perchée, maison en bois perchée, maison dans les arbres, maison sur pilotis, cabane sur pilotis, proche Paris, paris, Gîtes, Gîtes de France, Gite, Gites, Gîtes Insolites, suite familiale, chanvre, nature et insolite, forêt, balade en forêt, ile de france, seine et marne, Provins, Disneyland Paris, Disney, Crécy la Chapelle, parc des félins, Nangis, chambre d'hôtes, chambre d'hôtes trois épis, grand confort, chambre d'hôtes, 4 personnes et un bébé, golf, accrobranche, quad, balades à cheval, chant des oiseaux, dépaysement, dépaysant, cadre enchanteur, vacances PROVINS, provins, chambres d'hôtes seine et marne, chambre d'hôte provins, chambre hote provins, chambre hotes provins, chambres d hotes, chambres d hote, chambre d hotes, chambre d hote, chambre hote, chambres d'hôtes, chambres hotes, chambre hotes, chambres hôtes, chambre, chambres, bed and breakfast, bed &amp; breakfast, b and b, France, france, cité médiévale de provins, fête médiévale de provins, patrimoine mondial UNESCO, patrimoine mondial de l'humanité, hotes, hote,tourisme, vacances en chambre d'hote, vacances en chambre d'hôtes, vacances en chambre hôtes, vacances en chambre hotes, vacances en chambre hote, vacances, vacance, hebergement, hébergement, logement, se loger, week end,Provins,ville de Provins,humanité,patrimoine,mondial,patrimoine mondial,unesco,UNESCO,noel,train,vapeur,train vapeur,TVB,locomotive,ajecta,crèche,creche,marché de noël,marche de noel,moyen age,moyen-age,Moyen Age,moyen âge,médiéval,cité médiévale,cite medievale,fête médiévale,fete medievale,festivals,manifestations,photos provins,chevalerie,Paris,PARIS,rapace,Alain Peyrefitte,Peyrefitte,fête,fete,foire,foires,Champagne,champenois,champenoise,champenoises,patrimoine,famille,enfants,sorties en famille,Ile de France,IdF,ILE DE FRANCE,paris,,provinois,77,seine et marne,tourisme,sorties en ile de france,monuments classés,son et lumière,equestrio, la légende des chevaliers, la bataille des remparts, spectacle de chevalerie, les aigles des remparts, aigles,fauconnerie,rapaces,hébergements,hôtels";
ob_start();
?>

<!-- Diaporama -->
<?php include('components/diaporama.php'); ?>

<!-- Main -->
<div class="w-full flex-grow flex flex-col justify-center items-center relative py-10 gap-10">

    <!-- Top section -->
    <?php $title = "Vaux le vicomte !";
    $text = "Un chateau plein d'histoire !";
    $subtext = "Profitez des joies du chateau de Vaux-le-Vicomte à 20min de la cabane. Ses jardins, ses grands espaces ...";
    include('components/section-top.php'); ?>


    <!-- Image caroussel -->
    <?php
    $list_of_cards = array(
        array("assets/img/activities/vauxlevicomte.webp", ""),
        array("assets/img/activities/vauxlevicomte2.webp", ""),
        array("assets/img/activities/vauxlevicomte3.webp", ""),
        array("assets/img/activities/vauxlevicomte4.webp", "")
    );
    include 'components/carroussel-1.php'; ?>

    <?php
    $location = array(
        "text" => "Visitez le chateau de Vaux-le-Vicomte et ses jardins à 20min de la cabane !",
        "display" => "77950 MAINCY - FRANCE",
        "link" => "77950 MAINCY - FRANCE"
    );

    $website = array(
        "text" => "Retrouvez-toutes les informations sur le chateau ici !",
        "display" => "https://vaux-le-vicomte.com/",
        "link" => "https://vaux-le-vicomte.com/"
    );

    $phone = array(
        "text" => "Contactez le chateau de Vaux-le-Vicomte au numero suivant !",
        "display" => "0164010101",
        "link" => "0164010101"
    );
    include 'includes/section-activity-location.php'; ?>


    <div class="w-full flex-grow flex justify-center items-center bg-none lg:bg-[url('assets/props/bg-brown.webp')] lg:bg-no-repeat lg:bg-right-bottom lg:bg-[length:30%_50%]">

        <div class="w-10/12 flex flex-col gap-4 py-8 sm:gap-10 sm:flex-row justify-center items-center max-w-[1200px]">

            <!-- Top section -->
            <div class="flex flex-row justify-center w-full gap-12">
                <div class="flex flex-col w-full lg:w-1/2 gap-4">
                    <h1 class="font-abril text-2xl">En savoir plus ...</h1>
                    <p class="text-sm">
                        Le domaine de Vaux-le-Vicomte est le fruit d’un esprit créatif et passionné, celui de Nicolas Fouquet, le surintendant des finances de Louix XIV.
                        Pour bâtir sa demeure, il s’adjoint les services de trois des plus grands artistes du Grand Siècle :
                        <br>
                        <br>- l'architecte Louis Le Vau, premier architecte du roi,
                        <br>- le peintre Charles Le Brun, fondateur de l'Académie de peinture,
                        <br>- le paysagiste André Le Nôtre, contrôleur général des bâtiments du roi et
                        <br>- le maître-maçon Michel Villedo.
                        <br>
                        <br>
                        Ils unirent leur génie pour bâtir un modèle dont la majesté et l’équilibre inspirèrent Louis XIV qui fera appel à eux pour construire le château de Versailles, celui de Vaux le Vicomte servant alors de modèle.
                        <br>
                        <br>
                        Les enfants sont particulièrement à l’honneur au château de Vaux le Vicomte avec les nombreuses animations organisées spécialement pour eux tout au long de l’année. Visite costumée, livrets d'énigmes et de jeux attendent les familles.
                        Si vos enfants aiment les châteaux, les histoires de princes et princesses, se déguiser et sont curieux alors les Visites au château de vaux le Vicomte sur la thème de la vie des enfants du 17e siècle risque bien de leur plaire. Pour vivre l'expérience du Grand Siècle en famille, le château de Vaux le Vicomte propose une visite originale où les enfants apprendront les règles de la bienséance et les loisirs au temps de Nicolas Fouquet.
                        <br>
                        <br>
                        Plus de renseignements sur <a src="https://vaux-le-vicomte.com" class="text-blue-400 hover:underline cursor-pointer">vaux-le-vicomte.com</a>

                    </p>
                </div>

                <div class="hidden lg:flex lg:w-1/2 justify-center items-center">
                    <div class="hidden lg:flex w-full h-[300px] rounded-tl-[100px] overflow-hidden">
                        <img src="assets/img/activities/vauxlevicomte.webp" class="object-cover w-full h-full" alt="Your Image">
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>
<?php
$pageContent = ob_get_clean();
include 'layout.php';
?>