<body>
  <!-- ================ signup section start ================= -->
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
              <?php echo $this->session->flashdata('signup_alert') ?>
            </p>
              
            <form class="form-contact" action="<?php echo base_url() ?>user/signup" method="post">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <h6>Nama Lengkap</h6>
                    <input class="form-control" value="<?php echo $this->session->flashdata('full_name') ?>" name="full_name" id="full_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan nama lengkap kamu'" placeholder = 'Masukkan nama lengkap kamu' required="true">
                  </div>
                </div>
                <!-- <div class="col-sm-12">
                  <div class="form-group">
                    <h6>Posisi</h6>
                    <select class="input-group-icon mt-10">
                      <option>Siswa</option>
                      <option>Mahasiswa</option>
                    </select>
                  </div>
                </div> -->
                <div class="col-sm-12">
                  <div class="form-group">
                    <h6>Email</h6>
                    <input class="form-control" value="<?php echo $this->session->flashdata('email') ?>" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan alamat email'" placeholder = 'Masukkan alamat email' required="true">
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <h6>Password</h6>
                    <input class="form-control" value="<?php echo $this->session->flashdata('password') ?>" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan password'" placeholder = 'Masukkan password' required="true">
                  </div>
                </div>
                <div class="col-12">    
                  <div class="form-group">
                    <h6>Ulangi Password</h6>
                    <input class="form-control" value="<?php echo $this->session->flashdata('repeat_password') ?>" name="repeat_password" id="repeat_password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan ulang password'" placeholder = 'Masukkan ulang password' required="true">
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group text-center">
                  <button type="submit" class="button-contactForm btn_1 primary circle col-12">
                    <i class="fa fa-lock"></i>
                    Daftar Sekarang
                  </button>
                </div>
              </div>
              <hr>
              <!-- <div class="col-12">
                <div class="form-group text-center">
                  <a href="<?= $glogin ?>" class="genric-btn info-border circle col-12">
                    <i class="fa fa-google"></i>
                    Daftar dengan Google 
                  </a>
                </div>
              </div> -->
              <div style="padding-top: 5px; margin-bottom: 10px; text-align: center; position: relative; color: black">
                Sudah punya akun? <a href="<?php echo base_url() ?>user/signin" style="color: #FF8100"> Login Sekarang! </a>
              </div>
            </form>
          </div>
      </div>
    </div>
  </section>
  <!-- ================ signup section end ================= -->

  <!-- footer part end-->
    
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?php echo base_url() ?>asset/js/jquery-1.12.1.min.js"></script>
</body>

</html>