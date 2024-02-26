<?php include 'conn.php'; ?>
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


<!-- tour packages -->
<section class="packages pt-5">
<div class="container py-lg-4 py-sm-3">
<h2 class="heading text-capitalize text-center"> Discover our tour packages</h2>
<p class="text mt-2 mb-5 text-center">Vestibulum tellus neque, sodales vel mauris at, rhoncus finibus augue. Vestibulum urna ligula, molestie at ante ut, finibus vulputate felis.</p>



<table id="employee" class="table">
<tbody>
<?php
    $sql = "SELECT *, package.destination_id FROM package LEFT JOIN destination ON destination.destination_id=package.destination_id";
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
</section>
<!-- tour packages -->

<!-- destinations -->
<?php include 'settings/destination-section.php'; ?>
<!-- destinations -->

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