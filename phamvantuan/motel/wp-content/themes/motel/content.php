<style>
	.entry-thumbnail img{
		margin:0px auto;
		display: block;
	}
	.entry-content i{
		float:right;
	}
	.entry-header{
		text-align: center;
		padding-top: 2%;
	}
</style>
<div class="container">
	<div class="row">
		<article style="margin-top:-1.3%" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		    <div class="entry-header">
		        <?php tuanpham_entry_header(); ?>
		     </div>

		    <div class="entry-thumbnail">
		       <img src="<?php  tuanpham_thumbnail('thumb'); ?>" alt="">
		    </div>  
		    
		    <div class="entry-content">
		        <?php tuanpham_entry_content(); ?>
		    </div>
		</article>
	</div>
</div>
