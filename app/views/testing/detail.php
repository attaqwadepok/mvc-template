<div class="container">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['testing']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?= $data['testing']['usia'] . ' tahun'; ?></h6>
      <p class="card-text"><?= $data['testing']['gambar']; ?></p>
      <a href="<?= BASEURL; ?>/testing/" class="card-link">Back</a>
    </div>
  </div>


</div>