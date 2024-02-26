<!DOCTYPE html>
<html lang="en">
<?php include 'settings/header.php'; ?>
<body>

<!-- header -->
<header>
<div class="container">
<!-- nav -->
<?php include 'settings/navbar.php'; ?>
<!-- //nav -->
</div>
</header>
<!-- //header -->

<!-- banner -->
<section class="banner_inner" id="home">
	<div class="banner_inner_overlay">
	</div>
</section>
<!-- //banner -->


<!-- Contact -->
<section class="contact py-5">
<div class="container py-lg-5 py-sm-3">
<h2 class="heading text-capitalize text-center mb-sm-5 mb-4"> Get In Touch with us</h2>
<ul class="list-unstyled row text-center mt-lg-5 mt-4 px-lg-5">
<li class="col-md-4 col-sm-6 adress-w3pvt-info">
<div class=" adress-icon">
<span class="fa fa-map-marker"></span>
</div>

<h6>Location</h6>
<p>Xhire Technology
<br>Brgy, Sauyo, Novaliches, Quezon City</p>
</li>

<li class="col-md-4 col-sm-6 adress-w3pvt-info mt-sm-0 mt-4">
<div class="adress-icon">
<span class="fa fa-envelope-open-o"></span>
</div>
<h6>Phone & Email</h6>
<p>(63) 938-388-2697</p>
<a href="https://www.behance.net/liestherroluna13" class="mail">crystalink23@gmail.com</a>
</li>
<li class="col-md-4 col-sm-6 adress-w3pvt-info mt-md-0 mt-4">

<div class="adress-icon">
<span class="fa fa-comments-o"></span>
</div>

<h6>Stay In Touch</h6>
<ul class="social_section_1info mt-2">
<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
<li class="google"><a href="#"><span class="fa fa-google-plus"></span></a></li>
<li class="linkedin"><a href="#"><span class="fa fa-linkedin"></span></a></li>
</ul>
</li>
</ul>
			
<div class="contact-grids mt-5">
<div class="row">
<div class="col-lg-6 col-md-6 contact-left-form">


<form action="contact_add.php" method="post">
<div class=" form-group contact-forms">
<input type="text" class="form-control" name="contact_name" placeholder="Name" required="">
</div>
<div class="form-group contact-forms">
<input type="email" class="form-control" name="contact_email" placeholder="Email" required="">
</div>
<div class="form-group contact-forms">
<input type="text" class="form-control" name="contact_phone" placeholder="Phone" required=""> 
</div>
<div class="form-group contact-forms">
<textarea class="form-control" name="contact_message" placeholder="Message" rows="3" required=""></textarea>
</div>
<button type="submit" name="submit" class="btn btn-block sent-butnn">Send</button>


</form>
</div>
<div class="col-lg-6 col-md-6 contact-right pl-lg-5">
<h4>Do you have any questions about us? write to us.</h4>
<p class="mt-md-4 mt-2">Duis nisi sapien, elementum finibus fermentum eget, aliquet et leo. Mauris hendrerit vel ex.
						Quisque vitae luctus massa. Phas ellus sed aliquam leo. Vestibulum ullamcorper massa eut sed fringilla. Integer ultrices finibus sed nisi.
						in convallis felis da bus sit amet  aliquet et leo dolor sit amet aliquet.</p>
<h5 class="mt-lg-5 mt-3">Office Hours</h5>
<p class="mt-3">Monday to Friday : 09 am to 06 pm</p>
<p>Saturday and Sunay : 10 am to 04 pm</p>
</div>
</div>
</div>
</div>
</section>
<!-- //Contact -->

<!-- map -->	
<div class="map p-2">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15437.316179273494!2d121.03506789575354!3d14.693974978885196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b0d0065b1da7%3A0x92b1a9b966fa0e2e!2sSauyo%2C%20Novaliches%2C%20Quezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1708756424469!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- //map -->

<!--footer -->
<?php include 'settings/footer.php'; ?>
<!-- //footer -->

<!-- copyright -->
<?php include 'settings/copyright.php'; ?>
<!-- //copyright -->

<!-- move top -->
<?php include 'settings/move-top.php'; ?>
<!-- move top -->

	
</body>
</html>