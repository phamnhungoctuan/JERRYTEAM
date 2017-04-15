<style>
	.entry-thumbnail img{
		margin:0px auto;
		display: block;
	}
	.entry-content {
		float:right;
        padding-top: 5%;
	}
</style>
<article style="margin-top:-1.3%" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class="entry-content">
        <?php tuanpham_entry_content(); ?>
       <i><?php tuanpham_entry_meta(); ?></i>
    </div>
</article>
