<?php get_header(); ?>
<div class="content">
	<div class="container">

		<div class="row">
			<div class="col-lg-3">
				<div class="sticky-top widget-top">
					<?php get_sidebar(); ?>
				</div><!-- .sticky-top -->
			</div><!-- .col-lg-3 -->
			<div class="col-lg-9">

				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="blog-post">
						<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
						<?php the_tags(); ?>
						<?php if(has_post_thumbnail()): ?>
							<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-5" /></a>
						<?php endif; ?>
						<?php the_excerpt(); ?>
					</div><!-- .blog-post -->
				<?php endwhile; else: endif; ?>
				<div class="pagination">
					<?php
						global $wp_query;

						$big = 999999999; // need an unlikely integer

						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						) );
					?>
				</div><!-- .pagination -->
			</div><!-- .col-lg-9 -->
		</div><!-- .row -->

	</div><!-- .container -->
</div><!-- .content -->
<?php get_footer(); ?>
