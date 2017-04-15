<style>
	.slide{
		display: none;
	}
	.tien-ich{
		text-align: center;
		padding-top: 3%;
	}
	.title-11{
		display: block;
	    font-size: 16px;
	    color: #434343;
	    line-height: 20px;
	}
	.tien-ich h4{
	    font-size: 26px;
	    color: #5c9a43;
	    margin: 10px 0;
	}
	#master_plans{
		padding-top: 3%;
		padding-bottom: 2%;
	}
	#master_plans img{
		width: 100%;
	}
</style>
<?php get_header();?>

<div class="container">
	<div class="row">
		<div class="tien-ich">
			<div class="title-11">TIỆN ÍCH</div>
			<h4>
				TẬN HƯỞNG MỘT CUỘC SỐNG TRỌN VẸN
			</h4>
			<p>Cư dân sống tại Luxgarden sẽ tận hưởng một cuộc sống trọn vẹn với hơn 36 tiện ích hiện đại và đẳng cấp mà không cần phải đi đâu xa.</p>
		</div>
		<div id="master_plan">
			<img src="<?php echo tuanpham_url();?>/img/mat-bang-tien-ich.png" alt="">
		</div>
	</div>
</div>
<div id="master_plans">
	<img src="<?php echo tuanpham_url();?>/img/Capture.PNG" alt="">
</div>

<?php get_footer(); ?>