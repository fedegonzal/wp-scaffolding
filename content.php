<?php if (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<h1 class="post-title"> <?php the_title(); ?> </h1>

		<?php the_post_thumbnail('medium'); ?>

		<div class="post-date"> <?php the_date(); ?> </div>

		<div class="post-content"> <?php the_content(); ?> </div>

		<div class="post-categories"> <?php the_category(); ?> </div>
		<div class="post-tags"> <?php the_tags(); ?> </div>
		<div class="post-author"> <?php the_author(); ?> </div>

	</article><!-- #post -->			

<?php endif; ?>
