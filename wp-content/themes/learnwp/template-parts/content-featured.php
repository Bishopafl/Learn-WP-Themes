<!-- loop through and display posts using wp functions -->
<article <?php post_class( array( 'class' => 'featured' ) ); ?>>
    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    <div class="thumbnail">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid') ); ?></a>
    </div>
    <div class="meta-info">
        <p>
            by <span><?php the_author_posts_link(); ?></span>
            Categories <span><?php the_category( ' ' ); ?></span>
            <?php the_tags(' Tags: <span>', ', ', '</span>'); ?>
        </p>
        <p><span><?php echo get_the_date(); ?></span></p>
    </div> 
    <p><?php the_excerpt(); ?></p>
</article>