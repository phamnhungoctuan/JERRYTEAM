<?php

get_header('page'); ?>
<div id="content">
	<div id="main-content">
	<div class="container" style="background: #fff;">
		<?php
			if(is_tag()) :
				printf(__('Posts tagged: %1$s','tuanpham'),single_tag_title('',false));
			elseif(is_category()) :
				printf(__('<div class="category"><h2><blockquote style="margin-top:30px;">
						  <div class="btn btn-info"><p>Chuyên mục: %1$s</p></div>
						</blockquote></h2></div>','tuanpham'),
					single_cat_title('',false));
			elseif(is_date()):
				printf(__('Daily Archives: %1$s','tuanpham'),
					get_the_time('l,F j, Y'));
			elseif(is_month()):
				printf(__('Monthly Archives: %1$s','tuanpham'),
					get_the_time('F Y'));
			elseif(is_year()):
				pritf(__('Yearly Archives: %1$s','tuanpham'),
					get_the_time('Y'));
			endif;
		?>
		<?php if( is_tag() || is_category() ):?>
			<div class="archive-description">
				<?php echo term_description(); ?>
			</div>
		<?php endif;?>
		</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('content',get_post_format()); ?>
	<?php endwhile ?>
	<?php tuanpham_phantrang() ?>
	<?php else: ?>
		<?php get_template_part('content','none'); ?>
	<?php endif; ?>
	</div>

</div>

<?php

get_footer('page');
?>