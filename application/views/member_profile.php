

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Profile</h2>
                            <!-- <p> </p> -->
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
        <div class="col-12">
          <h2 class="contact-title">Profile</h2>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon">
                <img src="<?= $this->session->userdata('image') ?>" width="70px" class="rounded" alt="">
            </span>
            <div class="media-body">
              <h3><?= $this->session->userdata('name') ?></h3>
              <p><?php if($this->session->userdata('role') == 2){ echo 'Member'; } else { echo 'Admin'; } ?></p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><?= $this->session->userdata('email') ?></h3>
              <!-- <p>Send us your query anytime!</p> -->
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><?= $this->session->userdata('phone_number') ?></h3>
              <!-- <p></p> -->
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Alamat </h3>
              <p><?= $this->session->userdata('address') ?></p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-user"></i></span>
            <div class="media-body">
              <h3><? if($this->session->userdata('gender') == 0 ){ echo 'Perempuan'; } else { echo 'Laki - laki'; } ?></h3>
              <!-- <p></p> -->
            </div>
          </div>
        </div>
        <div class="col-lg-8">

        <?= $this->session->flashdata('signup_alert') ?>

          <form class="form-contact"  action="<?= base_url().'user/profile_update' ?>" method="post"  enctype="multipart/form-data" onsubmit="return cek_form_profile(this)" >
            <div class="row">
              <!-- <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pesan'" placeholder = 'Pesan'></textarea>
                </div>
              </div> -->
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" value="<?= $this->session->userdata('name') ?>" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nama Lengkap'" placeholder = 'Masukkan Nama Lengkap' required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" value="<?= $this->session->userdata('email') ?>" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Alamat Email'" placeholder = 'Masukkan Alamat Email' required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="instagram_id" value="<?= $this->session->userdata('instagram_id') ?>" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ID Instagram'" placeholder = 'ID Instagram' required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="phone_number" value="<?= $this->session->userdata('phone_number') ?>" id="subject" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nomor Telephone'" placeholder = 'Masukkan Nomor Telephone' required>
                </div>
              </div>
              <div class="col-sm-6">
                <label for="" class="text-primary">Tanggal Lahir</label>
                <div class="form-group">
                  <input class="form-control" value="<?= $this->session->userdata('born_date'); ?>" name="birthday" id="birthday" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Lahir'" placeholder = 'Tanggal Lahir' required>
                </div>
              </div>

              <div class="col-sm-6">
                <label for="" class="text-primary">Jenis Kelamin</label>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <div class="form-select" id="default-select" >
                        <div clas="gender_alert"></div>
                        <select name="gender" id="gender">
                            <?php 

                                if($this->session->userdata('gender') == 1){
                                    echo ' 
                                    <option value="1" selected> Laki - laki </option>
                                    <option value="2"  > Perempuan </option>    ';
                                } else if ($this->session->userdata('gender') == 2){ 
                                    echo ' 
                                    <option value="1" > Laki - laki </option>
                                    <option value="2"  selected > Perempuan </option> ';

                                } else {
                                    echo ' 
                                    <option value="0" > - Pilih Gender - </option> 
                                    <option value="1" > Laki - laki </option> 
                                    <option value="2" > Perempuan </option>' ;
                                }
                            ?>
                        </select>
                        <!-- <div class="nice-select" tabindex="0">
                            <span class="current" data-value="1">Pemateri </span>
                            <ul class="list">
                                <li data-value="1" class="option selected">City</li>
                                <li data-value="1" class="option">Dhaka</li>
                                <li data-value="1" class="option">Dilli</li>
                                <li data-value="1" class="option">Newyork</li>
                            </ul>
                        </div> -->
                    </div>
                </div>
              </div>
              <div class="col-12">
                <label for="" class="text-primary">Alamat</label>
                <div class="form-group">
                    <textarea class="form-control w-100" name="address"  id="address" cols="20" rows="4" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'" placeholder = 'Alamat'><?= $this->session->userdata('address') ?></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <label for="" class="text-primary">Foto</label>
                <div class="form-group">
                    <input type="file" name="filefoto" class="info-border circle small" id="filename1" title="Upload Foto" accept="image/*" onchange="course_img(this,'preview')">
               </div>
              </div>
              <div class="col-sm-6">
                  <img id="preview" src="<?= $this->session->userdata('image') ?>" class="rounded" alt="" width="200px"/>
              </div>

            </div>
            <div class="form-group mt-3 pull-right">
              <button type="submit" class="genric-btn info circle" id="sv_profile">Simpan Profile</button>
              <button type="button" class="genric-btn warning circle" id="load_profile"><i class="fa fa-spinner fa-spin"></i> Loading...</button>
            </div>
            <div class="form-group mt-3 pull-left">
            
                <a href="#" class="genric-btn danger circle"  data-toggle="modal" data-target="#exampleModalCenter"> <i class="fa fa-lock"></i> Update Password</a>
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
        <form action="" class="form-contact" >
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="" class="text-primary">Password Baru</label>
                <input class="form-control" name="new_password" id="password_confirm_member" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Konfirmasi Password'" placeholder = 'Konfirmasi Password' required>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label for="" class="text-primary">Konfirmasi Password Baru</label>
                <input class="form-control" name="new_password_confirm" id="password_confirm_member_baru" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Konfirmasi Password Baru'" placeholder = 'Konfirmasi Password Baru' required>
                <small class='password_alert_new'></small>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
          <button type="submit" class="genric-btn info circle disable" id="sv_news_password">Simpan Password</button>
      </div>
    </div>
  </div>
</div>
