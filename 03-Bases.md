# 03 - Bases.

Nous allons commencer avec la création d'un Blog simples mais qui vous montrera la majoritée des fonctions de WordPress.

## CSS et index.php

Pour que WordPress affiche votre thème, vous devez indiquez dans le `style.css` indiquer : 

```CSS
/*
Theme Name: le nom de votre thème
Theme URI: https://Votre Thème.io
Author: votre Nom
Author URI: votre site (personnel / github/...)
Description: Mon premier thème ! 
Requires at least: WordPress 5.0
Version: 1.0
*/
```
Ensuite nous pouvons commencez :

Dans l'`index.php` créer un html basique :

```HTML
<!DOCTYPE html>
 <html>
  <head></head>
 <body>
  <h1>Hello World !</h1>
 </body>
</html>
```

Puis dans `functions.php` indiquer : 

```PHP
<?php 

// Ajoute la prise en chager des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');
```

Maintenant, il ne vous reste plus qu'a activé votre thème. Pour cela rendez-vous sur votre site WordPress, dans la rubrique Apparence > Thèmes de votre interface d’administration, sélectionner votre thème et cliquer sur activé.

Tout s'affiche magnifique, on peu commencer 

## Header et Footer.

Pour une meilleur optimisation WordPress permet de découper son site en plusieurs fichier et de les importer comme dans React par exemple. 

Voici la forme que ça prend : 

[Templates Hierachie](./Templates-hIerachie.md)



Créer ensuite les fichiers suivants:
- header.php
- footer.php

Dans le `header.php`, inscrivez :

```PHP
<!DOCTYPE html>

<html <?php language_attributes(); ?>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
```

Les fonctions de WordPress intégrés permettent de bien séparer les différents éléments et à WordPress de les repérers  

Continuons dans le `footer.php` : 

```PHP
<?php wp_footer(); ?>

</body>

</html>
```

Modifier ensuite `index.php` et mettez : 

```PHP
<?php get_header(); ?>

<h1>Hello World!</h1>

<?php get_footer(); ?>
```

Votre site commence a prendre forme.

ajoutez dans le `style.css`ces quelques lignes : 

```PHP
.menu {
    position: fixed;
    top: 0px;
}


.admin-bar .menu {
 top: 32px; /* on prend en compte le décalage de l'admin WP*/
}
```
Nous allons maintenant ajouter un logo a notre blog

Dans le `header.php` ajoutez le code suivant : 

```PHP
<body <?php body_class(); ?>>

  <header class="header">

    <a href="<?php echo home_url( '/' ); ?>">

      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">

    </a>  

  </header>
```

Voilà notre blog est prêt à recevoire ses premiers articles, ce que nous verrons dans le prochain chapitre.
  
 ![](https://media.giphy.com/media/149eCxEQPfhwyY/giphy.gif)

  ---

- [2. Mise en place](./02-Mise-en-place.md)
- [4. Dashboard](./04-Dashboard.md)
