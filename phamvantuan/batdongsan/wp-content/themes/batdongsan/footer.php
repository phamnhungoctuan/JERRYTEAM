<div class="container box-10">
	<div class="row">
	<div class="colbox">
		<div class="col-md-7">
			<div class="pol-1">
				<div class="col-md-12">
					<span class="bux"><img src="<?php echo tuanpham_url();?>/img/hot.png" alt=""></span>
					<p class="bux">Nhận Đăng Kí – Dự Án Lux garden Quận 7</p>
					<span><img src="<?php echo tuanpham_url();?>/img/hot.png" alt=""></span>
				</div>
				
				<div class="col-md-12">
					<p>Hoàn Tiền lại 100% nếu Bạn không chọn được căn</p>
				</div>
				<div class="col-md-12">
				<span class="bux"><img src="<?php echo tuanpham_url();?>/img/moi.png" alt=""></span>
				<div class="bux"><p>Đăng Ký Tham Quan Nhà Mẫu Ngay </p></div>
				<span><img src="<?php echo tuanpham_url();?>/img/moi.png" alt=""></span>
				</div>
				<div class="col-md-12">
				<span class="bux"><img src="<?php echo tuanpham_url();?>/img/moi.png" alt=""></span>
				<p class="bux">100% Khác Hàng Được Tặng 1 Chiếc Air Blade với Block B </p>
				<span><img src="<?php echo tuanpham_url();?>/img/moi.png" alt=""></span>
				</div>
				<div class="col-md-12">
				<span class="bux"><img src="<?php echo tuanpham_url();?>/img/moi.png" alt=""></span>
				<p class="bux">20 Suất Ưu Đãi cuối cùng cho Khách Hàng cũ CK 3%  </p>
				<span><img src="<?php echo tuanpham_url();?>/img/moi.png" alt=""></span>
				</div>
				<div class="col-md-12">
					<p>(Nhấp Chuột để đăng ký tham quan dự án Lux garden và cập nhật thêm thông tin)</p>
				</div>
				<div class="xem-them">
					<a href="#">
						<img src="<?php echo tuanpham_url();?>/img/xembaogia.png" alt="">
					</a>
				</div>
				<div class="hot-line">
					<p>Hoặc có thể Liên Hệ Trực Tiếp qua</p> 
					<p>HOTLINE : 0938.656.736
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<img src="<?php echo tuanpham_url();?>/img/DTMH.png" alt="">
			<p>Tôi Là Đỗ Trần Mỹ Hằng – Hiện Tại Đang là Trưởng Phòng Kinh Doanh của Tập Đoàn Đất Xanh, Với quan điểm luôn đem đến những điều tốt đẹp nhất cho khách hàng, sẽ hỗ trợ bạn một cách tận tâm nhất từ dự án cho đến tư vấn tài chính, sẽ giúp bạn tìm ra bài toán tài chính tốt nhất để bạn có thể yên tâm khi sở hữu cho mình một căn hộ tại Luxgarden.</p>
		</div>
	</div>
	</div>
</div>

<div class="container">
		<div class="footer col-md-12">
			<div class="col-md-2 col-xs-2">
				<img src="<?php echo ot_get_option('logo');?>">
			</div>
			<div class="col-md-7 col-xs-7">
				<p><?php echo ot_get_option('__a_ch_');?></p>
				<p>Hotline: <e style="color: #e35720"><?php echo ot_get_option('hotline');?></e	></p>
				<p>Email: <a href=""><?php echo ot_get_option('email');?></a></p>
			</div>
			<div class="col-md-3 col-xs-3">
				<ul>
					<li><i class="fa fa-facebook-square" aria-hidden="true"></i></li>
					<li><i class="fa fa-youtube-play" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="lbl_home_footer_coppyright" class="coppyright-info">© 2017 LUXGARDEN. All Right Reserved.</div>
</div>
<script>
	$(document).ready(function(){
	$("#btn-close").hide();
	$(".btn-open-popup").click(function(even) {
		even.preventDefault(); // không truy cập đến link trong thẻ a
		loadPopup(); // function show popup
		$("#btn-close").show();
	});

	$("#btn-close").click(function(){
		disablePopup();
	});

	$(this).keydown(function(event) {
		if (event.which == 27) { // 27 is 'Ecs' in the keyboard
			disablePopup();  // function close pop up
		}
	});

    $("#background-popup").click(function() {
		disablePopup();  // function close pop up
		disableLoginPopup();
	});

	var popupStatus = 0; // set value

	function loadPopup() {
		if(popupStatus == 0) { // if value is 0, show popup
			$("#to-popup").fadeIn(200); // fadein popup div
			$("#background-popup").css("opacity", "0.8"); // css opacity, supports IE7, IE8
			$("#background-popup").fadeIn(200);
			popupStatus = 1; // and set value to 1
		}
	}

	function disablePopup() {
		if(popupStatus == 1) { // if value is 1, close popup
			$("#to-popup").fadeOut(300);
			$("#background-popup").fadeOut(300);
			$('body,html').css("overflow","auto");//enable scroll bar
			popupStatus = 0;  // and set value to 0
			$("#btn-close").hide();
		}
	}
});
</script>
<script>
	$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 250) {
        //clearHeader, not clearheader - caps H
        $(".bt-register-price").addClass("darkHeader");
    }
    else
    	$(".darkHeader").removeClass("darkHeader");
}); //missing );
</script>
<script>
	//please contact me giaiphapthuonghieu.org@gmail.com
