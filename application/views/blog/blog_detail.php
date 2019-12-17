
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Blog</h2>
                            <p>Home<span>-</span>Blog </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?= $this->Validator->image_validator('asset/img/blog/',$image_blog, 'default.png') ?>" alt="<?= $title ?>">
                  </div>
                  <div class="blog_details">
                     <h2><?= $title ?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-bookmark"></i><?= $category_name ?></a></li>
                        <li><a href="#"><i class="fa fa-calendar"></i><?= $this->Converter->get_full_date($create_time) ?></a></li>
                        <!-- <li><a href="#"><i class="fa fa-comments"></i> <?= $total_comment ?> Comments</a></li> -->
                     </ul>
                     <p>
                        <?= $description ?>
                     </p>                     
                  </div>
               </div>

               <div class="navigation-area">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                        <?php if ($prev_blog) { ?>
                        <div class="thumb">
                           <a href="<?= $this->BlogModel->get_blog_link($prev_blog->create_time, $prev_blog->blog_id, $prev_blog->title) ?>">
                              <img class="img-fluid img-blog-navigation" src="<?= $this->Validator->image_validator('asset/img/blog/',$prev_blog->image, 'default.png') ?>" alt="">
                           </a>
                        </div>
                        <div class="arrow">
                           <a href="<?= $this->BlogModel->get_blog_link($prev_blog->create_time, $prev_blog->blog_id, $prev_blog->title) ?>">
                              <span class="lnr text-white ti-arrow-left"></span>
                           </a>
                        </div>
                        <div class="detials">
                           <p>Sebelumnya</p>
                           <a href="<?= $this->BlogModel->get_blog_link($prev_blog->create_time, $prev_blog->blog_id, $prev_blog->title) ?>">
                              <h4><?= $prev_blog->title ?></h4>
                           </a>
                        </div>
                        <?php } ?>
                     </div>

                     <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                        <?php if ($next_blog) { ?>
                        <div class="detials">
                           <p>Selanjutnya</p>
                           <a href="<?= $this->BlogModel->get_blog_link($next_blog->create_time, $next_blog->blog_id, $next_blog->title) ?>">
                              <h4><?= $next_blog->title ?></h4>
                           </a>
                        </div>
                        <div class="arrow">
                           <a href="<?= $this->BlogModel->get_blog_link($next_blog->create_time, $next_blog->blog_id, $next_blog->title) ?>">
                              <span class="lnr text-white ti-arrow-right"></span>
                           </a>
                        </div>
                        <div class="thumb">
                           <a href="<?= $this->BlogModel->get_blog_link($next_blog->create_time, $next_blog->blog_id, $next_blog->title) ?>">
                              <img class="img-fluid img-blog-navigation" src="<?= $this->Validator->image_validator('asset/img/blog/',$next_blog->image, 'default.png') ?>" alt="">
                           </a>
                        </div>
                        <?php } ?>
                     </div>
                  </div>
               </div>

            </div>

            <?php 
                $this->load->view('blog/blog_sidebar');
            ?>

         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->
