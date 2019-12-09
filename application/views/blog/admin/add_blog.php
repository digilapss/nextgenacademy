
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.3.2/ckeditor.js" ></script>

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Blog Data</h2>
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
          <h2 class="contact-title">Blog Data<h2>
          <?= $this->session->flashdata('alert')?>
        </div>
        <div class="col-lg-6">
        
          <table class="table" id="category-table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Image</th>
                <th scope="col">Tools</th>
              </tr>
            </thead>
            <tbody>

            <? 
            // $n = 0 ;
              foreach ($all_blog->result() as $row_blog) {
                # code...

              
            ?>
              <tr>
                <td><?= ++$start?></td>
                <td><?= $row_blog->title ?></td>
                <td><?= $row_blog->category_name ?></td>
                <td>
                  <img src="<?= $row_blog->image_blog ?>" alt="" width="50px">
                </td>
                <td>
                  <div class="btn-group">
                    <a href="<?= base_url() ?>admin/edit_blog/<?= $row_blog->blog_id ?>" class="btn btn-outline-info btn-sm">
                      <i class="fa fa-pencil"></i>
                    </a>
                    <a href="<?= base_url() ?>admin/delete_blog/<?= $row_blog->blog_id ?>" class="btn btn-outline-danger btn-sm" onclick=" return confirm('Delete Blog')">
                      <i class="fa fa-trash-o"></i>
                    </a>
                  </div>
                </td>
              </tr>
            <? } ?>
             
            </tbody>
          </table>
              <?= $links ?>
        </div>
        <!-- Button trigger modal -->



        <div class="col-lg-6">
          <?= $this->session->flashdata('signup_alert') ?>
          <form class="form-contact"  action="<?= base_url().'admin/add_blog' ?>" method="post" enctype="multipart/form-data" >
            <div class="row">

                <div class="col-sm-12">
                    <h6>Title</h6>
                    <div class="form-group">
                    <input class="form-control" name="title" value="" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Title'" placeholder = 'Masukkan Title' required>
                    </div>
                </div>

                <div class="col-sm-12">
                    <h6>Category</h6>
                    <div class="input-group-icon ">
                        <div class="icon"><i class="fa fa-link" aria-hidden="true"></i></div>
                        <div class="form-select" id="default-select" >
                            <div clas="gender_alert"></div>
                            <select name="category" id="category">
                                <? 
                                    foreach ($category->result() as $row_category) {
                                        # code...
                                ?>
                                    <option value="<?= $row_category->blog_category_id ?>"><?= $row_category->category_name ?></option>
                                <? } ?>
                            </select>
                        </div>
                    </div>
                </div>
                

                <div class="col-sm-12 mt-30">
                    <h6>Deskirpsi</h6>
                    <div class="input-group-icon mt-10">
                      <textarea cols="80" rows="10" id="ckeExample" name="deskripsi">
                        
                      </textarea>
                    </div>
                </div>

                <div class="col-sm-12 mt-30">
                    <h6>Image</h6>
                    <div class="form-group">
                    <input class="form-control" name="blogfile" value="" id="name" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Title'" placeholder = 'Masukkan Title' required>
                    </div>
                </div>
                        

            </div>
            <div class="form-group mt-30 pull-right">
              <button type="submit" class="button button-contactForm btn_1" id="sv_profile">Simpan Category</button>
            </div>

            
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

<script>

var ckEditorID;

ckEditorID = 'ckeExample';

function fnConsolePrint()
{
  //console.log($('#' + ckEditorID).val());
  console.log(CKEDITOR.instances[ckEditorID].getData());
}
CKEDITOR.config.forcePasteAsPlainText = true;
CKEDITOR.replace( ckEditorID,
    {
        toolbar :
        [
          {
            items : [ 'Bold','Italic','Underline','Strike','-','RemoveFormat' ]
          },
          {
            items : [ 'Format']
          },
          {
            items : [ 'Link','Unlink' ]
          },
          {
            items : [ 'Indent','Outdent','-','BulletedList','NumberedList']
          },
          {
            items : [ 'Undo','Redo']
          }
        ]
    })

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