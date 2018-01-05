
<?php 

/*
	Template Name: Blog
*/

get_header(); ?>

<div class="row logo">
	<div class="col-md-12">
		<h1 class="text-center title"><a href="<?php echo home_url(); ?>">PHILADELPHIA PSYCHOTRONIC SOCIETY</a></h1>
	</div>
</div>		


<div id="primary" class="content-area">
	<!--for a custom page type, you need to use the query posts functino-->
	<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- gets the code for posts the blog page from content.php-->
		<?php get_template_part('content'); ?>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>
