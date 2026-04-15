<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Hapus Anggota</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <p>Apakah Anda yakin ingin menghapus data anggota berikut?</p>
            <table class="table table-bordered">
                <tr><th>No Anggota</th><td><?= $anggota->no_anggota; ?></td></tr>
                <tr><th>Nama</th><td><?= $anggota->nama; ?></td></tr>
                <tr><th>Alamat</th><td><?= $anggota->alamat; ?></td></tr>
                <tr><th>Telepon</th><td><?= $anggota->telepon; ?></td></tr>
                <tr><th>Email</th><td><?= $anggota->email; ?></td></tr>
                <tr><th>Status</th><td><?= $anggota->status; ?></td></tr>
            </table>

            <a href="<?= base_url('anggota/hapus_proses/'.$anggota->id); ?>" class="btn btn-danger">Ya, Hapus</a>
            <a href="<?= base_url('anggota'); ?>" class="btn btn-secondary">Batal</a>
        </div>
    </div>
</div>