<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/template_website/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Title -->
    <title><?php echo $pageTitle; ?></title>
    <!-- Description -->
    <meta name="description" content="<?= htmlspecialchars($pageDescription ?? "") ?>" />
    <!-- Keywords -->
    <meta name="keywords" content="<?= htmlspecialchars($pageKeyWords ?? "") ?>" />
    <!-- Icon -->
    <link rel="icon" href="assets/img/logo-cabane.webp" type="image/png">

    <!-- SEO -->
    <!-- OpenGraph -->
    <title>Cabane Perchée - Accueil</title>
    <meta property="og:title" content="Dormez dans une cabane perchée à 1h de Paris" />
    <meta property="og:description" content="Offrez-vous une nuit magique dans les arbres." />
    <meta property="og:image" content="http://my.tooty.free.fr/assets/img/cabane.jpg" />
    <meta property="og:url" content="http://my.tooty.free.fr/" />
    <meta property="og:type" content="website" />
    <!-- Canonical -->
    <link rel="canonical" href="http://my.tooty.free.fr/" />

    <!-- Fonts (if needed) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/fe925ec513.js" crossorigin="anonymous"></script>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="src/output.css" />
    <!-- Flowbite -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Daterange -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <!-- Son -->
    <embed src="assets/props/LesOiseaux.mp3" hidden="true" autostart="true">
    <!-- Lang -->
    <link rel="alternate" hreflang="fr" href="https://tonsite.com/fr/" />
    <link rel="alternate" hreflang="en" href="https://tonsite.com/en/" />

</head>

<body class="font-sans antialiased">
    <!-- Main content vs sidebar split (full page) -->
    <div class="flex flex-row-reverse">
        <!-- Sidebar -->
        <?php include 'components/sidebar.php'; ?>

        <!-- Main -->
        <div class="flex-grow relative">
            <!-- Navigation -->
            <?php
            $colorbase = "transparent";
            include 'components/navbar.php';
            ?>

            <!-- Page Content -->
            <?php echo $pageContent; ?>

            <!-- Footer -->
            <?php include 'components/footer.php'; ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>