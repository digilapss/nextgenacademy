
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.3.2/ckeditor.js" ></script>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Blog Edit</h2>
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
      <h2 class="contact-title">Blog Edit<h2>
      <?= $this->session->flashdata('alert')?>
    </div>

    <div class="col-lg-12">
      <?= $this->session->flashdata('signup_alert') ?>
      <form class="form-contact"  action="<?= base_url().'blog/update_blog/'.$blog_id ?>" method="post" >
        <div class="row">

            <div class="col-sm-12">
                <h6>Title</h6>
                <div class="form-group">
                <input class="form-control" name="title" value="<?= $title ?>" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Title'" placeholder = 'Masukkan Title' required>
                </div>
            </div>

            <div class="col-sm-12">
                <h6>Category</h6>
                <div class="input-group-icon ">
                        <select name="category" id="category">
                            <? 
                                foreach ($category->result() as $row_category) {
                                    # code...
                            ?>
                                <option value="<?= $row_category->blog_category_id ?>" <?= $row_category->blog_category_id == $blog_category_id  ? 'selected' : ' '  ?> ><?= $row_category->category_name ?></option>
                            <? } ?>
                        </select>
                </div>
            </div>
            

            <div class="col-sm-12 mt-30">
                <h6>Deskirpsi</h6>
                <div class="input-group-icon mt-10">
                  <textarea cols="80" rows="10" id="ckeExample" name="deskripsi"><?= $description ?></textarea>
                </div>
            </div>

            <div class="col-sm-12 mt-30">
                
               <img src="<?= $image_blog ?>" alt="">
            </div>

            <div class="col-sm-12 mt-30">
               <!-- Button trigger modal -->
                
                <div class="input-form">
                  <input type="file" name="blogimage" class="form-control" >
                </div>

            </div>

                    

        </div>
        <div class="form-group mt-30 pull-right">
          <button type="submit" class="button button-contactForm btn_1" >Update Blog</button>
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
                            <h5 class="modal-title" id="staticBackdropLabel">Ubah Image Blog</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url() ?>blog/update_blog_image" method="post" enctype="multipart/form-data" >
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btn-sm">Update Image</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
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