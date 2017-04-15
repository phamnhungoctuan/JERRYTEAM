<style>
	.slide{
		display: none;
	}
</style>
<?php get_header(); ?>
<div class="content">
    <div class="drop-menu">
        <div class="container">
            <div class="row">
                <div class="title-7">Chọn tầng:</div>
                <?php tuanpham_menu2(); ?>
            </div>
        </div> 
    </div>
    <div class="content-5">
        <div class="container">
              <div class="row">
                  <div class="map">
                       <div class="title-4">
                      <h1>MẶT BẰNG TỔNG QUAN</h1>
                      </div>
                      <p class="center">Vui lòng click chuột vào Tháp / Block trong hình bên dưới để xem mặt bằng tầng.</p>
                      <?php echo do_shortcode('[drawattention]'); ?>
                  </ul> 
                  </div>
                  
              </div>
        </div>
           
    </div>
</div>
<?php get_footer(); ?>