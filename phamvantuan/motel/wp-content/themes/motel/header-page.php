<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>
<body>
<header>
	<div id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="icon-top">
						<ul>
							<li><a href=""><i class="fa fa-envelope" aria-hidden="true"></a></i></li>
							<li><a href=""><i class="fa fa-bell" aria-hidden="true"></a></i></li>
							<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></a></i></li>
							<li><a href=""><i class="fa fa-instagram" aria-hidden="true"></a></i></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<div class="menu">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<h4>KY ANH <span>MOTEL</span></h4>
				</div>
				<div class="col-sm-9 col-md-9">
					<?php tuanpham_menu('primary-menu'); ?>
				</div>
			</div>
		</div>
	</div>
	<div id="menu-mobie">
		<div class="topnav" id="myTopnav">
		    <a href="#home">KY ANH Motel</a>
		    <a href="#news">GIỚI THIỆU</a>
		    <a href="#contact">GALLERY</a>
		    <a href="#about">XEM PHÒNG</a>
		    <a href="#about">ĐẶT PHÒNG</a>
		    <a href="#about">NHÀ HÀNG</a>
		    <a href="#about">HẢI SẢN</a>
		    <a href="#">LIÊN HỆ</a>
		    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		</div>
	</div>
	<!-- <div class="banner" style="background-image: url(<?php echo tuanpham_url();?>img/background.png); background-size: cover; ">
		<div class="rgba">
			<div class="container">
				<div class="row">
					<div class="title-banner">
						<h4>MAKE WITH LOVE</h4>
						<div id="title-1"><p>WE CREAT DELLUCIOUS MEMORIES</p></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="banner-1">
		<h2 id="id1">HÃY TẬN HƯỞNG GIÂY PHÚT THOẢI MÁI NHẤT CÙNG</h2>
		<h2 id="id2"><span style="font-size: 65px;">KỲ ANH</span>  MOTEL</h2>
	</div>
</header>