<!--::special mentor start::-->
<div id="special_mentor_part"></div>
<section class="special_cource padding_top" style="padding-bottom:40px">

</section>
<!--::special mentor end::-->


    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="<?= $this->Validator->image_validator('asset/img/user/', $profile_mentor->image, 'default.png') ?>" width="100%" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">About Me</h4>
                        <div class="content">

                            <?= $profile_mentor->about_me ?>

                        </div>

                        <h4 class="title">Riwayat Sekolah</h4>
                        <div class="content">

                            
                        <ul class="course_list">
                            <?

                                $edu_level = $this->Constant->educational_level();

                                foreach ($educational_mentor->result() as  $row_educational) {
                                # code...
                                
                            ?>

                            <li class="justify-content-between align-items-center d-flex shadow-sm p-3 mb-5 bg-white rounded">
                                <p>

                                    <?= $row_educational->major ?>  ( <?= $edu_level[$row_educational->level] ?> ) : <?= $row_educational->year_in ?> - <?= $row_educational->year_out ?>

                                </p>
                                <a class="btn_2 text-uppercase" href="#"> <?= $row_educational->institution_name ?></a>
                            </li>


                            <? } ?>

                        </ul>
                        
                        </div>

                        <h4 class="title">Prestasi</h4>

                        <div class="content">

                            <!-- Speaker -->

                            <ul class="course_list">

                            <?
                                foreach ($achievement_mentor->result() as $row_achievement) {
                                    # code...
                            ?>

                                <li class=" shadow p-3 mb-5 bg-white rounded">
                                    <img src="<?= $this->Validator->image_validator('asset/img/user/', $row_achievement->image, 'default.png') ?>" width="100%" alt="">
                                    <h2 class="pt-3 mt-3" ><?= $row_achievement->achievement_name ?></h2>
                                    <small>Prestasi pada tahun <?= $row_achievement->year ?></small>
                                    <p class="pt-1 mb-4"><?= $row_achievement->description ?></p>
                                    <a class="btn_2 text-uppercase" href="#"><?= $edu_level[$row_achievement->level] ?> </a>
                                </li>

                            <? } ?>

                            </ul>

                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                    
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Mentor </p>
                                    <span class="color"><?= $profile_mentor->name ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Tanggal lahir </p>
                                    <span class="color"><?= $profile_mentor->born_date ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Jenis Kelamin </p>
                                    <span class="color">
                                        <?= $profile_mentor->gender == 1 ? 'Laki - laki' : '' ?>
                                        <?= $profile_mentor->gender == 2 ? 'Laki - laki' : '' ?>
                                    </span>
                                </a>
                            </li>
                            
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Phone Number </p>
                                    <span class="color"><?= $profile_mentor->phone_number ?></span>
                                </a>
                            </li>

                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Instagram ID </p>
                                    <span class="color"><?= $profile_mentor->instagram_id ?></span>
                                </a>
                            </li>

                        </ul>

                    
                        <a href="#" class="btn_1 d-block">Apply</a>                    
                        
                    </div>

                    
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->