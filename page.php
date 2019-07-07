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
				<?php if(has_post_thumbnail()): ?>
					<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-5" />
				<?php endif; ?>
				<!-- <img src="<?php the_post_thumbnail_url('post_image'); ?>" alt="" class="img-fluid mb-5" /> -->
				<h1><?php the_title(); ?></h1>
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: endif; ?>
			</div><!-- .col-lg-9 -->
		</div><!-- .row -->

	</div><!-- .container -->
</div><!-- .content -->
<?php get_footer(); ?>
