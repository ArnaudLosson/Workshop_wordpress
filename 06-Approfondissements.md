# 06 - Approfondissements.

## Créations de nouveaux fichiers

Créer les fichiers suivants: 
* archive.php
* front-page.php
* home.php
* page.php
* single.php

Dans le fichier single.php mettez:

```PHP

<?php get_header(); ?>

 <h1>SINGLE</h1>

<?php get_footer(); ?>

```

Dans le fichiers archive inscrivez: 

```
<?php get_header(); ?>

 <h1>ARCHIVE</h1>

<?php get_footer(); ?>
```

## La boucle Wordpress

La boucle WordPress est le mécanisme matérialisé par un petit bout de code PHP qui permet d’afficher les données entrées via l’interface d’administration. Elle permet de préparer les données (titre, contenu, catégories, lien, image à la Une…) et de les appeler via des fonctions dédiées au nom explicite, comme the_content().

copier cela dans front-page.php et dans page.php :

```PHP
<?php get_header(); ?>

 <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

     <h1><?php the_title(); ?></h1>

     <?php the_content(); ?>

 <?php endwhile; endif; ?>

<?php get_footer(); ?>

```

## lister les dix derniers articles

Ecrivez dans archive.php et home.php :

```PHP

<?php get_header(); ?>

  <h1>Le blog de VOTRE NOM</h1>

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

  <article class="post">

   <h2><?php the_title(); ?></h2>

         <?php the_post_thumbnail(); ?>

            <p class="post__meta">

                Publié le <?php the_time( get_option( 'date_format' ) ); ?> 

                par <?php the_author(); ?> • <?php comments_number(); ?>

            </p>

        <?php the_excerpt(); ?>

        <p>
            <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
        </p>

  </article>

 <?php endwhile; endif; ?>

<?php get_footer(); ?>

```

## Template parts

Un des concepts de la programmation est Don’t Repeat Yourself (DRY) et rappelle qu’il ne faut pas écrire 2 fois le même code pour faire une seule chose.

Heureusement pour nous, WordPress nous propose quelques solutions pour cela, dont la fonction get_template_part() qui permet d’appeler un sous-template pouvant contenir ce que vous voulez, et réutilisable à l’infini.

Rajouter ceci dans home.php :

```PHP
<?php get_template_part('archive'); ?>
```

![](https://media.giphy.com/media/HhI4bOgiJ6RfG/giphy.gif)

---

- [5. Templates hierachie](./05-Templates-hIerachie.md)
- [7. Menu et side bar](./07-Menus-&-sidebar.md)
