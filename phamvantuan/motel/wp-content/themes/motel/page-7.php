<?php get_header('page2'); ?>

<div class="content">
	<div class="gallery-ga">
		<div class="container">
			<div class="row">
				<div id="title-ga">
					<p>GALLERY</p>
				</div>
				<?php echo do_shortcode('[wonderplugin_gridgallery id=1]'); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer('page'); ?>