<?php get_header(); ?>

<div class="content">
	<div class="khach-san">	
		<div class="container">
			<div class="row">
				<div class="main-title1">
					<p class="subtitle fancy"><span>KHÁCH SẢN KỲ ANH</span></p>
				</div>
				<div class="desc-1">
					<p>Edele Hotel là sự lựa chọn tin cậy cho tất cả các Quý khách muốn tìm kiếm nơi thư giãn, nghỉ ngơi tiện nghi và sang trọng.</p>
					<p> Chúng tôi rẫt hân hạnh được đón tiếp Quý khách tại khách sạn chúng tôi.Các phòng có máy lạnh trung tâm, sàn lát gạch, tủ quần áo, 
					truyền hình cáp, tủ lạnh và minibar. Phòng tắm riêng đi kèm với tiện nghi vòi sen nước nóng/lạnh và đồ vệ sinh cá nhân miễn phí.</p>
				</div>
				<div class="icon-khach">
					<ul>
						<li><a href="#"><i class="fa fa-wifi" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-camera-retro" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-key" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-taxi" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="loai-phong">
					<div id="title-loai">
						<h4>CÁC LOẠI PHÒNG</h4>
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
	<div class="nha-hang">
		<div id="nha-hang">
			<div class="container">
				<div class="row">
					<div class="main-title2">
						<p class="subtitle2 fancy2"><span>NHÀ HÀNG</span></p>
					</div>
					<div id="content-chinh">
						<div class="col-md-12">
							<?php $restaurant = new wp_QUERY(array(
									'page_id' => 13,

							));
							if($restaurant->have_posts()){
								$restaurant->the_post();
							 ?>
							}

							<div class="box">
								<div class="col-md-6">
									<img src="<?php tuanpham_thumbnail('medium'); ?>" alt="<?php the_title(); ?>">
								</div>
								<div class="col-md-6 ">
									<div id="padding">
										<div class="title-12">
											<h4><?php echo ot_get_option('t_n'); ?></h4>
										</div>
										<div class="content-4">
											<p><?php echo ot_get_option('m__t_'); ?></p>
											<a href="<?php the_permalink();?>">XEM TIẾP</a>
										</div>
									</div>	
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="anh-haisan">
						<div class="col-md-12">
							<div class="">

							<?php echo do_shortcode('[envira-gallery id=38]'); ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fuild">
		<div class="haisan">
			<div class="sub">
				<p class="subtitle fancy">
					<span>HẢI SẢN</span>
				</p>
			</div>
			<div class="container">
				<div class="row">
					<?php $restaurant = new wp_QUERY(array(
							'page_id' => 15,

					));
					if($restaurant->have_posts()){
						$restaurant->the_post();
					 ?>
					

					<div class="col-md-6 hskyanh">
						<h3 class="titlehs">HẢI SẢN KỲ ANH</h3>
						<p>Chuyên phục vụ các món ăn hải sản hiếm, độc, lạ. Tất cả đều được chế biến rất ngon, hấp dẫn, độc đáo từ những đầu bếp chuyên phục vụ các món hải sản của Sài Gòn. Điều đặc biệt là chế biến không dùng dầu tái sinh, phẩm màu, an toàn vệ sinh tuyệt đối. </p>
						<p>Còn gì thú vị bằng thưởng thức các món ngon hải sản trong một không gian thoáng đẹp, ấm cúng đem đến cho thực khách những trải nghiệm  cộng hưởng đầy ấn tượng , hưng phấn, khó quên.</p>
						<div class="xemtiep-1">
							<a href="<?php the_permalink();?>" class="xemtiep">Xem tiếp</a>
						</div>
					</div>
					<div class="col-md-6 hskyanh-2">
						<img src="<?php tuanpham_thumbnail('medium'); ?>" alt="<?php the_title(); ?>">
					</div>
					<div class="anh-haisan">
						<?php echo do_shortcode('[envira-gallery id=38]'); ?>
					</div>
					
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="hotel">
			<div class="container">
				<div class="row pad">
					<div class="col-md-1">

					</div>
					<div class="col-md-4 content-hotel">
						<h2>KỲ ANH HOTEL</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, </p>
					</div>
					<div class="col-md-6">
						<img src="<?php echo tuanpham_url();?>img/video.png">
					</div>
					<div class="col-md-1">

					</div>
				</div>
			</div>
		</div>
		<div class="slider">
			<div class="container">
				<div class="title-3">
					<h3>Testimonial & Clients</h3>
				</div>
				<div class="row">
					<div class="col-md-3">
						
					</div>
					<div class="col-md-2">
						
					</div>
					<div class="col-md-2 bor">
						
					</div>
					<div class="col-md-2">
						
					</div>
					<div class="col-md-3">
						
					</div>

				</div>
				<div class="slider-1">
					<div class="row">
						<div class="col-md-2">

						</div>
						<div class="col-md-8">
							<div class="carousel slide" id="carousel-531335">
								<ol class="carousel-indicators">
									<li class="active" data-slide-to="0" data-target="#carousel-531335">
									</li>
									<li data-slide-to="1" data-target="#carousel-531335">
									</li>
									<li data-slide-to="2" data-target="#carousel-531335">
									</li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img alt="Carousel Bootstrap First" src="<?php echo tuanpham_url();?>img/slide.png" />
										<div class="carousel-caption">
											<h4>
												First Thumbnail label
											</h4>
											<p>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
											</p>
										</div>
									</div>
									<div class="item">
										<img alt="Carousel Bootstrap Second" src="<?php echo tuanpham_url();?>img/slide.png" />
										<div class="carousel-caption">
											<h4>
												Second Thumbnail label
											</h4>
											<p>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
											</p>
										</div>
									</div>
									<div class="item">
										<img alt="Carousel Bootstrap Third" src="<?php echo tuanpham_url();?>img/slide.png"/>
										<div class="carousel-caption">
											<h4>
												Third Thumbnail label
											</h4>
											<p>
												Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
											</p>
										</div>
									</div>
								</div> <a class="left carousel-control" href="#carousel-531335" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-531335" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
						</div>
						<div class="col-md-2">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>