<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etrain</title>
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
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css">
</head>

<body>
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding_sign">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-6 sign_in">
            <div class="section_tittle text-center">
                <p></p>
                <a href="<?php echo base_url() ?>   ">
                  <img src="<?php echo base_url() ?>asset/img/logo.png" alt="Madiun NextGen" style="margin-left: auto; margin-right: auto;">
                </a>
                <h2></h2>
            </div>
            <form class="form-contact" action="<?php echo base_url() ?>user/signup" method="post"  novalidate="novalidate">
              <div class="row">
              
                <div class="col-sm-12">
                  <p><?php echo $this->session->flashdata('signup_alert') ?></p>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <h6>Full Name</h6>
                    <input class="form-control" value="<?php echo $this->session->flashdata('full_name') ?>" name="full_name" id="full_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your full name'" placeholder = 'Enter your full name' required="true">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <h6>Phone Number</h6>
                    <input class="form-control" value="<?php echo $this->session->flashdata('phone_number') ?>" name="phone_number" id="phone_number" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your mobile phone number'" placeholder = 'Enter your mobile phone number' required="true">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <h6>Email</h6>
                    <input class="form-control" value="<?php echo $this->session->flashdata('email') ?>" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" placeholder = 'Enter your email' required="true">
                  </div>
                </div>

                <div class="col-sm-12">
                  <p class="text-danger"><?php echo $this->session->flashdata('repeat_pass') ?></p>
                </div>
                
                <div class="col-12">
                  <div class="form-group">
                    <h6>Password</h6>
                    <input class="form-control" value="<?php echo $this->session->flashdata('password') ?>" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" placeholder = 'Enter your password'>
                  </div>
                </div>
                <div class="col-12">    
                  <div class="form-group">
                    <h6>Repeat Password</h6>
                    <input class="form-control" value="<?php echo $this->session->flashdata('repeat_password') ?>" name="repeat_password" id="repeat_password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Repeat your password'" placeholder = 'Repeat your password'>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="button btn_1" style="float: right;">Register</button>
              </div>
              <div style="padding-top: 5%; margin-bottom: 10px; float: right; position: relative; color: #b30ec2">
                Sudah punya akun? <a href="<?php echo base_url() ?>user/signin" style="color: #860791"> Login Sekarang! </a>
              </div>
            </form>
          </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

<!-- footer part start-->
<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="<?php echo base_url() ?>"> <img src="<?php echo base_url() ?>asset/img/logo.png" alt=""> </a>
                    <p>But when shot real her. Chamber her one visite removal six
                        sending himself boys scot exquisite existend an </p>
                    <p>But when shot real her hamber her </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="single-footer-widget footer_2">
                    <h4>Newsletter</h4>
                    <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                    </p>
                    <form action="#">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder='Enter email address'
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email address'">
                                <div class="input-group-append">
                                    <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="social_icon">
                        <a href="#"> <i class="ti-facebook"></i> </a>
                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                        <a href="#"> <i class="ti-instagram"></i> </a>
                        <a href="#"> <i class="ti-skype"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-4">
                <div class="single-footer-widget footer_2">
                    <h4>Contact us</h4>
                    <div class="contact_info">
                        <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                        <p><span> Phone :</span> +2 36 265 (8060)</p>
                        <p><span> Email : </span>info@colorlib.com </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->
<script src="<?php echo base_url() ?>asset/js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="<?php echo base_url() ?>asset/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="<?php echo base_url() ?>asset/js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="<?php echo base_url() ?>asset/js/swiper.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.nice-select.min.js"></script>
<!-- swiper js -->
<script src="<?php echo base_url() ?>asset/js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="<?php echo base_url() ?>asset/js/owl.carousel.min.js"></script>
<!-- contact js -->
<script src="<?php echo base_url() ?>asset/js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.form.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/mail-script.js"></script>
<script src="<?php echo base_url() ?>asset/js/sign.js"></script>

<!-- slick js -->
<script src="<?php echo base_url() ?>asset/js/slick.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url() ?>asset/js/waypoints.min.js"></script>
<!-- custom js -->
<script src="<?php echo base_url() ?>asset/js/custom.js"></script>
</body>

</html>