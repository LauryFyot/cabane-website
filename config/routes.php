<?php
// Détecte automatiquement le chemin de base
$baseUrl = ($_SERVER['HTTP_HOST'] === 'localhost') ? '/template_website' : '';

// Routes relatives à la racine du site
$routes = [
    'home' => $baseUrl . '/cabane-perchee-de-chambonniere',
    'gallery' => $baseUrl . '/photos-cabane-perchee',
    'contact' => $baseUrl . '/contact-cabane-chambonniere',
    'prices' => $baseUrl . '/prix-location-cabane-arbres',
    'activities' => $baseUrl . '/activites-cabane-insolite',
    'acces' => $baseUrl . '/acces-cabane-perchee-paris',
    'description' => $baseUrl . '/description-cabane-dans-les-arbres',
];
