<?php
/* Template Name: Blog */
get_header(); ?>
            <section id="hero">
                <div class="row">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-pg.jpg" class="col-md-12" />
                </div>
            </section>
            <?php 
			    $args = array( 'numberposts' => -1, 'post_status'=>"publish", 'post_type'=>"post", 'orderby'=>"post_date", 'order'=>"DESC");
			    $postslist = get_posts( $args );

			    foreach ($postslist as $post) : setup_postdata($post); ?>
			    <?php
				    //$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
				    //$imageURL = substr($image, strpos($result,'')+0,-4);
			    ?>					
				<figure>
					<!-- <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $imageURL; ?>-263x263.png" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /></a> -->
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail($page->ID); ?></a>
					<figcaption><?php the_title(); ?></figcaption>
					<!-- <p><?php echo get_post_meta($post->ID, 'kind', true) ?></p> -->
					<p><?php echo substr(get_the_excerpt(),0,80); ?>...</p>
				</figure>
			<?php endforeach; ?>
<?php get_footer(); ?>