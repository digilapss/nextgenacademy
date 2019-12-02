

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Blog Category</h2>
                            <!-- <p> </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
    
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Blog Category<h2>
          <?= $this->session->flashdata('alert')?>
        </div>
        <div class="col-lg-6">
        
          <table class="table" id="category-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Total Content</th>
                <th scope="col">Status</th>
                <th scope="col">Tools</th>
              </tr>
            </thead>
            <tbody>
              <? $i = 1;
                foreach($all_category->result() as $row_category ){

                
              ?>
              <tr>
                <th scope="row"><?= $i++ ?></th>
                <td><?= $row_category->category_name ?></td>
                <td><?= $row_category->total_content ?></td>
                <td>
                  <?= $row_category->status == 1 ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-warning">Non Active</span>' ?>
                </td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-primary btn-sm" 
                      type="button" data-toggle="modal" data-target="#staticBackdrop"
                      id="btn-edit-category"
                      data-id="<?= $row_category->blog_category_id ?>"
                      data-category="<?= $row_category->category_name ?>"
                      data-status="<?= $row_category->status ?>"
                    >
                      <i class="fa fa-pencil"></i>
                    </button>
                    <button class="btn btn-outline-danger btn-sm">
                      <i class="fa fa-trash-o"></i>
                    </button>
                  </div>
                </td>
              </tr>
                <? } ?>
            </tbody>
          </table>
        </div>
        <!-- Button trigger modal -->



        <div class="col-lg-6">
          <?= $this->session->flashdata('signup_alert') ?>
          <form class="form-contact"  action="<?= base_url().'blog/add_category' ?>" method="post"  >
            <div class="row">

              <div class="col-sm-6">
                <h6>Category</h6>
                <div class="form-group">
                  <input class="form-control" name="category" value="" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Category'" placeholder = 'Masukkan Category' required>
                </div>
              </div>

              <div class="col-sm-6">
                <h6>Status</h6>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="fa fa-link" aria-hidden="true"></i></div>
                    <div class="form-select" id="default-select" >
                        <div clas="gender_alert"></div>
                        <select name="status" id="status">
                            <option value="1">Aktif</option>
                            <option value="2">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
              </div>

            </div>
            <div class="form-group mt-3 pull-right">
              <button type="submit" class="button button-contactForm btn_1" id="sv_profile">Simpan Category</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit data Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="form-edit-category" method="post" >
                
                  <div class="row">

                    <div class="col-sm-6">
                      <h6>Category</h6>
                      <div class="form-group">
                        <input class="form-control" name="category" value="" id="category_edit" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Category'" placeholder = 'Masukkan Category' required>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <h6>Status</h6>
                      <div class="form-group">
                          <select name="status" id="status_category_edit" class="form-control status_category_edit">
                              <option value="1">Aktif</option>
                              <option value="2">Tidak Aktif</option>
                          </select>
                      </div>
                    </div>

                  </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm"> Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>
<script>


$(document).ready(function(){
  $('#category-table').on('click', '#btn-edit-category', function(){
      var id_edit = $(this).data('id')
      var category_edit = $(this).data('category')
      var status_edit = $(this).data('status')
      
      // console.log(site.zona_id)
      // var zona = null ;

      
      $('#category_edit').attr('value', category_edit) 

      $('#form-edit-category').attr('action', '<?= base_url()?>blog/update_category/'+id_edit) 
      
  })
});

</script>