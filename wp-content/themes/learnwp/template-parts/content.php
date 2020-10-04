<!-- loop through and display posts using wp functions -->
<article>
    <?php echo get_post_format(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail( array(275,275) ); ?>
    <p>Posted in <?php echo get_the_date(); //when getting something from wp, gotta echo ?> by <?php the_author_link(); ?></p>
    <p>Categories <?php the_category( ' ' ); ?></p>
    <p><?php the_tags('Tags:', ', '); ?></p>
    <p><?php the_content(); ?></p>
</article>