<div class="main">
		<style>
			.entry-title{
				text-align: center;
			}

			.entry-thumdnail img{
				    margin: 0 auto;
				    display: block;
			}
			.entry-content{
				font-family: 'Open Sans', sans-serif !important;
			}
		</style>
	<div class="container" style="background: #fff;"><article id="post <?php the_ID(); ?>" <?php post_class();?> >
	<div class="entry_header">
		
		<?php tuanpham_entry_header(); ?>
	<p><?php get_the_date(); ?></p>
		<br>
		<i><?php tuanpham_entry_meta(); ?></i>
		
	</div>
	<div class="entry_content" style="margin-top: 40px; font-family: 'Open Sans', sans-serif !important;">
		<?php tuanpham_entry_content(); ?>
		<?php ( is_single()? tuanpham_entry_tag() :''); ?>
	</div>
</article></div>
</div>