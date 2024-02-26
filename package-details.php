<?php include 'conn.php'; ?>
<?php include 'fetch-data.php'; ?>
<!DOCTYPE html>
<?php include 'settings/header.php'; ?>
<html lang="en">
<body>

<!-- header -->
<header>
<div class="container">
<!-- nav -->
<nav class="py-md-4 py-3 d-lg-flex">
<div id="logo">
<h1 class="mt-md-0 mt-2"> <a href="index.php"><span class="fa fa-modx"></span> Xchire Tourism </a></h1>
</div>
<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
<input type="checkbox" id="drop" />
<ul class="menu ml-auto mt-1">
<li class="active"><a href="index.php">Home</a></li>
<li class=""><a href="about.php">About Us</a></li>
<li class=""><a href="services.php">Services</a></li>
<li class=""><a href="packages.php">Tour Packages</a></li>
<li class=""><a href="contact.php">Contact</a></li>
<li class="booking"><a href="booking.php">Book Now</a></li>
</ul>
</nav>
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

<!-- about -->
<section class="about py-5">
<div class="container py-lg-5 py-sm-4">
<div class="row">
<div class="col-lg-6 about-left">


<h3 class="mt-lg-3"><?php echo $row['package_name']; ?>, <strong>Explore with us!</strong></h3>
<p class="mt-4" style="color:black; font-weight: bold;">Location: <?php echo $row['destination_name']; ?></p>
<p class="mt-4"><?php echo $row['package_details']; ?></p>
<p class="mt-4"><p style="color:black; font-weight: bold;">What To Do</p><?php echo $row['package_activities']; ?></p>
				
</div>
<div class="col-lg-6 about-right text-lg-left mt-lg-0 mt-5">
<div class="card card-primary" style="border-radius: 10px;">
<div class="card-header">
<img src="<?php echo (!empty($row['name']))? 'admin/dist/img/'.$row['name']:'admin/dist/img/profile.jpg'; ?>" alt="" class="img-fluid" style="border-radius: 10px;">                
</div>
<!-- /.card-header -->
<!-- form start -->
<form role="form" action="booking_add.php" method="POST">
<input type="hidden" class="form-control" name="package_id" value="<?php echo $row['package_id']; ?>">
<input type="hidden" class="form-control" name="booking_status" value="Pending">
<div class="card-body">
<div class="form-group">
<label for="exampleInputEmail1">Full Name</label>
<input type="text" class="form-control" name="booking_fullname" placeholder="Enter Name">
</div>
<div class="form-group">
<label for="exampleInputPassword1">No of Passengers</label>
<input type="number" class="form-control" name="booking_passenger" placeholder="No of Passengers">
</div>
<label for="exampleInputPassword1">Date Arrival / Departure</label>
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text">
<i class="far fa-calendar-alt"></i>
</span>
</div>
<input type="text" class="form-control float-right" id="reservation" name="booking_date">
</div>

</div>
<!-- /.card-body -->

<div class="card-footer">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>

</div>
</div>

</div>
</section>
<!-- //about -->


<!-- tabs -->
<?php include 'settings/choose-us.php'; ?>
<!-- tabs -->

<!-- testimonials -->
<?php include 'settings/testimonials.php'; ?>
<!-- //testimonials -->


<!--footer -->
<footer>
<?php include 'settings/footer.php'; ?>	
</footer>
<!-- //footer -->

<!-- copyright -->
<?php include 'settings/copyright.php'; ?>
<!-- //copyright -->

<!-- move top -->
<?php include 'settings/move-top.php'; ?>
<!-- move top -->

	
</body>
<!-- date-range-picker -->
<?php include 'settings/script.php'; ?>
</html>