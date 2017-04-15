<style>
	.slide{
		display: none;
	}
</style>
<?php get_header();?>
<div id="content" class="container">
	<div id="main-content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('content-lienhe',get_post_format()); ?>
	<?php endwhile ?>
	<?php else: ?>
		<?php get_template_part('content-lienhe','none'); ?>
	<?php endif; ?>
	</div>
	
		
</div>

<?php get_footer();?>