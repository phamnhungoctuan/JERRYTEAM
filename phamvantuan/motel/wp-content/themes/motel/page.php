<?php
get_header('page'); ?>
<div id="content">
	<div id="main-content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('content',get_post_format()); ?>
	<?php endwhile ?>
	<?php else: ?>
		<?php get_template_part('content','none'); ?>
	<?php endif; ?>
	</div>
	
		
</div>

<?php

get_footer('page');?>