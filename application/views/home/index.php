<div class="container-fluid">
    <a class="btn btn-outline-primary btn-lg" href="<?= base_url() ?>home/tambah"><i class="fas fa-plus"></i> Tambah Produk</a>
    <div class="card shadow mb-4 mt-3">
        <div class="card-header py-3">
            Tabel Produk
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Ketegori</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tabelproduk as $tb) : ?>
                            <?php if ($tb['status'] == "bisa dijual") { ?>
                                <tr>
                                    <td><?= $tb['id_produk'] ?></td>
                                    <td><?= $tb['nama_produk'] ?></td>
                                    <td><?= $tb['harga'] ?></td>
                                    <td><?= $tb['kategori'] ?></td>
                                    <td><?= $tb['status'] ?></td>
                                    <td>
                                        <a type="button" class="btn btn-outline-success" href="<?= base_url(); ?>home/edit/<?= $tb['id_produk'] ?>"><i class=" fas fa-pen"></i></i> Edit</a>
                                        <a type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteModal<?= $tb['id_produk'] ?>"><i class="fas fa-trash"></i></i> Hapus</a>
                                    </td>
                                </tr>
                        <?php }
                        endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php foreach ($tabelproduk as $tb) : ?>
    <div class="modal fade" id="deleteModal<?= $tb['id_produk']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin menghapus data?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Tekan "Hapus" jika anda ingin menghapus data.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url(); ?>home/hapus/<?= $tb['id_produk'] ?>">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>