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
						<p>Khách sạn chúng tôi bao gồm 15 phòng đơn với thiết kế sang trọng, tiện nghi phù hợp với mọ đối tượng. </p>
						<p>Phòng đơn với diện tích 30m2
						Tiện nghi đầy đủ, sạch sẽ.</p>
					</div>
					<div id="word-2">
						<p>GIƯỜNG/BED : <span>1 Giường</span></p>
						<p>TỐI ĐA/MAX : <span> 2 Người ở</span></p>
						<p>GÍA/PRICE : <span>Liên hệ để được tư vấn</span></p>
					</div>
					<div id="word-4">
						<p>0234.123 456</p>
						<a href="#">ĐẶT PHÒNG</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="other-room">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="title-page">
						<p>MỘT SỐ PHÒNG KHÁC</p>
					</div>
				</div>
				<div class="phong">
						<div class="col-md-6">
							<div class="phong-1">
								<div class="phong-1-1">
									<img src="<?php echo tuanpham_url();?>img/img-2.png" alt="">
									<div id="hover">
										<a href="<?php bloginfo('url') ?>/phong-don">XEM</a>
									</div>
								</div>
								<div class="desc-phong">
									<h5>PHÒNG ĐƠN</h5>
									<p>1 Người, 1 Giường, 2 Cửa sổ </p>
									
								</div>
							</div>	
						</div>
						<div class="col-md-6">
							<div class="phong-1">
								<div class="phong-1-1">
									<img src="<?php echo tuanpham_url();?>img/img-3.png" alt="">
									<div id="hover">
										<a href="<?php bloginfo('url') ?>/phong-doi">XEM</a>
									</div>
								</div>
								<div class="desc-phong">
									<h5>PHÒNG ĐÔI</h5>
									<p>1 Người, 1 Giường, 2 Cửa sổ </p>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer('page'); ?>