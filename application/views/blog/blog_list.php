
    
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Blog</h2>
                            <p>Home<span>/</span>Blog</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- breadcrumb start-->
    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        <?php foreach($all_blog->result() as $row_blog ) {  ?>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <a href="<?= $this->BlogModel->get_blog_link($row_blog->create_time, $row_blog->blog_id, $row_blog->title) ?>">
                                    <img class="card-img rounded-0" src="<?= $this->Validator->image_validator('asset/img/blog/',$row_blog->image, 'default.png') ?>" alt="">
                                </a>
                                <a class="blog_item_date">
                                    <h3><?= $this->Converter->get_date($row_blog->create_time); ?></h3>
                                    <p><?= $this->Converter->get_month_string($row_blog->create_time) ?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block"  href="<?= $this->BlogModel->get_blog_link($row_blog->create_time, $row_blog->blog_id, $row_blog->title) ?>">
                                    <h2><?= $row_blog->title ?></h2>
                                </a>
                                <p>
                                    <?= $row_blog->overview ?> <br> 
                                    <a class="d-inline-block"  href="<?= $this->BlogModel->get_blog_link($row_blog->create_time, $row_blog->blog_id, $row_blog->title) ?>">
                                        <i>Baca Selengkapnya >></i>
                                    </a>
                                </p>
                                <ul class="blog-info-link">
                                    <li><a href="<?= base_url() ?>blog/category/<?= $row_blog->category_name ?>"><i class="fa fa-bookmark"></i> <?= $row_blog->category_name ?></a></li>
                                    <li><a href="#"><i class="fa fa-calendar"></i><?= $this->Converter->get_full_date($row_blog->create_time) ?></a></li>
                                </ul>
                            </div>
                        </article>

                        <?php } ?>


                        <nav class="blog-pagination justify-content-center d-flex">
                            <?= $links ?>
                        </nav>

                    </div>
                </div>

                <?php 
                    $this->load->view('blog/blog_sidebar');
                ?>

            </div>
        </div>
    </section>