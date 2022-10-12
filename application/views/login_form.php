
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="Chino Concepcion">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="PTMS : PTMS ">
	<meta property="og:title" content="PTMS : PTMS ">
	<meta property="og:description" content="PTMS : Paca Training and Management Systems">
	<meta property="og:image" content="http://ptmsiasia.com/ptms/assets/img/ptmslogo_11.png">
	<meta name="format-detection" content="telephone=3842251">
	
	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="<?php echo base_url().'assets/'?>css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="<?php echo base_url().'assets/'?>images/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                        <?php echo form_open("signIn")?>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" name="username" class="form-control" >
                                        </div>

                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                        <?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url().'assets/'?>vendor/global/global.min.js"></script>
    <script src="<?php echo base_url().'assets/'?>js/custom.min.js"></script>
    <script src="<?php echo base_url().'assets/'?>js/dlabnav-init.js"></script>
	<script src="<?php echo base_url().'assets/'?>js/styleSwitcher.js"></script>
</body>
</html>