<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<title>Kool Store - Responsive eCommerce Template</title>

		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">


	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800">
	<link rel="stylesheet" href=<?php bloginfo('template_url'); echo "/css/font-awesome.min.css"?>>
	<link rel="stylesheet" href=<?php bloginfo('template_url'); echo "/css/animate.css"?>>
	<link rel="stylesheet" href=<?php bloginfo('template_url'); echo "/css/templatemo-misc.css"?>>
	<link rel="stylesheet" href=<?php bloginfo('template_url'); echo "/css/templatemo-style.css"?>>
	<link rel="stylesheet" href=<?php bloginfo('template_url'); echo "/css/normalize.min.css"?>>
	<link rel="stylesheet" href=<?php bloginfo('template_url'); echo "/css/bootstrap.css"?>>




	</head>
<body>
    <header class="site-header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="top-header-left">
                            <a href="#">Sign Up</a>
                            <a href="#">Log In</a>
                        </div> <!-- /.top-header-left -->
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div> <!-- /.social-icons -->
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-header -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-8">
                        <div class="logo">
                            <h1><a href="#">Kool Store</a></h1>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-4">
                        что нибудь вставим потом сюда
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-header -->
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-7">
                   <?php    wp_nav_menu(array( 'menu' => 'primary', 'container' => 'div', 'container_class' => 'list-menu')); ?>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-nav -->
    </header> <!-- /.site-header -->