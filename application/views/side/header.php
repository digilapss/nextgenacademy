<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>Madiun NextGen | Madiun Next Generation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url() ?>asset/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/nice-select.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="<?php echo base_url() ?>asset/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cource.html">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="<?php echo base_url() ?>user/signin">
                                        <?php 
                                            if($this->session->userdata('account_id')){
                                                echo $this->session->userdata('name');
                                            } else {
                                                echo "Masuk" ;
                                            }
                                        ?>
                                    </a>
                                </li>
                                        
                                <?php
                                    if($this->session->userdata('account_id')){
                                        echo '  <li class="d-none d-lg-block">
                                        <a class="btn_1" href="'.base_url().'user/logout"> SignOut </a>
                                        </li>';
                                    } 
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Header part end-->
