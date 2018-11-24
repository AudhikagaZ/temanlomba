<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Lomba</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-primary">Tambah</button>
              </div>
            </div>
          </div>
          <div class="row">
          <?php if(!empty($lomba)){ 
            foreach ($lomba as $data) {?>

          <div class="col-md-3">
            <div class="card-group">
              <div class="card">
    <!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
    <div class="card-body">
      <h5 class="card-title"><?= $data->Judul ?></h5>
      <p class="card-text"><?= $data->Deskripsi ?></p>
      <p class="card-text"><small class="text-muted"><?= $data->Waktu ?></small></p>
    </div>
  </div>
          </div>

          </div>
         <?php } } ?>
    
          </div>

          </div>
          </div>

      
</main>