<style>
	.slide{
		display: none;
	}
	.tab-content{
		display: block!important;

	}
	.tailieu{
		text-align: center;
	}
	 .wrap-saleskit {
	    position: relative;
	    padding: 10px;
	    margin-bottom: 20px;
	}
	 .wrap-saleskit img {
	    position: relative;
	    display: inline-block;
	    -webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    border-radius: 50%;
	    z-index: 2;
	}
	 .wrap-saleskit .overlay {
	    position: absolute;
	    left: calc(50% - 30px);
	    bottom: -10px;
	    background: url(<?php echo tuanpham_url();?>img/ico-download.svg) center center no-repeat #fff;
	    width: 60px;
	    height: 60px;
	    border: 6px solid #e35720;
	    z-index: 4;
	    -webkit-border-radius: 50%;
	    -moz-border-radius: 50%;
	    border-radius: 50%;
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
		<h2>TÀI LIỆU DỰ ÁN</h2>

	</div>
	<div class="container">
		<div class="">
			<div class="row">
				<div class="tailieu">
					<p>Để biết thêm thông tin chi tiết về dự án LuxGarden. Quí khách có thể tải về các tài liệu của dự án tại đây.</p>
					<div class="wrap-saleskit">
						<a href="<?php bloginfo('url'); ?>/wp-content/uploads/2017/04/catalogue_luxgarden.pdf" target="_blank">
						<img alt="Brochures dự án" class="img-responsive" src="<?php echo tuanpham_url();?>img/saleskit-01.png"> 
						<span class="overlay">&nbsp;</span> </a>
					</div>				
				</div>

			</div>
		</div>
	</div>
<?php get_footer(); ?>