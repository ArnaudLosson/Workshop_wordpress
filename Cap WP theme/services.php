<?php
/* 
    Template Name: Services
*/
    get_header();
    if ( have_post() ) : while ( have_post() ) : the_post();
?>
    <h1><?php the_title(); ?></h1>
    <div class="content">
        <?php the_content(); ?>
    </div>
<?php
    endwhile; endif;
    get_footer();
?>