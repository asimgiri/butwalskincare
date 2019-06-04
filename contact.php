<?php include 'includes/header.php'; ?>

<!-- Start Banner -->

<div class="inner-banner about-us-banner">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content">
          <h1>CONTACT</h1>
          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
  </ol>
</nav>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- End Banner -->

<!-- Start Contact Us -->
<section class="contact-us padding-lg">
  <div class="container">
    <div class="row">
	    <div class="col-sm-6 form-wrapper">
			<form name="contactform" id="contactform" method="post" action="contact_form/ajax-contact.php">

			  <div class="row input-row">
				<div class="col-sm-6">
				  <input name="first_name" type="text" placeholder="FIRST NAME*" required="">
				</div>
				<div class="col-sm-6">
				  <input name="last_name" type="text" placeholder="LAST NAME*">
				</div>
			  </div>
			  <div class="row input-row">
				<div class="col-sm-12">
				  <input name="email" type="text" placeholder="EMAIL*">
				</div>
			  </div>
			  <div class="row input-row">
				<div class="col-sm-12">
				  <input name="phone" type="text" placeholder="PHONE*">
				</div>
			  </div>
			  <div class="row input-row">
				<div class="col-sm-12">
				  <textarea name="message" placeholder="MESSAGE"></textarea>
				</div>
			  </div>
				   <div class="text-center">
             <a href="#"><button class="btn btn-regular">Submit</button></a>
           </div>
			</form>
	    </div>
		<div class="col-sm-6 contact-info">
		   <h2>CONTACT INFO</h2>
		   <p><i class="fa fa-map-marker" aria-hidden="true"></i> 1688 Big Elm Lenexa Missouri 66214</p>
		   <p><i class="fa fa-phone" aria-hidden="true"></i> <span class="numbers"><a href="tel:+1-760-284-3410">760-284-3410</a> / <a href="tel:+1-760-284-3410">760-284-3410</a></span></p>
		   <p><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@demoemail.com">info@demoemail.com</a></p>
		   <div class="connect-with-us">
		      <h2>CONNECT WITH US : </h2>
			  <ul class="follow-us clearfix">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			 </ul>
		   </div>
		</div>
	 </div>
  </div>
</section>
<!-- end Contact Us -->

<!-- Start Google Map -->

<div class="google-map">
  <div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.6268931077225!2d83.46358631506185!3d27.697924382795865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399687cef170d27f%3A0xa06a09b2bcdf3f47!2zQnV0d2FsIENoaGFsYSBUYXRoYSBZYXVuIFJvZyBDbGluaWMgKOCkrOClgeCkn-CkteCksiDgpJvgpL7gpLLgpL4g4KSk4KSl4KS-IOCkr-CljOCkqCDgpLDgpYvgpJcg4KSV4KWN4KSy4KS_4KSo4KS_4KSVKQ!5e0!3m2!1sne!2snp!4v1559541377029!5m2!1sne!2snp" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>

<!-- End Google Map -->
<?php include 'includes/footer.php'; ?>
