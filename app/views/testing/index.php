<div class="container">
  <div class="row">
    <div class="col-6">

      <h1><?= $data['title']; ?> | Testing Oke</h1>
      <hr>
      <ul class="list-group">
        <?php foreach ($data['testing'] as $test) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center"><?= $test['nama']; ?>
            <a href="<?= BASEURL; ?>/testing/detail/<?= $test['id']; ?>" class="badge badge-primary">Detail</a>
          </li>
        <?php endforeach; ?>
      </ul>

    </div>
  </div>
</div>