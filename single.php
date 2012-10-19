<?php get_header(); ?>

<div class="row">
  <div class="span8">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<p><em><?php the_time('l j F Y'); ?></em></p>

	  	<?php the_content(); ?>

<div id="prev-next">
<div class="prev-link">&larr; Prima di questo ho scritto:
<?php previous_post_link('%link', '%title'); ?>
</div>
<div class="next-link">Dopo di questo ho scritto: &rarr;
<?php next_post_link('%link', '%title'); ?>
</div>
</div>





	  	<hr>
		<?php comments_template(); ?>







	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
  <div class="span4">
  </div>
</div>


<?php get_footer(); ?>
