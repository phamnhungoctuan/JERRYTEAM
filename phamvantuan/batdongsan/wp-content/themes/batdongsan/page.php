<style>
	.slide{
		display: none;
	}
</style>
<?php get_header(); ?>
<div class="content">
	<div class="drop-menu">
		<div class="container">
			<div class="row">
				<div class="title-7" style="padding-top: 18px;">Chọn tầng:</div>
				<?php tuanpham_menu2(); ?>
			</div>
		</div> 
	</div>
	<div class="content-5">
		<div class="container">
			<div class="row">
				<div class="map">
					<div class="title-4">
					<h1>MẶT BẰNG <?php the_title(); ?><h1>
						</div>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<div>
								<?php tuanpham_entry_content(); ?>	
							</div>
						<?php endwhile ?>

					<?php else: ?>
						<?php get_template_part('content','none'); ?>
					<?php endif; ?>
				</ul> 
			</div>

		</div>
	</div>

</div>
</div>
<?php get_footer(); ?>