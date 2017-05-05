<?php get_header('page2'); ?>

<div class="content">
	<div class="single-room">
		<div class="container">
			<div class="row">
				<div class="col-md-6">	
					<div id="title-page">
						<p>PHÒNG ĐƠN <span>(SINGLE ROOM)</span></p>
					</div>
					<div class="slide">
						<?php echo do_shortcode('[wonderplugin_slider id=4]'); ?>
					</div>	
					
				</div>
				<div class="col-md-6">
					<div id="title-khach">
						<p>KHÁCH SẢN KỲ ANH</p>
					</div>
					<div id="word-1">
						<?php 

						if(have_posts()){
							the_post();
					
						?>
						<p><?php the_content(); ?></p>
						<?php } ?>
					</div>
					<div id="word-2">
						<p>GIƯỜNG/BED : <span>1 Giường</span></p>
						<p>TỐI ĐA/MAX : <span> 2 Người ở</span></p>
						<p>GÍA/PRICE : <span>Liên hệ để được tư vấn</span></p>
					</div>
					<div id="word-4">
						<p><?php echo get_post_meta($post->ID,'phone',true); ?></p>
						<a href="<?php bloginfo('url'); ?>/dat-phong">ĐẶT PHÒNG</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>

<?php get_footer('page'); ?>