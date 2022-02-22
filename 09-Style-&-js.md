# 9. Intégration de style et js

## Style

Allez dans le fichier `functions.php` et créez une fonction nommez comme bon vous semble, dans cette fonction nous allons intégré le `CSS` grace à la commande `wp_enqueue_Style()` :

```PHP

<?php

function university_files() {
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');

```
entre les parenthèses `wp_enqueue_Style` nous avons rajouter deux conditions `(a, b)`, le `a` est juste un nom pour mieux si retrouver et le `b` et la fonction demandé, dans ce cas la récupération du style

Le style devrait maintenant apparaitre mais il manque encore la police d'écriture, les logos en bas de pages et les photos

Commencons par la police, habituellement nous plaçons les import de police soit dans le css, soit dans les balises `<head>` et ce sera surement votre premier réflexe, mais Wordpress permet de le faire dans le fichiers `functions.php`, rajouter une commandes `wp_enqueue_Style` juste au dessus qui appele le style avec comme seconde conditions le lien de votre import qui se trouve ici : 

```HTML

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fictional University</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="build/index.css" />
    <link rel="stylesheet" href="build/style-index.css" />
  </head>

```

Copiez justa avant le premier `/` et jusqu'à la fin du lien, puis copiez le tout dans la conditions présenter précédemments

cela devrait ressemblez à ça:

```PHP

<?php

function university_files() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'university_files');

```

Les logos de réseaux sont importés de la même manières avec `Font Awesome`, vous devriez pouvoir le faire sans aide mais si besoin voici le visuel :

```PHP

<?php

function university_files() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'university_files');

```

Bien passons maintenant au images.

## Images

