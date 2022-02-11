<?php get_header(); ?>


<?php the_content(); ?>
<p>
    <strong>Avis :</strong>
    <?php echo get_post_meta( get_the_ID(), 'avis', true ); ?>
</p>

<p>
    <stong>Note :</strong>
    <?php echo get_post_meta( get_the_ID(), 'note', true); ?> / 10
</p>

<div class="plus-moins">
    <div class="plus">
        <?php echo get_post_meta ( get_the_ID(), 'plus', true); ?>
    </div>
    <div class="plus">
        <?php echo get_post_meta ( get_the_ID(), 'moins', true); ?> 
    </div>
</div>
<?php get_footer(); ?>