<!--::special mentor start::-->
<div id="special_mentor_part"></div>
<section class="special_cource padding_top" style="padding-bottom:40px">
<div class="container" >
    <!-- <div class="row justify-content-center">
        <div class="col-xl-5">
            <div class="section_tittle text-center">
                <p>Pelatihan Populer</p>
                <h2>Spesial Buat Kamu</h2>
            </div>
        </div>
    </div> -->
    <!-- <? var_dump($profile_mentor) ?> -->
    <div class="row">
                    
        <div class=" mb-3 col-lg-6" >
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= $this->Validator->image_validator('asset/img/user/', $row_mentor['image'], 'default.png') ?>" class="card-img-top img-circle" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">

                        <h4 class="card-title"><?= $profile_mentor->name ?></h4>
                        <p class="card-text">Email : <?= $profile_mentor->email ?></p>
                        <p class="card-text">Born Date : <?= $profile_mentor->born_date ?></p>
                        <p class="card-text">phone_number: <?= $profile_mentor->phone_number ?></p>
                        <p class="card-text">gender: <?= $profile_mentor->gender ?></p>
                        <p class="card-text">Alamat: <?= $profile_mentor->address ?></p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card  bg-default" >
                <div class="card-header ">
                    <h4>Educational</h4>
                </div>
                <ul class="list-group list-group-flush ml-1 mr-1 mb-1">
                    <?php
                        $edu = $this->Constant->educational_level();
                    ?>
                    <li class="list-group-item">Pendidikan : <?= $edu[$profile_mentor->level] ?></li>
                    <li class="list-group-item">Year In : <?= $profile_mentor->year_in ?></li>
                    <li class="list-group-item">Year Out : <?= $profile_mentor->year_out ?></li>
                    <li class="list-group-item">Institution Name : <?= $profile_mentor->institution_name ?></li>
                    <li class="list-group-item">City : <?= $profile_mentor->city ?></li>
                    <li class="list-group-item">Major : <?= $profile_mentor->major ?></li>
                </ul>
            </div>
            

        </div>
    </div>

</div>
</section>
<!--::special mentor end::-->


