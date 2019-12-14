
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
      <form class="form-contact"  action="<?= base_url().'blog/update_blog/'.$blog_id ?>"  enctype="multipart/form-data" method="post" >
        <div class="row">

            <div class="col-sm-12">
                <h6>Judul</h6>
                <div class="form-group">
                  <input class="form-control" name="title" value="<?= $title ?>" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Title'" placeholder = 'Masukkan Title' required>
                </div>
            </div>

            <div class="col-sm-12">
                <h6>Kategori</h6>
                <div class="form-group">
                  <select name="category" id="category">
                      <?php 
                          foreach ($category->result() as $row_category) {
                              # code...
                      ?>
                          <option value="<?= $row_category->blog_category_id ?>" <?= $row_category->blog_category_id == $blog_category_id  ? 'selected' : ' '  ?> ><?= $row_category->category_name ?></option>
                      <?php } ?>
                  </select>
                </div>
            </div>            

            <div class="col-sm-12 mt-30">
              <h6>Deskirpsi</h6>
              <div class="form-group">
                <textarea cols="80" rows="10" id="ckeExample" name="deskripsi"><?= $description ?></textarea>
              </div>
            </div>

            <div class="col-sm-4 mt-10">
              <img id="preview_blog_image" src="<?= $image_blog ?>" class="rounded" alt="" width="200px"/>
              <input type="file" name="image" class="info-border circle small" value="image" id="filename1" title="Upload Foto" accept="image/*" onchange="course_img(this,'preview_blog_image')">
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