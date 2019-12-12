<!--::special mentor start::-->
<div id="special_mentor_part"></div>
<section class="special_cource padding_top" style="padding-bottom:40px">
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-xl-5">
            <div class="section_tittle text-center">
                <p>Pelatihan Populer</p>
                <h2>Spesial Buat Kamu</h2>
            </div>
        </div>
    </div>

    <div class="row" style="padding-bottom:40px">

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