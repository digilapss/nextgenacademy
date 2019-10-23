

            <p class="text-danger">
              <?php echo $this->session->flashdata('login_error') ?>
            </p>
            <form class="form-contact" action="<?php echo base_url() ?>course/apply_course/<?php echo $index_course ?>" method="post" >
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <h6>Nomor WhatsApp </h6>
                    <input class="form-control" name="wa" id="wa" type="number" value="<?php echo $this->session->userdata('phone_number') ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nomor WhatsApp'" placeholder = 'Masukkan Nomor WhatsApp' required="true">
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
