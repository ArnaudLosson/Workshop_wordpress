# 07 - Crée un site en WordPress

## Nouveau Départ

Pour cette partie nous allons reprendre un nouveau thème, pour gangner du temps je vous invite à allez dans le dossier `Fictional University` et de récupérer le dossier nommé `Fictional University Theme`.  

Placez le ensuite dans le dossier `wp-content/themes`, allez dans le dashboard Wordpress et activé le.

Modifiez aussi les options de lectures dans Réglages > Lecture et afficher les derniers articles.

Les articles créez précédement devrait s'afficher de manière simples.

## HTML 

Le site présenté dans le dossier `Fictional University` est un HTML/CSS classique, mais qui nous permettra de tester l'intégration dans Wordpress, vous pouvez ouvrir le site sur votre navigateur ou dans IDE pour voir le résultat escompté.  

Nous allons commencé avec le header, copier la partie entre les balises `<header>` se trouvant dans l'`index.html` et copiez-le dans le `header.php` de notre nouveau thème comme ceci :

```PHP

<!DOCTYPE html>
<html lang="en">
    <head>
  <?php wp_head(); ?>
    <body>
        <header class="site-header">
          <div class="container">
              <h1 class="school-logo-text float-left">
                <a href="#"><strong>Fictional</strong> University</a>
              </h1>
              <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
              <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
              <div class="site-header__menu group">
                <nav class="main-navigation">
                    <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Programs</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Campuses</a></li>
                    <li><a href="#">Blog</a></li>
                    </ul>
                </nav>
                <div class="site-header__util">
                    <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                    <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                    <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
                </div>
              </div>
          </div>
        </header>

```
Si vous observez votre site, le header devrais s'afficher avec les menus.

Ensuite faisons de même avec le footer, récupérez la balise `<footer>` et placez-la dans le fichier `footer.php` :

```PHP
    <footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="#"><strong>Fictional</strong> University</a>
            </h1>
            <p><a class="site-footer__link" href="#">555.555.5555</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Programs</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Campuses</a></li>
                </ul>
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Learn</h3>
              <nav class="nav-list">
                <ul>
                  <li><a href="#">Legal</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Us</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
    </body>
</html>


```

Et terminez ensuite par le contenu de la page dans l'`index.php` comme ceci :

```PHP
    <?php get_header(); ?>

    <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(images/library-hero.jpg)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
      </div>
    </div>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
                <span class="event-summary__month">Mar</span>
                <span class="event-summary__day">25</span>
            </a>
            <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
                <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
                <span class="event-summary__month">Apr</span>
                <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
                <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>

        <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>
      </div>
    </div>
    <div class="full-width-split__two">
    <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

        <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="#">
            <span class="event-summary__month">Jan</span>
            <span class="event-summary__day">20</span>
        </a>
        <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Best School</a></h5>
            <p>For the 100th year in a row we are voted #1. <a href="#" class="nu gray">Read more</a></p>
        </div>
        </div>
        <div class="event-summary">
        <a class="event-summary__date event-summary__date--beige t-center" href="#">
            <span class="event-summary__month">Feb</span>
            <span class="event-summary__day">04</span>
        </a>
        <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
            <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
        </div>
        </div>

        <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
    </div>
    </div>
    </div>

    <div class="hero-slider">
    <div data-glide-el="track" class="glide__track">
    <div class="glide__slides">
        <div class="hero-slider__slide" style="background-image: url(images/bus.jpg)">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">Free Transportation</h2>
            <p class="t-center">All students have free unlimited bus fare.</p>
            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
            </div>
        </div>
        </div>
        <div class="hero-slider__slide" style="background-image: url(images/apples.jpg)">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">An Apple a Day</h2>
            <p class="t-center">Our dentistry program recommends eating apples.</p>
            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
            </div>
        </div>
        </div>
        <div class="hero-slider__slide" style="background-image: url(images/bread.jpg)">
        <div class="hero-slider__interior container">
            <div class="hero-slider__overlay">
            <h2 class="headline headline--medium t-center">Free Food</h2>
            <p class="t-center">Fictional University offers lunch plans for those in need.</p>
            <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
            </div>
        </div>
        </div>
    </div>
    <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
    </div>
    </div>

   <?php get_footer();
?> 

```
Voilà l'`HTML` est affiché mais n'a pas de style, nous allons donc l'importer dans la suite =>


---

- [6. Menu et side bar](./06-Menus-&-sidebar.md)
- [8. Intégration de lien style et js](./08-Style-&-js.md)