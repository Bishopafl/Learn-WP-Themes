<?php get_header(); ?>
<!-- Custom header code that pulls from WP -->
    <div class="row">
        <div class="col-md-12">
            <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="100%" alt="">
        </div>        
    </div>
    <div class="content-area">
        <main>
            <seciton class="middle-area">
                <div class="container">
                    <div class="row">
                        
                        <div class="news col-md-9">
                            <?php 
                                // if there are any posts...
                                if (have_posts()):
                                    // While have posts, show them to us please
                                    while ( have_posts() ): the_post();

                                    get_template_part( 'template-parts/content', get_post_format());

                                    endwhile;
                                ?>

                                <div class="row">
                                    <div class="pages col-md-6 text-left">
                                        <?php previous_posts_link("<< Newer Posts"); ?>
                                    </div>
                                    <div class="pages col-md-6 text-right">
                                        <?php next_posts_link("Older Posts >>"); ?>
                                    </div>
                                </div>

                                <?php
                                    else:
                                ?>

                                    <p>There's nothing yet to be displayed!</p>

                            <?php   
                                endif; 
                            ?>

                        </div>
                        <aside class="sidebar col-md-3 h-100"><?php get_sidebar('blog'); ?></aside>
                    </div>
                </div>
            </seciton>
            <section class="map">
                <div class="container">
                    <div class="row">Map</div>
                </div>
            </section>
        </main>
    </div>
<?php get_footer(); ?>