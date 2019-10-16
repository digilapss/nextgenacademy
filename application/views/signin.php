
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding_sign " style="padding-top:120px">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-6 sign_in" style="border:solid black 0px">
           
            <p class="text-danger">
              <?php echo $this->session->flashdata('login_error') ?>
            </p>
            <form class="form-contact" action="<?php echo base_url() ?>user/signin" method="post" >
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <h6>Email</h6>
                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" placeholder = 'Enter your email' required="true">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <h6>Password</h6>
                    <input class="form-control" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" placeholder = 'Enter your password'>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="button btn_1" style="float: right;">Login</button>
              </div>
              <div style="padding-top: 5%; margin-bottom: 10px; float: right; position: relative; color: #b30ec2">
                Belum punya akun? <a href="<?php echo base_url() ?>user/signup" style="color: #860791"> Daftar Sekarang! </a>
              </div>
            </form>
          </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
