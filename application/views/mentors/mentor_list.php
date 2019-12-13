<!--::special mentor start::-->
<div id="special_mentor_part"></div>
<section class="special_cource padding_top" style="padding-bottom:40px">
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-xl-5">
            <div class="section_tittle text-center">
                <p>Mentor Populer</p>
                <h2>Mentor</h2>
            </div>
        </div>
    </div>

    <div class="pos-f-t">
        <nav class="navbar navbar-dark bg-white">
            <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
             <i class="fa fa-filter"></i> <small>Filter</small>
            </button>

            <form class="form-inline my-2 my-lg-0">
                
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Mentor spesialis" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </nav>
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="p-4"  style="background-color:white;">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-select">
                            <label for="" class="">Jenis Kelamin</label>
                            <br>
                            <select class="" >
                                <option value="0">- Pilih -</option>
                                <option value="1">Laki - laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-select">
                            <label for="" class="">Lokasi Kuliah</label>
                            <br>
                            <select class="" >
                                <option value="0">- Pilih -</option>
                                <option value="jakarta">Jakarta</option>
                                <option value="surabaya">Surabaya</option>
                                <option value="bandung">Bandung</option>
                                <option value="semarang">Semarang</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="form-select">
                            <label for="" class="">Nama Institusi</label>
                            <br>
                            <select class="" >
                                <option value="0">- Pilih -</option>
                                <? 
                                foreach ($educational->result() as $row_educational) {
                                    # code...
                                
                                ?>
                                <option value="<?= $row_educational->educational_id ?>"><?= $row_educational->institution_name ?></option>
                                <? } ?>
                            </select>
                        </div>
                        
                    </div>
                    <div class="col-lg-3">
                       <button type="button" class="button button-contactForm btn_1 float-right mt-30" id="sv_profile">Filter</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-bottom:40px;padding-top:40px">

        <?php foreach($mentor->result_array() as $row_mentor){ ?>
            <div class="col-sm-6 col-lg-4">
                <div class="single_special_cource">
                    <a href="<?= base_url() ?>mentor/detail/<?= $row_mentor['educational_id'] ?>">
                        <img src="<?= $this->Validator->image_validator('asset/img/user/'. $row_mentor['image'], 'default.png') ?>" class="special_img" alt="<?= $row_mentor['name'] ?>" width="100%">
                        <div class="special_cource_text">
                            <a href="<?= base_url() ?>mentor/detail/<?= $row_mentor['educational_id'] ?>" class="btn_4"><?= $row_mentor['major'] ?></a>
                            <h4><?= $this->Converter->rupiah($row_mentor['fee']); ?></h4>
                            <a href="mentor/detail/<?= $row_mentor['account_id'] ?>"><h3><?= $row_mentor['name'] ?></h3></a>
                            <p><?= $row_mentor['about_me'] ?></p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="<?= base_url() ?>asset/img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <h5><?= $row_mentor['institution_name']?></h5>
                                        <p>Lokasi: <?= $row_mentor['city'] ?></p>
                                    </div>
                                </div>
                                <!-- <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="<?= base_url() ?>asset/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?= base_url() ?>asset/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?= base_url() ?>asset/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?= base_url() ?>asset/img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="<?= base_url() ?>asset/img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div> -->
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>

    </div>
    <?= $links ?>
</div>
</section>
<!--::special mentor end::-->