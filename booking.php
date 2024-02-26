<?php include 'navigation/session.php' ?> 
<!DOCTYPE html>
<html>
<head>
<?php include 'navigation/header.php' ?>  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Main Sidebar Container -->
<?php include 'navigation/menu.php' ?> 
<?php include 'navigation/navbar.php' ?>  
<!-- Content Wrapper. Contains page content -->


<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">

</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
<div class="container-fluid">
<!-- Main row -->
<div class="row">
<!-- Left col -->
<section class="col-lg-12 connectedSortable">
<!-- Custom tabs (Charts with tabs)-->

<div class="row mb-2">
<div class="col-sm-6">

<!---<button type="button" class="btn btn-xs bg-gradient-navy" data-toggle="modal" data-target="#add"><i class="fa-solid fa-plus"></i> Create New Tour Packages</button>-->

</div><!-- /.col -->
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item" style="font-size:13px;"><a href="home.php">Home</a></li>
<li class="breadcrumb-item active" style="font-size:13px;">Manage Bookings</li>
</ol>
</div><!-- /.col -->
</div><!-- /.row -->
<div class="card card-outline card-navy">
<div class="card-header">
<h3 class="card-title"  style="font-size:13px;"><i class="fa-solid fa-book-open-reader"></i>&nbsp;Manage Bookings</h3>
                
</div><!-- /.card-header -->
<div class="card-body">

<table id="package" class="table table-hover">
<thead>
<th style="font-size: 13px;">#</th>  
<th style="font-size: 13px;">PACKAGE NAME</th>
<th style="font-size: 13px;">TYPE</th>
<th style="font-size: 13px;">CUSTOMER NAME</th>
<th style="font-size: 13px;">NO OF PASSENGERS</th>
<th style="font-size: 13px;">FROM/TO</th>
<th style="font-size: 13px;">STATUS</th>
<th style="font-size: 13px;">TOOLS</th>
</thead>
<tbody>

<?php
    $sql = "SELECT *, booking.booking_id FROM booking LEFT JOIN package ON package.package_id=booking.package_id WHERE booking_status='pending'";
    $query = $conn->query($sql);
    while($row = $query->fetch_assoc()){
    ?>

<tr>
<td style="font-size:13px;"><?php echo $row['booking_id']; ?></td> 
<td style="font-size:13px;"><?php echo $row['package_name']; ?></td>  
<td style="font-size:13px;"><?php echo $row['package_type']; ?></td>  
<td style="font-size:13px; text-transform:capitalize;"><?php echo $row['booking_fullname']; ?></td>
<td style="font-size:13px;"><?php echo $row['booking_passenger']; ?></td>
<td style="font-size:13px;"><?php echo $row['booking_date']; ?></td>
<td style="font-size:13px;"><?php echo $row['booking_status']; ?></td>
<td>
<div class="btn-group">
<button type="button" class="btn-xs btn btn-default"> View Details</button>
<button type="button" class="btn-xs btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
<span class="sr-only">Toggle Dropdown</span>
</button>
<div class="dropdown-menu" role="menu">
<a class="dropdown-item confirm" data-booking_id="<?php echo $row['booking_id']; ?>" style="font-size:12px;">Confirm Booking</a>

<div class='dropdown-divider'></div>
<a class="dropdown-item cancelled" data-booking_id="<?php echo $row['booking_id']; ?>" style="font-size:12px;">Cancelled Booking</a>
</div>
</div>
</td>

</tr>

<?php }?>
</tbody>
</table>

</div><!-- /.card-body -->
</div>
<!-- /.card -->

</section>
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<?php include 'navigation/footer.php' ?> 
<!-- Modal -->
<?php include 'modal/booking_modal.php'; ?>
<?php include 'functions/booking_function.php'; ?>
</body>
</html>
