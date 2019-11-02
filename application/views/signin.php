

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
                <div class="form-group text-center">
                  <button type="submit" class="genric-btn primary circle col-12">
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
                    Sign with Google
                  </a>
                </div>
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
