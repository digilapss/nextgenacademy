
            <div class="col-lg-4">

            
               <div class="blog_right_sidebar">

                  <!-- <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Search</button>
                     </form>
                  </aside> -->

                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Kategori</h4>
                     <ul class="list cat-list">
                        <?php 
                           foreach($category_blog->result() as $row_category ){
                        ?>

                        <li>
                           <a href="<?= base_url() ?>blog/category/<?= $row_category->category_name ?>" class="d-flex">
                              <p><?= $row_category->category_name ?></p>
                              <p>( <?= $row_category->total_content ?> )</p>
                           </a>
                        </li>

                        <?php } ?>
                       
                     </ul>
                  </aside>

                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Artikel Terbaru</h3>
                           
                     <?php foreach($recent_post as $row_recent_post ){ ?>

                     <div class="media post_item">
                        <img src="<?= $this->Validator->image_validator('asset/img/blog/',$row_recent_post->image, 'default.png') ?>" alt="post" width="70px">
                        <div class="media-body">
                           <a href="<?= $this->BlogModel->get_blog_link($row_recent_post->create_time, $row_recent_post->blog_id, $row_recent_post->title)  ?>">
                              <h3><?= $row_recent_post->title ?></h3>
                           </a>
                           <p><?= $row_recent_post->create_time ?></p>
                        </div>
                     </div>
                    
                     <?php } ?>
                  </aside>
                  <!-- <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">Tag Clouds</h4>
                     <ul class="list">
                        <li>
                           <a href="#">project</a>
                        </li>
                        <li>
                           <a href="#">love</a>
                        </li>
                        <li>
                           <a href="#">technology</a>
                        </li>
                        <li>
                           <a href="#">travel</a>
                        </li>
                        <li>
                           <a href="#">restaurant</a>
                        </li>
                        <li>
                           <a href="#">life style</a>
                        </li>
                        <li>
                           <a href="#">design</a>
                        </li>
                        <li>
                           <a href="#">illustration</a>
                        </li>
                     </ul>
                  </aside> -->
                  <!-- <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_5.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_6.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_7.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_8.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_9.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="img/post/post_10.png" alt="">
                           </a>
                        </li>
                     </ul>
                  </aside> -->
                  <!-- <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Newsletter</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Subscribe</button>
                     </form>
                  </aside> -->
               </div>
            </div>
