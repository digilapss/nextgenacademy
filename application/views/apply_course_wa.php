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
            <form class="form-contact" action="<?php echo base_url() ?>course/apply_course/<?php echo $index_course ?>" method="post" >
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <h6>Konfirmasi Nomor WhatsApp </h6>
                    <input class="form-control number-only" oninput="isNumber()" name="wa" id="wa" value="<?php echo $this->session->userdata('phone_number') ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nomor WhatsApp'" placeholder = 'Masukkan Nomor WhatsApp' required="true">
                  </div>
                </div>
                
              </div>
              <div class="form-group">
                <button type="submit" class="button btn_1" style="float: right;">Daftar</button>
              </div>
              <div style="padding-top: 5%; margin-bottom: 10px; float: right; position: relative; color: #b30ec2">
                <!-- Belum punya akun? <a href="<?php echo base_url() ?>user/signup" style="color: #860791"> Daftar Sekarang! </a> -->
              </div>
            </form>
          </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
<!-- ================ sign in section end ================= -->
 
  <!-- footer part end-->
    
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?php echo base_url() ?>asset/js/jquery-1.12.1.min.js"></script>
    <script src="<?php echo base_url() ?>asset/js/lib.js"></script>
</body>

</html>