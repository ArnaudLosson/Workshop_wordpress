# 03 - Bases.

## CSS et index.php

Dans le css indiquer : 

```/*
Theme Name: le nom de votre thème
Theme URI: https://Votre Thème.io
Author: votre Nom
Author URI: votre site (personnel / github/...)
Description: Mon premier thème ! 
Requires at least: WordPress 5.0
Version: 1.0
*/
```

Dans l'index.php indiquer :

```<!DOCTYPE html>
<html>
<head></head>
<body>
 <h1>Hello World !</h1>
</body>
</html>
```

Dans functions.php indiquer : 

```<?php 

// Ajoute la prise en chager des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');
```

Maintenant, il ne vous reste plus qu'a activé votre thème. Pour cela rendez-vous dans la rubrique Apparence / Thèmes de votre interface d’administration, sélectionner votre thème et cliquer sur activé.

## Header et Footer.

Créer ensuite les fichiers suivants: -header.php
                                     -footer.php

Dans le header, inscrivez :

```
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>
```

Dans le footer indiquer : 

```
<?php wp_footer(); ?>

</body>

</html>
```

Modifier ensuite index.php et mettez : 

```
<?php get_header(); ?>

<h1>Coucou</h1>

<?php get_footer(); ?>
```

Dans style.css indiquer : 

```
.menu {
    position: fixed;
    top: 0px;
}


.admin-bar .menu {
 top: 32px; /* on prend en compte le décalage */
}
```

Modifier ensuite le header avec le code suivant : 

```
<body <?php body_class(); ?>>

  <header class="header">

    <a href="<?php echo home_url( '/' ); ?>">

      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">

    </a>  

  </header>
  ```

  ---

- [2. Mise en place](./02-Mise-en-place.md)
- [4. Dashboard](./04-Dashboard.md)