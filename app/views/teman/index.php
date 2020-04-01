<div class="jumbotron">
    <h1>Ini adalah Teman Kamar Saya</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
</div>
<div class="container pb-4">
  <div class="row">
    <div class="col-sm-6 ml-5">
      <button type="button" class="btn btn-success tambah" data-toggle="modal" data-target="#tambahNama">
          Tambah nama teman
      </button>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <ul>
          <?php foreach($data['teman'] as $tmn): ?>
          <li class="list-group-item"><?= $tmn['nama'] ?>
              <a href="<?= BASEURL; ?>/teman/hapus/<?= $tmn['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('YAKIN MAU DIHAPUS?')">HAPUS</a>
              <a href="<?= BASEURL; ?>/teman/ubah/<?= $tmn['id']; ?>" class="badge badge-warning float-right ml-1 edit"  data-toggle="modal" data-target="#tambahNama" data-id="<?= $tmn['id']; ?>">EDIT</a>
              <a href="<?= BASEURL; ?>/teman/detail/<?= $tmn['id']; ?>" class="badge badge-info float-right ml-1">DETAIL</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>
<div class="modal fade" id="tambahNama" tabindex="-1" role="dialog" aria-labelledby="tambahTemanKamar" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahTemanKamar">Tambah teman kamar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/teman/tambah" method="post">
        <input type="hidden" id="id" name="id">
        <div class="form-group">
            <label for="nama">nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="namamu cok">
        </div>
        <div class="form-group">
            <label for="alamat">alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="alamatmu cok">
        </div>
        <div class="form-group">
            <label for="kelas">kelas</label>
            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="kelasmu cok">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah teman</button>
      </div>
      </form>
    </div>
  </div>
</div>