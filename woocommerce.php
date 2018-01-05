<?php 

/*
	Template Name: Woocommerce
*/

get_header(); ?>
<div class="row logo">
	<div class="col-md-12">
		<h1 class="text-center title"><a href="<?php echo home_url(); ?>">PHILADELPHIA PSYCHOTRONIC SOCIETY</a></h1>
	</div>
</div>		

<div id="primary" class="content-area-page">

	<?php woocommerce_content(); ?>

</div>




<?php get_footer(); ?>