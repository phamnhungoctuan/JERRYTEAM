<?php

get_header('page2'); ?>

	<?php
if ( function_exists('yoast_breadcrumb') ) {
     yoast_breadcrumb('<p id="breadcrumbs"><ol class="breadcrumb" style="margin-top: 30px;">','</ol></p>');
}
?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="row">
			<?php get_template_part('content',get_post_format()); ?>
			
			</div>
	<?php endwhile ?>
	
	<?php else: ?>
		<?php get_template_part('content','none'); ?>
	<?php endif; ?>
	
		


<?php

get_footer();
