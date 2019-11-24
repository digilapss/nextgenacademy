
    
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
                                <img class="card-img rounded-0" src="<?= $row_blog->image_blog ?>" alt="">
                                <a href="<?= base_url().'blog/page/'.preg_replace("/[^a-zA-Z0-9]/", "", $row_blog->create_time).'/'.$row_blog->blog_id.'/'.preg_replace("/[^A-Za-z0-9-]/", "", $row_blog->title) ;  ?>" class="blog_item_date">
                                    <h3><?= $row_blog->create_time ?></h3>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block"   href="<?= base_url().'blog/page/'.preg_replace("/[^a-zA-Z0-9]/", "", $row_blog->create_time).'/'.$row_blog->blog_id.'/'.preg_replace("/[^A-Za-z0-9-]/", "", $row_blog->title) ;  ?>">
                                    <h2><?= $row_blog->title ?></h2>
                                </a>
                                <p>That dominion stars lights dominion divide years for fourth have don't stars is that
                                    he earth it first without heaven in place seed it second morning saying.</p>
                                <ul class="blog-info-link">
                                    <li><a href="<?= base_url() ?>blog/category/<?= $row_blog->category_name ?>"><i class="far fa-user"></i> <?= $row_blog->category_name ?></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> <?= $row_blog->total_comment ?> Comment</a></li>
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