//website http://giaiphapthuonghieu.vn or http://faceseo.vn
(function($) {
    $.fn.linhnguyen = function(options) {
        
        
        var defaults = {  
	    	animation: 'fadeAndPop', //fade, fadeAndPop, none
		    animationspeed: 300, //how fast animtions are
		    closeonbackgroundclick: true, //if you click background will modal close?
		    dismissmodalclass: 'close-css-modal' //the class of a button or element that will close an open modal
    	}; 

        var options = $.extend({}, defaults, options); 
	
        return this.each(function() {
        	var modal = $(this),
        		topMeasure  = parseInt(modal.css('top')),
				topOffset = modal.height() + topMeasure,
          		locked = false,
				modalBG = $('.css-modal-bg');

			if(modalBG.length == 0) {
				modalBG = $('<div class="css-modal-bg" />').insertAfter(modal);
			}		    
			modal.bind('linhnguyen:open', function () {
			  modalBG.unbind('click.modalEvent');
				$('.' + options.dismissmodalclass).unbind('click.modalEvent');
				if(!locked) {
					lockModal();
					if(options.animation == "fadeAndPop") {
						modal.css({'top': $(document).scrollTop()-topOffset, 'opacity' : 0, 'visibility' : 'visible'});
						modalBG.fadeIn(options.animationspeed/2);
						modal.delay(options.animationspeed/2).animate({
							"top": $(document).scrollTop()+topMeasure + 'px',
							"opacity" : 1
						}, options.animationspeed,unlockModal());					
					}
					if(options.animation == "fade") {
						modal.css({'opacity' : 0, 'visibility' : 'visible', 'top': $(document).scrollTop()+topMeasure});
						modalBG.fadeIn(options.animationspeed/2);
						modal.delay(options.animationspeed/2).animate({
							"opacity" : 1
						}, options.animationspeed,unlockModal());					
					} 
					if(options.animation == "none") {
						modal.css({'visibility' : 'visible', 'top':$(document).scrollTop()+topMeasure});
						modalBG.css({"display":"block"});	
						unlockModal()				
					}
				}
				modal.unbind('linhnguyen:open');
			}); 	

			modal.bind('linhnguyen:close', function () {
			  if(!locked) {
					lockModal();
					if(options.animation == "fadeAndPop") {
						modalBG.delay(options.animationspeed).fadeOut(options.animationspeed);
						modal.animate({
							"top":  $(document).scrollTop()-topOffset + 'px',
							"opacity" : 0
						}, options.animationspeed/2, function() {
							modal.css({'top':topMeasure, 'opacity' : 1, 'visibility' : 'hidden'});
							unlockModal();
						});					
					}  	
					if(options.animation == "fade") {
						modalBG.delay(options.animationspeed).fadeOut(options.animationspeed);
						modal.animate({
							"opacity" : 0
						}, options.animationspeed, function() {
							modal.css({'opacity' : 1, 'visibility' : 'hidden', 'top' : topMeasure});
							unlockModal();
						});					
					}  	
					if(options.animation == "none") {
						modal.css({'visibility' : 'hidden', 'top' : topMeasure});
						modalBG.css({'display' : 'none'});	
					}		
				}
				modal.unbind('linhnguyen:close');
			});     
   	
    	modal.trigger('linhnguyen:open')
			
			//Close Modal Listeners
			var closeButton = $('.' + options.dismissmodalclass).bind('click.modalEvent', function () {
			  modal.trigger('linhnguyen:close')
			});
			
			if(options.closeonbackgroundclick) {
				modalBG.css({"cursor":"pointer"})
				modalBG.bind('click.modalEvent', function () {
				  modal.trigger('linhnguyen:close')
				});
			}
			$('body').keyup(function(e) {
        		if(e.which===27){ modal.trigger('linhnguyen:close'); } // 27 is the keycode for the Escape key
			});
			
			function unlockModal() { 
				locked = false;
			}
			function lockModal() {
				locked = true;
			}	
			
        });//each call
    }//orbit plugin call
})(jQuery);
        

</script>
<script>
    $(document).ready(function() {
    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
});
</script>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<?php wp_footer(); ?>
</body>
</html>
