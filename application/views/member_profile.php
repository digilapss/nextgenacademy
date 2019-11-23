

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Profile</h2>
                            <!-- <p> </p> -->
                            <div class="">
                              <a href="#" class="btn_1" data-toggle="modal" data-target="#exampleModalCenter" style="font-size: 12px; padding: 10px 12px;"> <i class="fa fa-lock"></i> Update Password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
    
      <div class="row">

        <div class="col-lg-12">
          <div class="genric-btn col-sm-2 primary tablinks" id="tab-general" onclick="openTab('general')">General</div>
          <div class="genric-btn col-sm-2 primary-border tablinks" id="tab-educational" onclick="openTab('educational')">Pendidikan</div>
          <div class="genric-btn col-sm-2 primary-border tablinks" id="tab-achievement" onclick="openTab('achievement')" style="margin-bottom: 10px;">Prestasi</div>

          <?= $this->session->flashdata('signup_alert') ?>
          <form class="form-contact mt-10"  action="<?= base_url().'user/profile_update' ?>" method="post"  enctype="multipart/form-data" onsubmit="return cek_form_profile(this)" >
            
            <div class="row tabcontent" id="general">
              <div class="col-sm-6">
                <h6>Nama Lengkap</h6>
                <div class="form-group">
                  <input class="form-control" name="name" value="<?= $this->session->userdata('name') ?>" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nama Lengkap'" placeholder = 'Masukkan Nama Lengkap' required>
                </div>
              </div>
              <div class="col-sm-6">
                <h6>Email</h6>
                <div class="form-group">
                  <input class="form-control" disabled name="email" value="<?= $this->session->userdata('email') ?>" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Alamat Email'" placeholder = 'Masukkan Alamat Email' required>
                </div>
              </div>
              <div class="col-sm-6">
                <h6>Instagram ID</h6>
                <div class="form-group">
                  <input class="form-control" name="instagram_id" value="<?= $this->session->userdata('instagram_id') ?>" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ID Instagram'" placeholder = 'ID Instagram' required>
                </div>
              </div>
              <div class="col-sm-6">
                <h6>Telephone</h6>
                <div class="form-group">
                  <input class="form-control" name="phone_number" value="<?= $this->session->userdata('phone_number') ?>" id="telephone" type="text" oninput="numberOnly('telephone')" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nomor Telephone'" placeholder = 'Masukkan Nomor Telephone' required>
                </div>
              </div>
              <div class="col-sm-6">
                <h6>Tanggal Lahir</h6>
                <div class="form-group">
                  <input class="form-control" value="<?= $this->session->userdata('born_date'); ?>" name="birthday" id="birthday" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Lahir'" placeholder = 'Tanggal Lahir' required>
                </div>
              </div>

              <div class="col-sm-6">
                <h6>Jenis Kelamin</h6>
                <div class="input-group-icon mt-10">
                    <div class="form-select with-padding" id="default-select" >
                        <div clas="gender_alert"></div>
                        <select name="gender" id="gender">
                            <?php foreach ($gender as $key => $value) { ?>
                                  <option value="<?= $key ?>" <?php if ($this->session->userdata('gender') == $key) echo "selected" ?> > <?= $value ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
              </div>
              <div class="col-12">
                <h6>Alamat</h6>
                <div class="form-group">
                    <textarea class="form-control w-100" name="address"  id="address" cols="20" rows="4" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'" placeholder = 'Alamat'><?= $this->session->userdata('address') ?></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <h6>Foto</h6>
                <div class="form-group">
                    <input type="file" name="filefoto" class="info-border circle small" id="filename1" title="Upload Foto" accept="image/*" onchange="course_img(this,'preview')">
               </div>
              </div>
              <div class="col-sm-6">
                  <img id="preview" src="<?= $this->session->userdata('image') ?>" class="rounded" alt="" width="200px"/>
              </div>
            </div>
            <!-- <div class="row_form"></div> -->
            <div class="row tabcontent hide" id="educational">
              <div class="col-sm-2">
                <h6>Tingkat</h6>
                  <!-- <select name="educational_level" id="educational_level">
                      <?php foreach ($educational_level as $key => $value) { ?>
                            <option value="<?= $key ?>" > <?= $value ?> </option>
                      <?php } ?>
                  </select> -->
                  <div class="form-select" id="default-select" >
                      <select name="educational_level" id="educational_level">
                          <?php foreach ($educational_level as $key => $value) { ?>
                                <option value="<?= $key ?>" > <?= $value ?> </option>
                          <?php } ?>
                      </select>
                  </div>
              </div>
              <div class="col-sm-1">
                <h6>Mulai</h6>
                <div class="form-group">
                  <input class="form-control" name="year_in" value="" id="year_in" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tahun Masuk'" oninput="numberOnly('year_in')" placeholder = 'Tahun Masuk' required>
                </div>
              </div>
              <div class="col-sm-1">
                <h6>Lulus</h6>
                <div class="form-group">
                  <input class="form-control" name="year_out" oninput="numberOnly('year_out')" value="" id="year_out" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tahun Lulus'" placeholder = 'Tahun Lulus' required>
                </div>
              </div>  
              <div class="col-sm-3">
                <h6>Nama Institusi</h6>
                <div class="form-group">
                  <input class="form-control" name="institution_name" value="" id="institution_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Universitas'" placeholder = 'Nama Universitas' required>
                </div>
              </div>
              <div class="col-sm-3">
                <h6>Jurusan</h6>
                <div class="form-group">
                  <input class="form-control" name="major" value="" id="major" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jurusan'" placeholder = 'Jurusan' required>
                </div>
              </div>
              <div class="col-sm-2">
                <h6>Kota/Kab.</h6>
                <div class="form-group">
                  <input class="form-control" name="city" value="" id="city" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kota/Kabupaten'" placeholder = 'Kota/Kabupaten' required>
                </div>
              </div>
            </div>
            
            <div class="form-group mt-3 pull-right">
              <button type="submit" class="button button-contactForm btn_1" id="sv_profile">Simpan Profile</button>
              <button type="button" class="button button-contactForm btn_1" id="load_profile"><i class="fa fa-spinner fa-spin"></i> Loading...</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Reset Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url().'user/update_password' ?>" method="post" class="form-contact" >
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <h6>Password Baru</h6>
                <input class="form-control" name="new_password" id="password_confirm_member" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Konfirmasi Password'" placeholder = 'Konfirmasi Password' required>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <h6>Konfirmasi Password Baru</h6>
                <input class="form-control" name="new_password_confirm" id="password_confirm_member_baru" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Konfirmasi Password Baru'" placeholder = 'Konfirmasi Password Baru' required>
                <small class='password_alert_new'></small>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
          <button type="submit" class="genric-btn info circle disable" id="sv_news_password">Simpan Password</button>
      </div>
        </form>
    </div>
  </div>
</div>
