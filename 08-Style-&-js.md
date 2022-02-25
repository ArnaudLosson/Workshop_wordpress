# 8. Intégration de style et js

## Style

Pour continuer, dans le dossier `Fictional University` vous trouverez un dossier `build` contenant des fichiers `css` et `js`, copiez tout le contenu du `style.css` et collez-le dans le style à la base de votre thème, en dessous des informations en commentaires, comme ceci :

```CSS

/*
Theme Name: Fictional University
Description: Created theme with static site
Author: You
Author URI: Your url
Version: 1.0
*/


body {
  color: #333;
  font-family: "Roboto", sans-serif;
  overflow-x: hidden;
  position: relative;
}
img {
  max-width: 100%;
  height: auto;
}
a {
  color: #0d3b66;
}
a:hover {
  text-decoration: none;
}

...

```
Le style est présent mais ne s'affiche pas, pour ce faire nous devons l'appeler grace à WordPress

Allez dans le fichier `functions.php` et créez une fonction nommez comme bon vous semble, dans cette fonction nous allons intégrer le `CSS` grâce à la commande `wp_enqueue_style()` :

```PHP

<?php

function university_files() {
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');

```
Entre les parenthèses `wp_enqueue_Style()` nous avons rajoutés deux conditions `(a, b)`, le `a` est seulement un nom pour mieux si retrouver et le `b` et la fonction demandée, dans ce cas la récupération du style

Le style devrait maintenant apparaitre, mais il manque encore la police d'écriture, les logos en bas de pages et les photos

Commençons par la police, habituellement nous plaçons les import de police soit dans le css, soit dans les balises `<head>` et ce sera surement votre premier réflexe, mais Wordpress permet de le faire dans le fichier `functions.php`, rajouter une commande `wp_enqueue_Style()` juste au-dessus qui appelle le style avec comme seconde conditions le lien de votre import qui se trouve ici : 

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

Copiez juste avant le premier `/` et jusqu'à la fin du lien, puis copiez le tout dans la condition présenter précédemment.

Cela devrait ressembler à ça:

```PHP

<?php

function university_files() {

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'university_files');

```

Les logos de réseaux sont importés de la même manière avec `Font Awesome`, vous devriez pouvoir le faire sans aide, mais si besoin voici le visuel :

```PHP

<?php

function university_files() {

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'university_files');

```

Bien passons maintenant aux images.

## Images et slides

Dans le dossier `Fictional University` vous trouverez un dossier images contenant toutes celles que nous utiliserons, vous pouvez le copier dans votre dossier thème. 

Si vous regardez votre site maintenant surprise, les images n'apparaissent pas car Wordpress les importes d'une autre manière que nous allons voir tout de suite.

Tout d'abord trouver la ligne contenant la première image dans votre `index.php` 

```HTML

<div class="page-banner__bg-image" style="background-image: url(images/library-hero.jpg)"></div>

```

Pour afficher l'image correctement nous allons utiliser la fonction `get_theme_file_uri()` de WordPress. Dans l'url de votre div `url(images/library-hero.jpg)` couper le lien de l'image `ctrl+x` et remplacer le par une balise `<?php ?>`, tapez ensuite la fonction précédente avec un `echo` et collez le chemin de notre image entre les parenthèses de la fonction, sans oublier de rajouter un les guillemets `''` et un slash `/` devant images.

```PHP

<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div>

```

Faites de même avec les trois images plus bas, nommez `bus`, `apple` et `bread`, maintenant les images devraient apparaitre correctement sur votre page.

Nous allons maintenant faire fonctionner le slide pour ces trois images, crée un dossier slide dans votre thème et copiez y l'`index.css` et l'`index.js` se trouvant dans le dossier `build`.

Il ne reste plus qu'à les intégrées dans `fonctions.php` comme fait précédemment avec la fonction `wp_enqueue_style()` avec comme seconde conditions le lien du fichier `index.css` :

```PHP

function university_files() {

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('university_main_styles', get_stylesheet_uri());

    wp_enqueue_style('university-styles-slide', get_theme_file_uri('/slide/index.css'));

```

Ensuite, passons au `JS`, la méthode est la même avec une petite subtilité dans la commande WordPress `wp_enqueue_script` qui va donc appeller le script.

Importer du `JS` prend plus que deux conditions comme précédemment, ici il y en a cinq `(a, b ,c ,d ,e)`.  
`(a, b,)` ne change pas de ceux du style, donc nom et route.  
`(c)` demande si il y a des dépendences néccessaires pour ce script.  
`(d)` nécessite un nom de version, la version n'est pas vraiment importante donc `1.0` est bien suffisant.  
`(e)` demande si le script s'exécute juste avant la fermeture du `<body>`, si oui mettez `true`.  

```PHP

function university_files() {

    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_style('university_main_styles', get_stylesheet_uri());

    wp_enqueue_style('university-styles-slide', get_theme_file_uri('/slide/index.css'));

    wp_enqueue_script('main-university-js', get_theme_file_uri('/slide/index.js'), array('jquery'), '1.0', true);

```

Rafraîchissez la page et voilà votre site est bon. GG!

---

- [7. Site en Wordpress](./07-Site-en-Wordpress.md)
- [Conclusions](./conclusion.md)