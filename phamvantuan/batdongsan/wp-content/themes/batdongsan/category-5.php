<style>
	.slide{
		display: none;
	}
	#id2{
		text-align: left !important;
	}
</style>
<?php get_header(); ?>
	<div class="container">
		<div class="content-1">
			<div class="col-md-5">
				<h3 class="title"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h3>
			</div>
			<div class="col-md-7">
				<ul>
					<li class="active"><a  href="<?php echo bloginfo('url'); ?>/category/tin-du-an">TIN DỰ ÁN</a></li>
					<li><a href="<?php echo bloginfo('url'); ?>/category/bao-chi-noi-ve-luxgarden">BÁO CHÍ NÓI VỀ LUXGARDEN</a></li>
					<li><a href="<?php echo bloginfo('url'); ?>/category/tien-do-thi-cong">TIẾN ĐỘ THI CÔNG</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-12 brand">
			<h2><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></h2>
		</div>
		<div class="content-2">
					
			<?php
				$tuanphampost = new WP_Query(array(
				'post_type'=>'post',
				'post_status'=>'publish',
				'cat' => 5,
				'orderby' => 'ID',
				'order' => 'DESC',
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
							<p><?php echo excerpt('30') ;?></p>
							<a href="<?php the_permalink(); ?>" id="id2">──  Chi tiết</a>
						</div>
					</div>
				</div>
			<?php endwhile ; wp_reset_query() ;?>
			
		</div>
	</div>
<?php get_footer(); ?>