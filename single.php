
<?php get_header(); ?>



<div class="row logo">
	<div class="col-md-12">
		<h1 class="text-center title">PHILADELPHIA PSYCHOTRONIC SOCIETY</h1>
	</div>
</div>		

<div id="primary" class="content-area">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('content'); ?>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

</div>


<?php get_footer(); ?>
