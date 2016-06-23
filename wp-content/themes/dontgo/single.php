<?php get_header(); ?>
            <section id="hero">
                <div class="row">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-pg.jpg" class="col-md-12" />
                </div>
            </section>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>