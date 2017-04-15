<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
  <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php wp_head(); ?>
</head>
 
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
<body>
<header>
	<div class="menu">
		<div class="container">
			<div class="row">
				<?php tuanpham_menu('primary-menu'); ?>
				<div class="col-md-2 pad">
					<p>
						<span class="phone">
							<i class="<?php echo ot_get_option('fontanwsome');?>" aria-hidden="true"></i>
						</span>
						<?php echo ot_get_option('s___i_n_tho_i');?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-mobie">
		<div class="topnav" id="myTopnav">
		  <a href="#home" class="home-tuan"></a>
		  <a href="" title="">GIỚI THIỆU</a>
			<a href="" title="">VỊ TRÍ</a>
			<a href="" title="">SƠ ĐỒ CĂN HỘ</a>
			<a href="" title="">TIỆN ÍCH</a>
			<a href="" title="">CĂN HỘ 360°</a>
			<a href="" title="">TIN TỨC-SỰ KIỆN</a>
			<a href="" title="">THƯ VIỆN</a>
			<a href="" title="">LIÊN HỆ</a>
		  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()"></a> 
		</div>
		<div id="lienhe" class="pad">
			<p>
				<span class="phone">
					<i class="fa fa-phone" aria-hidden="true"></i>
				</span>
				09797 288 20
			</p>
		</div>
	</div>
	<div class="slide">
		  <br>
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <!-- Wrapper for slides -->
		    <div class="carousel-inner" role="listbox">

		      <div class="item active">
		        <img src=" <?php echo tuanpham_url();?>img/img-slide-1.png" alt="Chania" width="460" height="345">
		        <div class="carousel-caption">
		          <img class="dichuyen" src="<?php echo tuanpham_url();?>img/lux2.svg" alt="">
		        </div>
		      </div>

		      <div class="item">
		        <img src="<?php echo tuanpham_url();?>img/img-slide-2.png" alt="Chania" width="460" height="345">
		        <div class="carousel-caption">
		          <img class="dichuyen" src="<?php echo tuanpham_url();?>img/lux1.svg" alt="">
		        </div>
		      </div>
		      <div class="home-video">  
		      	<div class="video-content">
		      		<div class="wrap-video">
		      	  		<a class="btn-open-popup bt-home-video" href="#">
			      	  		<div class="product-thongso">
			      	  			 <img class="img-responsive inline-block none" src="<?php echo tuanpham_url();?>img/img-video.png" alt="">
			      	  			<div class="overlay"></div> 
			      	  		</div>
		      	  		</a> 
						<div id="to-popup"> 	
					        <div id="popup-content">
					        	<span id="btn-close"></span>
					            <span id="loading-title">
					            	<iframe width="100%" height="500px" src="https://www.youtube.com/embed/-TDN4lCZq60" frameborder="0" allowfullscreen></iframe>
					            </span>
					        </div> 
					    </div>
		      	  </div>
		      	</div>
		      	  
		      </div>	  
		    </div>

		    <!-- Left and right controls -->
		    
		  </div>

		  <div id="background-popup"></div>   
	</div>
	<div class="banner">
        <div class="container">
            <div class="row">
                <div class="logo-2">
                    <a href="#">
                        <img src="<?php echo tuanpham_url();?>img/luxgarden-logo-l.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>



