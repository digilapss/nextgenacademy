



    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <!-- <h5>Every child yearns to learn</h5> -->
                            <h1>Madiun 
                                Next Generation
                            </h1>
                            <p>Madiun NextGen ( Next generation ) adalah Platform smart city kolaboratif untuk pendidikan formal yang fokus pada pendidikan keterampilan praktis, Kewirausahaan dan pengembangan diri di Madiun Raya</p>
                            <a href="#" class="btn_2" style="background-color:#FF8100;border-color:#FF8100;color:white">View Course</a>
                            <a href="#feature_part" class="btn_2">Get Started </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <div id="feature_part"></div>
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Fitur <br> Unggulan</h2>
                        <p>Kami berkomitmen untuk memberikan layanan terbaik dan kemudahan bagi seluruh pengguna</p>
                        <!-- <a href="#" class="btn_1">Read More</a> -->
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Harga & Akses Terjangkau</h4>
                            <p>Madiun Next gen memiliki layanan dengan harga yang kompetitif bahkan gratis untuk pelatihan atau diskusi online, pengguna dapat mengikuti kapanpun dan dimanapun </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Pemateri yang Berkualitas</h4>
                            <p>Pemateri berasal dari praktisi atau yang ahli di bidang masing - masing. kita juga mengusung konsep kolaborasi dengan berbagai stakeholder yang saling berkaitan  </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Materi Bervariasi & Terakurasi</h4>
                            <p>Madiun NextGen dengan fokus pendidikan non formal, pengembang diri dan kewirausahaan akan terus memberikan materi yang inovatif dan kuratif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->


        <!--::review_part start::-->
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

                <?php foreach($list_course->result() as $row_list_course){ ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_special_cource">
                            <a href="<?php echo $row_list_course->objective ?>">
                                <img src="<?php echo $row_list_course->image_course ?>" class="special_img" alt="<?php echo $row_list_course->title ?>">
                                <div class="special_cource_text">
                                    <a href="<?php echo $row_list_course->index_course ?>" class="btn_4"><?php echo $row_list_course->kategori ?></a>
                                    <h4>$130.00</h4>
                                    <a href="<?php echo $row_list_course->index_course ?>"><h3><?php echo $row_list_course->title ?></h3></a>
                                    <p><?php echo $row_list_course->course_preview ?></p>
                                    <div class="author_info">
                                        <div class="author_img">
                                            <img src="<?php echo base_url() ?>asset/img/author/author_1.png" alt="">
                                            <div class="author_info_text">
                                                <p>Conduct by:</p>
                                                <h5><a href="#">James Well</a></h5>
                                            </div>
                                        </div>
                                        <div class="author_rating">
                                            <div class="rating">
                                                <a href="#"><img src="<?php echo base_url() ?>asset/img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="<?php echo base_url() ?>asset/img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="<?php echo base_url() ?>asset/img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="<?php echo base_url() ?>asset/img/icon/color_star.svg" alt=""></a>
                                                <a href="#"><img src="<?php echo base_url() ?>asset/img/icon/star.svg" alt=""></a>
                                            </div>
                                            <p>3.8 Ratings</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                <?php } ?>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="<?php echo base_url() ?>asset/img/learning_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>Tentang Kami</h5>
                        <h2>Smart Education for Smart People</h2>
                        <p>
                            Konsep smart Education yang kami usung memainkan peran penting dalam 
                            mengingkatkan serta mempersiapkan sumber daya manusia ( SDM ) 
                            masa kini untuk hidup di dunia yang semakin kompleks dan semakin berorientasi pada teknologi masa depan.
                        </p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span>Kolaborasi  dan Perpaduan Stakeholder terkait, baik dari pemerintah, praktisi, komunitas dan juga masyarakat. </li>
                            <li><span class="ti-ruler-pencil"></span>Inovasi materi dalam menjawab permasalahan dan mendukung kesuksesan diri dan karir</li>
                        </ul>
                        <a href="#" class="btn_1">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->


    <!--::partnership start::-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl">
                <div class="section_tittle text-center">
                    <p>Mitra & Kerjasama</p>
                    <h2>Ingin menjadi mitra atau kerjasama?</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="#" class="btn_1">Ajukan Penawaran Sekarang</a>
        </div>
        <div class="row" style="margin-bottom: 100px"></div>
    </div>
