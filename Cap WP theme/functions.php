<?php

// ajoute la prise en chages des images mises en avant
add_theme_support( 'post-thumbnails' );

// ajoute automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// ACF Display WordPress Custom Fields
add_filter('acf/settings/remove_wp_meta_box', '__return_false');