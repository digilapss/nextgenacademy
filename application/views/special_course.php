<!--::special course start::-->
<div id="special_course_part"></div>
<section class="special_cource padding_top">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-5">
            <div class="section_tittle text-center">
                <p>popular courses</p>
                <h2>Special Courses</h2>
            </div>
        </div>
    </div>

    <div class="row">

        <?php foreach($list_course->result() as $row_list_course){

            // var_dump($row_list_course);
         ?>
            <div class="col-sm-6 col-lg-4">
                <div class="single_special_cource">
                    <a href="course/detail/<?= $row_list_course->index_course ?>">
                        <img src="<?= $row_list_course->image_course ?>" class="special_img" alt="<?= $row_list_course->title ?>">
                        <div class="special_cource_text">
                            <a href="course/detail/<?= $row_list_course->index_course ?>" class="btn_4"><?= $row_list_course->course_category_name ?></a>
                            <h4><?= $this->Converter->rupiah($row_list_course->fee); ?></h4>
                            <a href="course/detail/<?= $row_list_course->index_course ?>"><h3><?= $row_list_course->title ?></h3></a>
                            <p><?= $row_list_course->preview ?></p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="<?= base_url() ?>asset/img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#"><?= $row_list_course->name?></a></h5>
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
<!--::special course end::-->