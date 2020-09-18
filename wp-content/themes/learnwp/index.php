<?php get_header(); ?>
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">Slide</div>
                </div>
            </section>
            <section class="services">
                <div class="container">
                    <div class="row">Services</div>
                </div>
            </section>
            <seciton class="middle-area">
                <div class="container">
                    <div class="row">
                        <aside class="sidebar col-md-3">Sidebar</aside>
                        <div class="news col-md-9">
                            <?php 
                                // if there are any posts...
                                if (have_posts()):
                                    // While have posts, show them to us please
                                    while ( have_posts() ): the_post();

                            ?>
                                    <!-- loop through and display posts using wp functions -->
                                    <article>
                                        <h2><?php the_title(); ?></h2>
                                        <p>Posted in <?php echo get_the_date(); //when getting something from wp, gotta echo ?> by <?php the_author_link(); ?></p>
                                        <p>Categories <?php the_category( ' ' ); ?></p>
                                        <p><?php the_tags('Tags:', ', '); ?></p>
                                        <p><?php the_content(); ?></p>
                                    </article>

                            <?php 
                                    endwhile;
                                    else:
                            ?>

                                    <p>There's nothing yet to be displayed!</p>

                            <?php   
                                endif; 
                            ?>

                        </div>
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