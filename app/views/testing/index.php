<div class="container">
  <div class="row">
    <div class="col-6">

      <!-- Button trigger modal -->
      <!-- Button trigger modal -->
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">
        Tambah Data
      </button>

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

<!-- Modal -->
<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/testing/tambah" method="post">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="usia">Usia</label>
            <input type="number" class="form-control" id="usia" name="usia">
          </div>
          <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="text" class="form-control" id="gambar" name="gambar">
          </div>
          <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select class="form-control" id="jk" name="jk">
              <option value="Pria">Pria</option>
              <option value="Wanita">Wanita</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>