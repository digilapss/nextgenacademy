
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2><?php echo $course_title ?></h2>
                            <p>Course <span>/</span> <?php echo $course_kategori ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="<?php echo $course_image ?>" width="100%" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title_top">Objectives</h4>
                        <div class="content">
                            <?php echo $course_objective ?>
                            
                            
                        </div>

                        <h4 class="title">Eligibility</h4>
                        <div class="content">

                            <?php echo $course_eligibility ?>
                           
                        </div>

                        <h4 class="title">Course Outline</h4>
                        <div class="content">

                            <!-- <?php echo $course_eligibility ?> -->

                            <!-- <ul class="course_list">
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>Introduction Lesson</p>
                                    <a class="btn_2 text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>Basics of HTML</p>
                                    <a class="btn_2 text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>Getting Know about HTML</p>
                                    <a class="btn_2 text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>Tags and Attributes</p>
                                    <a class="btn_2 text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>Basics of CSS</p>
                                    <a class="btn_2 text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>Getting Familiar with CSS</p>
                                    <a class="btn_2 text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>Introduction to Bootstrap</p>
                                    <a class="btn_2 text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>Responsive Design</p>
                                    <a class="btn_2 text-uppercase" href="#">View Details</a>
                                </li>
                                <li class="justify-content-between align-items-center d-flex">
                                    <p>Canvas in HTML 5</p>
                                    <a class="btn_2 text-uppercase" href="#">View Details</a>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Pemateri </p>
                                    <span class="color"><?php echo $course_name_pemateri ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Biaya </p>
                                    <span><?php echo $course_fee ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Kuota </p>
                                    <span><?php echo $course_quota ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>Schedule </p>
                                    <!-- <span><?php echo $course_start_time.' Sampai '.$course_finish_time ?></span> -->
                                    <span>
                                        <?php 
                                        $start_course = new DateTime($course_start_time);
                                        $finish_course = new DateTime($course_finish_time);
                                        echo $start_course->format('h:i A').' - '.$finish_course->format('h:i A');
                                        
                                        ?>
                                    </span>
                                </a>
                            </li>

                        </ul>

                    
                        <?php  
                        if($member_apply > 0){

                            echo '<a href="#" class="genric-btn d-block disable circle">Registered</a>';

                        } else {
                            
                            echo '<a href="'.base_url().'course/apply_course_wa/'.$course_index_course.'" class="btn_1 d-block">Apply</a>' ;
                        }
                        ?>
                    </div>

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