<?php wp_footer(); ?>
<footer>
	<div class="boxx">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1">
					
				</div>
				<div class="col-md-3">
					<div id="title-page">
						<h4>Address</h4>
					</div>
					<div id="word-fot">
						<p>1234 Street Name
						City, AA 99999</p>
					</div>
					<div id="title-page">
						<h4>Contacts</h4>
					</div>
					<div id="word-fot">
						<p>Email: support@mobirise.com</p>
						<p>Phone: +1 (0) 000 0000 001</p>
						<p>Fax: +1 (0) 000 0000 002</p>
					</div>
				</div>
				<div class="col-md-3">
					<div id="title-page">
						<h4>Links</h4>
					</div>
					<div id="list-fot">
						<ul>
							<li>
								Website builder
							</li>
							<li>
								Download for Windows
							</li>
							<li>
								Download for Mac
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="contact-us">
						<?php echo do_shortcode('[contact-form-7 id=70 title="footer"]') ?>
					</div>
					
				</div>
				<div class="col-md-1">
					
				</div>
			</div>
		</div>
	</div>	
	<div id="bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1">
					
				</div>
				<div class="col-md-5">
					<p>2017 All RIghts Reserved. Terms of use and Privacy Policy</p>
				</div>
				<div class="col-md-5">
					<div id="lienhe">
						<ul>
							<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
							<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
							<li><i class="fa fa-instagram" aria-hidden="true"></i></li>
						</ul>
					</div>
				</div>
				<div class="col-md-1">
					
				</div>
			</div>
		</div>
	</div>
</footer>
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