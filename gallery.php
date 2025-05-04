<?php
$pageTitle = "Galerie - Cabane Perchée de Chambonnière";
$current_page = 'gallery';
$pageDescription = 'La cabane perchée de Chambonnière près de Disneyland® Paris, de la cité médiévale de Provins, du château de Vaux le Vicomte, de Coulommiers et du Parc des félins située en Seine et Marne, Ile de France. Cet hébergement insolite dans les arbres vous assure dépaysement et détente à moins de 45 minutes de Paris dans un environnement verdoyant et champêtre - Dormir dans les arbre près de Paris';
$pageKeyWords = "cabane, cabane dans les arbres, cabane perchée, cabanes en l'air, cabanes dans les arbres près de Paris, tree house close to paris, dormir dans cabane, location cabane, dormir dans une cabane, dormir dans les arbres, cabane perchée proche Paris, hébergement insolite, séjour insolite, nuit dans les arbres, week-end en amoureux, hébergement atypique, cabane en bois, cabane d'enfants, maison en bois, arbre, bois, maison perchée, maison en bois perchée, maison dans les arbres, maison sur pilotis, cabane sur pilotis, proche Paris, paris, Gîtes, Gîtes de France, Gite, Gites, Gîtes Insolites, suite familiale, chanvre, nature et insolite, forêt, balade en forêt, ile de france, seine et marne, Provins, Disneyland Paris, Disney, Crécy la Chapelle, parc des félins, Nangis, chambre d'hôtes, chambre d'hôtes trois épis, grand confort, chambre d'hôtes, 4 personnes et un bébé, golf, accrobranche, quad, balades à cheval, chant des oiseaux, dépaysement, dépaysant, cadre enchanteur, vacances PROVINS, provins, chambres d'hôtes seine et marne, chambre d'hôte provins, chambre hote provins, chambre hotes provins, chambres d hotes, chambres d hote, chambre d hotes, chambre d hote, chambre hote, chambres d'hôtes, chambres hotes, chambre hotes, chambres hôtes, chambre, chambres, bed and breakfast, bed &amp; breakfast, b and b, France, france, cité médiévale de provins, fête médiévale de provins, patrimoine mondial UNESCO, patrimoine mondial de l'humanité, hotes, hote,tourisme, vacances en chambre d'hote, vacances en chambre d'hôtes, vacances en chambre hôtes, vacances en chambre hotes, vacances en chambre hote, vacances, vacance, hebergement, hébergement, logement, se loger, week end,Provins,ville de Provins,humanité,patrimoine,mondial,patrimoine mondial,unesco,UNESCO,noel,train,vapeur,train vapeur,TVB,locomotive,ajecta,crèche,creche,marché de noël,marche de noel,moyen age,moyen-age,Moyen Age,moyen âge,médiéval,cité médiévale,cite medievale,fête médiévale,fete medievale,festivals,manifestations,photos provins,chevalerie,Paris,PARIS,rapace,Alain Peyrefitte,Peyrefitte,fête,fete,foire,foires,Champagne,champenois,champenoise,champenoises,patrimoine,famille,enfants,sorties en famille,Ile de France,IdF,ILE DE FRANCE,paris,,provinois,77,seine et marne,tourisme,sorties en ile de france,monuments classés,son et lumière,equestrio, la légende des chevaliers, la bataille des remparts, spectacle de chevalerie, les aigles des remparts, aigles,fauconnerie,rapaces,hébergements,hôtels";
ob_start();
?>

    <!-- Diaporama -->
    <?php include ('components/diaporama.php'); ?>

    <!-- Galerie -->
    <div class="w-full flex-grow flex flex-col justify-center items-center gap-10 py-10" style="background-image: url('assets/props/wood-1.webp'); background-size: 30% 100%; background-repeat: no-repeat; background-position: right top;">

        <!-- Top section -->
        <?php $title = "La galerie <br>photo !";
        $text = "Immergez-vous dans un cocon de verdure !";
        $subtext = "Vous-trouverez ici les photos de la cabane sous toutes ses coutures ! Evadez-vous et venez vivre des instants insolites à moins d'1h de Paris pour un weekend-end ou plus.";
        include ('components/section-top.php'); ?>

        <!-- Gallery container -->

        <?php include ('includes/section-gallery.php'); ?>
    </div>

<?php
$pageContent = ob_get_clean();
include 'layout.php';
?>