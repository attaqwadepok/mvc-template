<div class="container">
  <div class="row">
    <div class="col">
      <h1><?= $data['title']; ?> | Testing Oke</h1>
      <hr>
      <?php foreach ($data['testing'] as $test) : ?>
        <ul>
          <li><?= $test['nama']; ?></li>
          <li><?= $test['usia']; ?></li>
          <li><?= $test['gambar']; ?></li>
        </ul>
      <?php endforeach; ?>



    </div>
  </div>
</div>