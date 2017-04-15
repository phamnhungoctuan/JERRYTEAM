<style>
	.banner{
		display: block;
	}
	.slide{
		display: none;
	}
	.entry-title a{
		font-size: 23px!important;
		color: #3cb33b;

	}
	.bt-share.bt-share-facebook {
	    background: url(<?php echo tuanpham_url(); ?>img/ico-facebook.svg) center center no-repeat;
	    background-size: 27px;
	    opacity: .7;
	}
	#id2{
		text-align: left !important;
		padding:0px!important;
	}
	.item-2 a h4{
		color: #3a9ed1;
	    -webkit-transition: all .25s ease-in-out;
	    -moz-transition: all .25s ease-in-out;
	    -ms-transition: all .25s ease-in-out;
	    -o-transition: all .25s ease-in-out;
	    transition: all .25s ease-in-out;
	        font-size: 16px !important;
	}


.bt-share {
    width: 30px;
    height: 30px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    display: inline-block;
    padding-top: 5px;
    margin-left: 5px;
}
.bt-share.bt-share-google {
    background: url(<?php echo tuanpham_url(); ?>img/ico-google.svg) center center no-repeat #f3f3f3;
}


.bt-share {
    width: 30px;
    height: 30px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    display: inline-block;
    padding-top: 5px;
    margin-left: 5px;
}

</style>
<?php

get_header(); ?>

	<?php
if ( function_exists('yoast_breadcrumb') ) {
     yoast_breadcrumb('<p id="breadcrumbs"><ol class="breadcrumb" style="margin-top: 30px;">','</ol></p>');
}
?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="">
			<?php get_template_part('content',get_post_format()); ?>
			
			</div>
	<?php endwhile ?>
	
	<?php else: ?>
		<?php get_template_part('content','none'); ?>
	<?php endif; ?>
	</div>
	<div class="container">
		<div class="col-md-12 border-5" style="text-align: right;">
			<div class="list-share">
                    <span>Chia sẻ:</span>
                    <a target="_blank" href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" class="bt-share bt-share-facebook">&nbsp;</a>
                    <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="bt-share bt-share-google">&nbsp;</a>
                </div>
		</div>
		<div class="tin-khac">
			<div id="title-tin">
				<h4>TIN TỨC KHÁC</h4>
			</div>
			<?php
				$tuanphampost = new WP_Query(array(
				'post_type'=>'post',
				'post_status'=>'publish',
				'cat' => 2,
				'orderby' => 'ID',
				'order' => 'DESC',
				'posts_per_page'=> 4,
				));
			?>
			<?php while ($tuanphampost->have_posts()) : $tuanphampost->the_post(); ?>
				<div class="col-md-6">
					<div class="item-1">
						<div class="col-md-6">
							<img alt="<?php the_permalink(); ?>" src="<?php thuanpham_thumbnail('thumb'); ?>"/>
						</div>
						<div class="col-md-6 item-2">
							<p id="id2"><?php echo get_the_date(); ?></p>
							<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
							<p><?php echo excerpt('25') ;?></p>
							<a href="<?php the_permalink(); ?>" id="id2">──  Chi tiết</a>
						</div>
					</div>
				</div>
			<?php endwhile ; wp_reset_query() ;?>
		</div>
	</div>	
</div>


<?php

get_footer(); ?>
