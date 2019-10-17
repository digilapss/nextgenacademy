<!doctype html>
<html lang="en"> 

<head>
    <!-- Required meta tags -->
    <title>Madiun NextGen | Madiun Next Generation</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Madiun NextGen | Madiun Next Generation">
    <meta itemprop="description" content="Madiun NextGen ( Next generation ) adalah Platform smart city kolaboratif untuk pendidikan formal yang fokus pada pendidikan keterampilan praktis, Kewirausahaan dan pengembangan diri di Madiun Raya">
    <meta itemprop="image" content="<?php echo base_url() ?>asset/img/nga_logo.png">
    
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.nextgenacademy.id">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Madiun NextGen | Madiun Next Generation">
    <meta property="og:description" content="Madiun NextGen ( Next generation ) adalah Platform smart city kolaboratif untuk pendidikan formal yang fokus pada pendidikan keterampilan praktis, Kewirausahaan dan pengembangan diri di Madiun Raya">
    <meta property="og:image" content="<?php echo base_url() ?>asset/img/nga_logo.png">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Madiun NextGen | Madiun Next Generation">
    <meta name="twitter:description" content="Madiun NextGen ( Next generation ) adalah Platform smart city kolaboratif untuk pendidikan formal yang fokus pada pendidikan keterampilan praktis, Kewirausahaan dan pengembangan diri di Madiun Raya">
    <meta name="twitter:image" content="<?php echo base_url() ?>asset/img/nga_logo.png">
    

    <link rel="icon" href="<?php echo base_url() ?>asset/img/nga_logo.png">
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
    
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150069179-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){ 
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-150069179-1');
    </script>

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>asset/img/nga_logo.png" width="70" alt="NGA Logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo base_url('') ?>">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('') ?>hubungikami">Hubungi Kami</a>
                                </li>
                                <?php  if($this->session->userdata('account_id') ){  
                                    
                                ?>
                                
                                    
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i>    
                                    <?php echo $this->session->userdata('name')  ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php 
                                            if($this->session->userdata('role') === 2 ){
                                                echo '<a class="dropdown-item" href="'.base_url().'admin/course">Course</a>';
                                            }
                                        ?>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>user/profile">Profile</a>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>user/logout">Sign Out</a>
                                    </div>
                                </li>

                                <?php } else {
                                    ?>
                                    
                                    <li class="d-none d-lg-block">
                                        <a class="btn_1" href="<?php echo base_url() ?>user/signin">Masuk</a>
                                    </li>

                                    <?php 
                                } ?>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Header part end-->
