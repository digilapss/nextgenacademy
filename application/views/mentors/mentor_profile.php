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
                        <img class="img-fluid" src="<?= $this->Validator->image_validator('asset/img/user/'. $row_mentor['image'], 'default.png') ?>" width="100%" alt="">
                    </div>
                    <div class="content_wrapper">
                      
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                    <?
                        $edu = $this->Constant->educational_level();
                    ?>
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
                                    <span class="color"><?= $profile_mentor->gender ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Pendidikan </p>
                                    <span class="color"> <?= $edu[$profile_mentor->level] ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Institution  </p>
                                    <span class="color"> <?= $profile_mentor->institution_name ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Major  </p>
                                    <span class="color"> <?= $profile_mentor->major ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Tahun Pendidikan  </p>
                                    <span class="color"> <?= $profile_mentor->year_in ?> - <?= $profile_mentor->year_out ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Kota </p>
                                    <span class="color"> <?= $profile_mentor->city ?></span>
                                </a>
                            </li>


                        </ul>

                    
                        <a href="https://staging.nextgenacademy.id/course/apply_course_wa/marketing-foodpreneur-in-digital-era" class="btn_1 d-block">Apply</a>                    </div>

                    <!-- <h4 class="title">Reviews</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                                <h6 class="mb-15">Provide Your Rating</h6>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="rating">
                                            <input hidden="true" name="course_rating1">
                                            <a class="course-rating" course_category="1" star="1"><img id="course-rating1-1" src="img/icon/star.svg" alt=""></a>
                                            <a class="course-rating" course_category="1" star="2"><img id="course-rating1-2" src="img/icon/star.svg" alt=""></a>
                                            <a class="course-rating" course_category="1" star="3"><img id="course-rating1-3" src="img/icon/star.svg" alt=""></a>
                                            <a class="course-rating" course_category="1" star="4"><img id="course-rating1-4" src="img/icon/star.svg" alt=""></a>
                                            <a class="course-rating" course_category="1" star="5"><img id="course-rating1-5" src="img/icon/star.svg" alt=""></a>
                                        </div>
                                    <span id="rating-description1">N/A</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Puncuality</span>
                                    <div class="rating">
                                            <a class="course-rating" course_category="2" star="1"><img id="course-rating2-1" src="img/icon/star.svg" alt=""></a>
                                            <a class="course-rating" course_category="2" star="2"><img id="course-rating2-2" src="img/icon/star.svg" alt=""></a>
                                            <a class="course-rating" course_category="2" star="3"><img id="course-rating2-3" src="img/icon/star.svg" alt=""></a>
                                            <a class="course-rating" course_category="2" star="4"><img id="course-rating2-4" src="img/icon/star.svg" alt=""></a>
                                            <a class="course-rating" course_category="2" star="5"><img id="course-rating2-5" src="img/icon/star.svg" alt=""></a>
                                        </div>
                                    <span id="rating-description2">N/A</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="rating">
                                            <a class="course-rating" course_category="3" star="1"><img id="course-rating3-1" src="img/icon/star.svg" alt=""></a>
                                            <a class="course-rating" course_category="3" star="2"><img id="course-rating3-2" src="img/icon/star.svg" alt=""></a>
                                            <a class="course-rating" course_category="3" star="3"><img id="course-rating3-3" src="img/icon/star.svg" alt=""></a>
                                            <a class="course-rating" course_category="3" star="4"><img id="course-rating3-4" src="img/icon/star.svg" alt=""></a>
                                            <a class="course-rating" course_category="3" star="5"><img id="course-rating3-5" src="img/icon/star.svg" alt=""></a>
                                        </div>
                                    <span id="rating-description3">N/A</span>
                                </div>

                            </div>
                        </div>
                        <div class="feedeback">
                            <h6>Your Feedback</h6>
                            <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                            <div class="mt-10 text-right">
                                <a href="#" class="btn_1">Read more</a>
                            </div>
                        </div>
                        <div class="comments-area mb-30">
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/cource/cource_1.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Emilly Blunt</a>
                                            </h5>
                                            <div class="rating">
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                            </div>
                                            <p class="comment">
                                                Blessed made of meat doesn't lights doesn't was dominion and sea earth
                                                form
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/cource/cource_2.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Elsie Cunningham</a>
                                            </h5>
                                            <div class="rating">
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                                <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                            </div>
                                            <p class="comment">
                                                Blessed made of meat doesn't lights doesn't was dominion and sea earth
                                                form
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/cource/cource_3.png" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Maria Luna</a>
                                            </h5>
                                            <div class="rating">
                                                <a href=""><img src="img/icon/star.svg" alt=""></a>
                                                <a href=""><img src="img/icon/star.svg" alt=""></a>
                                                <a href=""><img src="img/icon/star.svg" alt=""></a>
                                                <a href=""><img src="img/icon/star.svg" alt=""></a>
                                                <a href=""><img src="img/icon/star.svg" alt=""></a>
                                            </div>
                                            <p class="comment">
                                                Blessed made of meat doesn't lights doesn't was dominion and sea earth
                                                form
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->