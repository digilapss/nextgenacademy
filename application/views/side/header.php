<!doctype html>
<html lang="en"> 

<head>
    <!-- Required meta tags -->
    <title>NextGen Academy | Next Generation Academy</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="NextGen Academy | Next Generation Academy">
    <meta itemprop="description" content="NextGen Academy adalah Platform smart city kolaboratif untuk pendidikan formal yang fokus pada pendidikan keterampilan praktis, Kewirausahaan dan pengembangan diri di Madiun Raya">
    <meta itemprop="image" content="<?php echo base_url() ?>asset/img/nga_logo.png">
    
    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="https://www.nextgenacademy.id">
    <meta property="og:type" content="website">
    <meta property="og:title" content="NextGen Academy | Next Generation Academy">
    <meta property="og:description" content="NextGen Academy adalah Platform smart city kolaboratif untuk pendidikan formal yang fokus pada pendidikan keterampilan praktis, Kewirausahaan dan pengembangan diri di Madiun Raya">
    <meta property="og:image" content="<?php echo base_url() ?>asset/img/nga_logo.png">
    
    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="NextGen Academy | Next Generation Academy">
    <meta name="twitter:description" content="NextGen Academy adalah Platform smart city kolaboratif untuk pendidikan formal yang fokus pada pendidikan keterampilan praktis, Kewirausahaan dan pengembangan diri di Madiun Raya">
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

    <script src="<?php echo base_url() ?>asset/js/jquery-1.12.1.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= getenv('GA_KEY') ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){ 
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '<?= getenv('GA_KEY')?>' );
    </script>

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu <?= $header_class ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>asset/img/nga_logo.png" width="200" alt="NGA Logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('') ?>">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('') ?>contact">Hubungi Kami</a>
                                </li>
                                <?php  if($this->session->userdata('account_id') ){  
                                    
                                ?>
                                
                                    
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?php echo $this->session->userdata('image')  ?>" width="30" class="rounded" alt="" >    
                                    <?php echo $this->session->userdata('name')  ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <?php 
                                            if($this->session->userdata('role') === 2 ){
                                             ?> 
                                                <a class="dropdown-item" href="'.base_url().'admin/course">Course</a> 
                                             <?
                                            } else {
                                                ?>
                                                    <a class="dropdown-item" href="<?= base_url() ?>admin/blog">Blog</a> 
                                                    <a class="dropdown-item" href="<?= base_url() ?>admin/category">Blog Category</a> 
                                                    <a class="dropdown-item" href="<?= base_url() ?>course/member">My Course</a>
                                                <?
                                            }
                                        ?>

                                        <a class="dropdown-item" href="<?php echo base_url() ?>user/profile">Profile</a>
                                        <a class="dropdown-item" href="<?php echo base_url() ?>user/logout">Sign Out</a>
                                    </div>
                                </li>

                                <?php } else {
                                    ?>
                                    
                                    <li class="nav-item">
                                        <a class="btn_1" style="margin:10px;" href="<?php echo base_url() ?>user/signin">Masuk</a>
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
