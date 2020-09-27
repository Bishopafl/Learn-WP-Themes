<?php 
/* 
Template Name: General Template
*/

?>

<?php get_header(); ?>

        <!-- Custom header section -->
        <div class="row">
            <div class="col-md-12">
                <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="100%" alt="">
            </div>        
        </div>
        <!-- /Custom header section -->
        <main>
            
            <seciton class="middle-area">
                <div class="container">
                    
                        <div class="general-template">
                            <?php 
                                // if there are any posts...
                                if (have_posts()):
                                    // While have posts, show them to us please
                                    while ( have_posts() ): the_post();

                            ?>
                                    <!-- loop through and display posts using wp functions -->
                                    <article>
                                        <h2><?php the_title(); ?></h2>
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
            </seciton>
        </main>
    </div>
<?php get_footer(); ?>