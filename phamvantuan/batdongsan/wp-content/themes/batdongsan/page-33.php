<style>
	.slide{
		display: none;
	}
	.tab-content{
		display: block!important;

	}
</style>
<?php get_header(); ?> 

	<div class="container">
		<div class="content-1">
			<div class="col-md-2 col-xs-4">
				<h3 class="title">THƯ VIỆN</h3>
			</div>
			<div class="col-md-10 col-xs-8">
				<ul>
					<li class="active"><a  href="<?php echo bloginfo('url'); ?>/thu-vien">TỔNG QUAN</a></li>
					<li><a href="<?php echo bloginfo('url'); ?>/nha-mau">NHÀ MẪU</a></li>
					<li><a href="<?php echo bloginfo('url'); ?>/tai-lieu-du-an">TÀI LIỆU DỰ ÁN</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-12 brand">
		<h2>TỔNG QUAN</h2>

	</div>
	<div class="container">
		<div class="">
			<div class="row">
				<div class="">
					<div class="col-md-12" id="tabs-1">

						<ul class="nav nav-tabs">

							<li class="active">
								<a  href="#panel-1" data-toggle="tab">TẤT CẢ</a>
							</li>
							<li >
								<a href="#panel-2" data-toggle="tab">TỔNG QUAN</a>
							</li>
							<li>
								<a href="#panel-3" data-toggle="tab">DIỆN TÍCH</a>
							</li>
						</ul>
						<div class="tab-content col-md-12">

							<div class="tab-pane active" id="panel-1">
								<div class="col-md-12">
										<?php echo do_shortcode('[FinalTilesGallery id=10]'); ?>
								</div>
							</div>
							<div class="tab-pane " id="panel-2">
								<div class="col-md-12">
									<?php echo do_shortcode('[FinalTilesGallery id=8]'); ?>
									

								</div>
							</div>
							<div class="tab-pane" id="panel-3">
								<div class="col-md-12">
									
									<?php echo do_shortcode('[FinalTilesGallery id=9]'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>