<?php get_header(); ?>
            <section id="hero">
                <div class="row">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-pg.jpg" class="col-md-12" />
                </div>
            </section>
            <section id="newspost">
            <?php while ( have_posts() ) : the_post(); ?>
            	
				<figcaption><h3><?php the_title(); ?></h3></figcaption>
				<?php echo get_the_post_thumbnail($page->ID); ?>
				<h6>Date: <?php the_date(); ?></h6>

                <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
            </section>
<?php get_footer(); ?>