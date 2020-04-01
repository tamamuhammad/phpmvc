<div class="container mt-3">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
    <?php foreach($data['teman'] as $tmn): ?>
        <h5 class="card-title"><?= $tmn['nama'] ?></h5>
        <p class="card-text"><?= $tmn['kelas'] ?></p>
        <p class="card-text"><?= $tmn['alamat'] ?></p>
        <a href="../" class="btn btn-primary">Kembali</a>
    <?php endforeach; ?>
    </div>
    </div>
</div>
