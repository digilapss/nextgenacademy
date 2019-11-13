<body>
  <!-- ================ sign in section start ================= -->
  <section class="contact-section section_padding_sign">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-6 sign_in">
            <div class="section_tittle text-center">
                <p></p>
                <a href="<?php echo base_url() ?>">
                  <img src="<?php echo base_url() ?>asset/img/nga_logo.png" alt="Madiun NextGen" style="margin-left: auto; margin-right: auto;" width="240">
                </a>
                <h2></h2>
            </div>

            <p class="text-danger">
              <?php echo $this->session->flashdata('login_error') ?>
            </p>
            
            <form class="form-contact" action="<?php echo base_url() ?>user/signin" method="post" >
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <h6>Email</h6>
                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Email'" placeholder = 'Masukkan Email' required="true">
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                    <h6>Password</h6>
                    <input class="form-control" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Password'" placeholder = 'Masukkan Password'>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-group">
                      <label class="text-dark">
                        <input class="" name="checkbox" id="password" type="checkbox" > Ingatkan saya saat login
                      </label>
                  </div>
                </div>

              </div>
              <div class="col-12">
                <div class="text-center">
                  <button type="submit" class="button-contactForm btn_1 primary circle col-12">
                    <i class="fa fa-lock"></i>
                    Login
                  </button>
                </div>
              </div>
              <hr>
              <div class="col-12">
                <div class="form-group text-center">
                  <a href="<?= $glogin ?>" class="genric-btn info-border circle col-12">
                    <i class="fa fa-google"></i>
                    Login dengan Google
                  </a>
                </div>
              </div>
              
              <div style="padding-top: 5px; margin-bottom: 10px; text-align: center; position: relative; color: black">
                Belum punya akun?  <a href="<?php echo base_url() ?>user/signup" style="color: #FF8100"> Daftar Sekarang! </a>
              </div>
            </form>
          </div>
      </div>
    </div>
  </section>
  <!-- ================ sign in section end ================= -->
 
  <!-- footer part end-->
    
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?php echo base_url() ?>asset/js/jquery-1.12.1.min.js"></script>
</body>

</html>