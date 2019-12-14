<!--::special mentor start::-->
<div id="special_mentor_part"></div>
<section class="special_cource padding_top">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-5">
            <div class="section_tittle text-center">
                <p>Mentor Populer</p>
                <h2>Rekomendasi Terbaik Buat Kamu</h2>
            </div>
        </div>
    </div>

    <div class="row">

        <?php foreach($mentor as $row_mentor){ ?>
            <div class="col-sm-6 col-lg-4">
                <div class="single_special_cource">
                    <a href="mentor/detail/<?= $row_mentor['account_id'] ?>">
                        <div style="height: 350px; overflow: hidden;">
                            <img src="<?= $this->Validator->image_validator('asset/img/user/', $row_mentor['image'], 'default.png') ?>" class="special_img" width="100%" alt="<?= $row_mentor['name'] ?>">
                        </div>
                        <div class="special_cource_text">
                            <a href="mentor/detail/<?= $row_mentor['account_id'] ?>" class="btn_4"><?= $row_mentor['educational']->major ?></a>
                            <h4><?= $this->Converter->rupiah($row_mentor->fee); ?></h4>
                            <a href="mentor/detail/<?= $row_mentor['account_id'] ?>"><h3><?= $row_mentor['name'] ?></h3></a>
                            <p><?= $this->Converter->text_limit($row_mentor['about_me'], 80, '...') ?></p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="<?= base_url() ?>asset/img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <h5><?= $row_mentor['educational']->institution_name?></h5>
                                        <p>Lokasi: <?= $row_mentor['educational']->city ?></p>
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
</div>
</section>
<!--::special mentor end::-->