<?php get_header(); ?>
<!-- Custom header code that pulls from WP -->
    <div class="row">
        <div class="col-md-12">
            <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="100%" alt="">
        </div>        
    </div>
    <div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">Slide</div>
                    <img src="" alt="">
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

                                    get_template_part( 'template-parts/content' );

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