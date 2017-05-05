<?php get_header('page'); ?>

<div class="container">
	<div class="sea">
		<?php $res = new wp_QUERY(array(
			'page_id' => 15,

			)); 
		if($res->have_posts()){
			$res->the_post();



			?>

			<div class="col-md-6">
				<h4 style="float: left">NHÀ HÀNG HẢI SẢN KỲ ANH</h4>
				<h5 class="text-1">(SEA FOOD RESTAURANT)</h5>
				<img src="<?php tuanpham_thumbnail('medium'); ?>">
			</div>
			<div class="col-md-6">
				<div class="res">
					<h4>NHÀ HÀNG HẢI SẢN KỲ ANH</h4>
				</div>
				<div class="res-1">
					<p><?php the_content(); ?></p>
					<p>PHONE : <?php echo get_post_meta($post->ID,'phone',true); ?></p>
					<a data-toggle="modal" data-target="#myModal">ĐẶT CHỖ</a>
					

					<!-- Modal -->
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="contact-7">
									<?php echo do_shortcode('[contact-form-7 id=60 title="contact-1"]');?>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<?php } ?>

		</div>
		<div class="sea-1">
			<div class="col-md-12">


				<?php echo do_shortcode('[envira-gallery id=73]'); ?>


			</div>
		</div>
		<div class="sea-2">
			<div class="food">
				<h4>MÓN ĂN</h4>
				<span>(Food)</span>
			</div>
			<?php echo do_shortcode('[wonderplugin_gridgallery id=2]'); ?>
		</div>
	</div>


	<?php get_footer('page'); ?>