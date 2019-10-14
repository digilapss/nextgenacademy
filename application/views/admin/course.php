
	<!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <p>Admin Access</p>
							<h2>Course</h2>
                            <button type="button" class="genric-btn info-border circle medium" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-plus"></i> Add Course
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="special_cource padding_top">
        <div class="container">
            
            <div class="row">
                
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <a href="">
                            <img src="<?php echo base_url() ?>asset/img/special_cource_1.png" class="special_img" alt="">
                            </a><div class="special_cource_text"><a href="">
                                </a><a href="course-details.html" class="btn_4">Web Development</a>
                                <h4>$130.00</h4>
                                <a href="course-details.html"><h3>Web Development</h3></a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <div class="author_info">
                                    <div class="author_img">
                                        <img src="img/author/author_1.png" alt="">
                                        <div class="author_info_text">
                                            <p>Conduct by:</p>
                                            <h5><a href="#">James Well</a></h5>
                                        </div>
                                    </div>
                                    <div class="author_rating">
                                        <div class="rating">
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                            <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                        </div>
                                        <p>3.8 Ratings</p>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="<?php echo base_url() ?>asset/img/special_cource_2.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">design</a>
                            <h4>$160.00</h4>
                            <a href="course-details.html"> <h3>Web UX/UI Design </h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_2.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="<?php echo base_url() ?>asset/img/special_cource_3.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Wordpress</a>
                            <h4>$140.00</h4>
                            <a href="course-details.html">  <h3>Wordpress Development</h3> </a> 
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_3.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    

            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                                <h3 class="text-heading">Create Course</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <form action="<?php echo base_url() ?>admin/course" method="post" enctype="multipart/form-data" onsubmit="return cek_form(this)" >

                                <div class="mt-10">
                                    <input type="text" name="title" placeholder="Judul" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Judul'" required="" class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="kategori" placeholder="Kategori" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kategori'" required="" class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="eligibility" placeholder="Eligibility" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Eligibility'" required="" class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="outline" placeholder="Outline" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Outline'" required="" class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="preview" placeholder="Preview" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Preview'" required="" class="single-input">
                                </div>
                                <div class="mt-10">
                                    <textarea name="objective" class="single-textarea" placeholder="Deskripsi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Deskripsi'" required=""></textarea>
                                </div>
                                <!-- <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                    <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required="" class="single-input">
                                </div> -->
                                <br >
                                <h3 class="text-heading">Schedule</h3>
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                    <div class="form-select" id="default-select" >
                                        <!-- <select style="display: none;">
                                            <option value="1">Dhaka</option>
                                            <option value="1">Dilli</option>
                                            <option value="1">Newyork</option>
                                            <option value="1">Islamabad</option>
                                        </select> -->
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Pemateri </span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">City</li>
                                                <li data-value="1" class="option">Dhaka</li>
                                                <li data-value="1" class="option">Dilli</li>
                                                <li data-value="1" class="option">Newyork</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="mt-10">
                                    <input type="text" name="tempat" placeholder="Tempat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tempat'" required="" class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="number" name="harga" placeholder="Harga" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Harga'" required="" class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="quota" placeholder="Quota" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Quota'" required="" class="single-input">
                                </div>
                                <div class="mt-10">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal"  required="" class="single-input">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="jam" placeholder="Jam" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jam'" required="" class="single-input">
                                </div>
                                <div class="mt-10">
                                    <label for="">Batas Pendaftaran</label>
                                    <input type="date" name="schedule"  required="" class="single-input">
                                </div>

                                <div class=" mt-10">
                                    <label>Type</label>
                                    <br />

                                    <input name="online" type="radio" id="primary-radio" value="Online" >  Online<br />
                                    <input name="online" type="radio" id="primary-radio" value="Online" checked="cheked">  Offline
                                    
                                </div>
                                
                                <div class="mt-10">
                                    <label for="">Image Course</label><br />
                                    <input type="file" name="img">
                                </div>


                                <!-- <div class="mt-10">
                                    <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
                                </div> -->

                                <!-- For Gradient Border Use -->
                                <!-- <div class="mt-10">
                                            <div class="primary-input">
                                                <input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
                                                <label for="primary-input"></label>
                                            </div>
                                        </div> -->
                                <!-- <div class="mt-10">
                                    <input type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required="" class="single-input-primary">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="first_name" placeholder="Accent color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required="" class="single-input-accent">
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="first_name" placeholder="Secondary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'" required="" class="single-input-secondary">
                                </div> -->
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="genric-btn info-border circle medium" id="sv_course">
                                <i class="fa fa-save"></i> Save 
                            </button>
                            <button type="button" class="genric-btn danger-border circle medium " id="load_course" >
                                <i class="fa fa-spinner fa-spin"></i> Loading 
                            </button>
                        </div>

                    </div>
                </div>
            </div>


