        <footer class="section section-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <h4>Contact Us</h4>
                        <p>T: <?php include('inc/telno.php') ?><br>
						E: <?php include('inc/email.php') ?></p>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h4>Follow Us</h4>
						<a href="https://www.facebook.com/seedingsquare" target="_blank"><i class="fa fa-2x fa-fw fa-facebook"></i></a>
						<a href="https://twitter.com/seedingsquareuk" target="_blank"><i class="fa fa-2x fa-fw fa-twitter"></i></a>
						<a href="https://www.instagram.com/seedingsquareuk" target="_blank"><i class="fa fa-2x fa-fw fa-instagram"></i></a>
						<br/><br/><br/>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h4>Help</h4>
							<ul>
								<li><a href="faqs_and_guides.php">FAQs</a></li>
								<li><a href="faqs_and_guides.php">Planting Guides</a></li>
								<li><a href="delivery_and_returns.php">Delivery &amp; Returns</a></li>
							</ul>
					</div>
                    <div class="col-sm-6 col-md-3">
                        <h4>Secure payments</h4>
                        <!-- PayPal Logo -->
                        <div class="paypal"><a href="https://www.paypal.com/c2/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/c2/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/PP_AcceptanceMarkTray-NoDiscover_243x40.png" alt="Buy now with PayPal" /></a></div><!-- PayPal Logo -->


						<div><a href="http://www.lamtha2.co.uk" target="_blank"><span class="designedBy"></span></a></div>
					</div>
                </div>
            </div>
        </footer>

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<!-- smooth scroll -->
<script src="js/smoothscroll.js" type="text/javascript" ></script>

<!-- To Top scripts http://www.mattvarone.com/web-design/uitotop-jquery-plugin/ -->
<!-- the necessary css for UItoTop -->	
<link rel="stylesheet" type="text/css" media="screen" href="js/jquery.ui.totop/css/ui.totop.css" />
<!-- easing plugin ( optional ) -->
<script src="js/jquery.ui.totop/js/jquery.easing.js" type="text/javascript"></script>
<!-- UItoTop plugin -->
<script src="js/jquery.ui.totop/js/jquery.ui.totop.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>

<!-- faq animation -->
<script src="js/faqanimation.js" type="text/javascript"></script>

<!-- collapse menu after scroll to anchor tag -->
<script>
    $(document).ready(function () {
    $(window).on('scroll', function(){
    $('#navbar-collapse').collapse('hide')
    });
    });
</script>

<?php include('inc/statcounter.php') ?>