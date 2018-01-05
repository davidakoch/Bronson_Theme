<?php 

/*
	Template Name: Screenings
*/
get_header(); ?>

<div class="row logo">
	<div class="col-md-12">
		<h1 class="text-center title"><a href="<?php echo home_url(); ?>">PHILADELPHIA PSYCHOTRONIC SOCIETY</a></h1>
	</div>
</div>		

<div class="wrap">
	<div class="row">
		<div class="col-md-7 col-sm-12">	
			<div id="primary-screenings">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php if(has_post_thumbnail()) : ?>
						<?php the_post_thumbnail(); ?>
					<?php endif; ?>
					<?php the_content(); ?>

				<?php endwhile; else : ?>
					<p><?php esc_html_e( 'Sorry, no pages matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
			<!--here is where I added the sidebar-->
			<?php get_sidebar( 'Sidebar' ); ?>
	</div>
</div>




<?php get_footer(); ?>