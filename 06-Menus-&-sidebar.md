# 06 - Menus et sidebar.

## Les menus dans WordPress.

Il y a deux façons de gérer les menus dans WordPress, soit en passant par Apparance > Menus, soit via le customizer dans Apparences > Personnaliser > Menus.

Mais pour le moment, comme l'on n'a pas déclaré de menus dans notre thème, vous ne trouverez pas ces entrées dans le Dashboard WordPress.

Pour déclarer un emplacement de menu écrivez dans `functions.php` :

```PHP
<?php 

register_nav_menus( array(

 'main' => 'Menu Principal',

 'footer' => 'Bas de page',

) );
```

On vient de déclarer nos emplacements de menu, ce qui aura pour effet d’afficher le menu Apparence > Menu dans notre administration WordPress. On va alors pouvoir créer un nouveau menu et l’assigner à notre emplacement.

Modifiez le `header.php` : 

```PHP
<body <?php body_class( 'site' ); ?>>

  <header class="site__header">

    <a href="<?php echo home_url( '/' ); ?>">

      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">

    </a>

    <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>

  </header>
```

Vous pouvez maintenant aller dans le Dashboard et les menus devraient être accessible et modifiable, nous vous laissons le personnalisé.

## Footer et moteur de recherche.

Occupons-nous désormais du `footer.php` :

```PHP
<footer class="site__footer">

  <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>

 </footer>

 <?php wp_footer(); ?>

</body>

</html>
```

Si on le souhaite, on peut ajouter un moteur de recherche dans le header grâce à ce code : 

```PHP
<?php get_search_form(); ?>
```

## Déclarer une sidebar.

Pour déclarer une sidebar, c'est aussi simple que de déclarer un menu, dans `functions.php` :

```PHP
<?php 

register_sidebar( array(

 'id' => 'blog-sidebar',

 'name' => 'Blog',

) );
```

### Afficher la sidebar.

Pour afficher la sidebar, rendez-vous dans `archive.php` :

```PHP
<?php get_header(); ?>

 <h1 class="site__heading">Le blog</h1>

 <div class="site__blog">

     <main class="site__content">

         <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

             <article class="post">

                    <!-- ... -->

                </article>

            <?php endwhile; endif; ?>

        </main>

        <aside class="site__sidebar">

         <ul>

             <?php dynamic_sidebar( 'blog-sidebar' ); ?>

            </ul>

        </aside>

 </div> 

<?php get_footer(); ?>
```

---

- [5. Approfondissements](./05-Approfondissements.md)
- [7. Site en Wordpress](./07-Site-en-Wordpress.md)

![](https://media.giphy.com/media/ro08ZmQ1MeqZypzgDN/giphy.gif)
