<!DOCTYPE html>
<html>
<head>
	<title>Food Service Tema</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tooplate-gymso-style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form-style.css">
</head>
<body>

	<!-- NAVBAR -->

	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url('pages/home'); ?>"><img src="<?php echo base_url(); ?>assets/images/tema.png" width="60" height="60"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" 	aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			<div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="<?php echo site_url('pages/home'); ?>" class="nav-link smoothScroll">Home</a>
                    </li>
					<li class="nav-item">
				        <a href="<?php echo site_url('pages/about'); ?>" class="nav-link smoothScroll">About Us</a>
					</li>
					<li class="nav-item">
                        <a href="<?php echo site_url('products'); ?>" class="nav-link smoothScroll">Menu</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo site_url('pages/contact'); ?>" class="nav-link smoothScroll">Contact Us</a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li class="nav-item"><a href="<?php echo site_url('cart'); ?>" class="fa fa-shopping-cart">  Shopping Cart:  (<?php echo ($this->cart->total_items() > 0)?$this->cart->total_items().' Items':'Empty'; ?>)</a></li>
                    
                </ul>
            </div>
		</div>
	</nav>