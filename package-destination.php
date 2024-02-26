<?php include 'conn.php'; ?>
<?php include 'fetch-data-destination.php'; ?>
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

<table id="employee" class="table">
<tbody>
<?php
    include('conn.php');
    $destination_id=$_GET['destination_id'];
    $sql = "SELECT *, destination.destination_id FROM destination LEFT JOIN package ON package.destination_id=destination.destination_id where package.destination_id='$destination_id'";
    $query = $conn->query($sql);
    while($row = $query->fetch_assoc()){
    ?>
<tr>
<td>
<div class="card mb-12" style="border-radius: 10px;">
<div class="row g-0">
<div class="col-md-4">
<img src="<?php echo (!empty($row['name']))? 'admin/dist/img/'.$row['name']:'admin/dist/img/profile.jpg'; ?>"  class="img-fluid rounded-start" alt="..." style="height: 100%; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
</div>
<div class="col-md-8">
<div class="card-body">
<h5 class="card-title text-primary" style="font-weight: bold;"><p style="color:black;">Package Name: </p><?php echo $row['package_name']; ?></h5>
<p class="card-text" style="font-size: 13px; color: black; font-weight: bold;">Package Type: <?php echo $row['package_type']; ?></p>
<p class="card-text" style="font-size: 13px; color: black;">Location: <?php echo $row['destination_name']; ?></p>
<p class="card-text" style="font-size: 13px; color: black;">Features: <?php echo $row['package_features']; ?></p>
<p class="card-text text-primary" style="font-size: 20px; color: black; font-weight:bold;">Price: <?php echo $row['package_price']; ?></p>
<br>
<a href="package-details.php?package_id=<?php echo $row['package_id'];?>" class="btn btn-primary" style="font-size:15px;">Details</a>
</div>
</div>
</div>
</div>



</td>

</tr>
<?php }?>
</tbody>
</table>

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