
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding_sign" style="padding-top:120px">
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-6 sign_in" style="border:solid black 0px;">
            
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
                    <input class="form-control" value="<?php echo $this->session->flashdata('password') ?>" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" placeholder = 'Enter your password' required="true">
                  </div>
                </div>
                <div class="col-12">    
                  <div class="form-group">
                    <h6>Repeat Password</h6>
                    <input class="form-control" value="<?php echo $this->session->flashdata('repeat_password') ?>" name="repeat_password" id="repeat_password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Repeat your password'" placeholder = 'Repeat your password' required="true">
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
