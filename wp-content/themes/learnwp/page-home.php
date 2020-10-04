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
                        <aside class="sidebar col-md-3 h-100"><?php get_sidebar('home'); ?></aside>
                        <div class="news col-md-9">
                            <p>this is the new home page</p>
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