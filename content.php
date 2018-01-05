	<!--this turns the post title into just a title if it is single post-->
	<?php if(is_single()) : ?>
		<h2><?php the_title(); ?></h2>
	<!--this turns the post excerpt on the blog page into a title with a permalink-->
	<?php else : ?>
	<a href="<?php the_permalink(); ?>">
		<h2><?php the_title(); ?></h2>
	</a>
		<?php endif; ?>
		<?php if(is_single()) : ?>
			<!--get the content if it is single-->
			<?php the_content(); ?>
		<?php else : ?>
			<!--get the excerpt if it's not a single post-->
			<p><?php the_excerpt(); ?></p>
		<?php endif; ?>
	<strong><?php the_time('F jS, Y'); ?></strong> 
	<div id="metadatas">
		<?php the_category(', '); ?>
		<span id="tags"><?php the_tags(); ?></span>
	</div>


