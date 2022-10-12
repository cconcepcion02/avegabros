<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- PAGE TITLE HERE -->
	<title><?php echo $pagetitle;?></title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/select2/css/select2.min.css">
	<link href="<?php echo base_url();?>assets/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/nouislider/nouislider.min.css">
	<!-- Datatable -->
	<link href="<?php echo base_url();?>assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<!-- Pick date -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/pickadate/themes/default.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/pickadate/themes/default.date.css">
	<!-- <link href="../icon.css?family=Material+Icons" rel="stylesheet"> -->

	<!-- Style css -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	
	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

</head>
<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">