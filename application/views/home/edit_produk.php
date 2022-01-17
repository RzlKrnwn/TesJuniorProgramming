<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Edit Produk</h1>
                        </div>
                        <form class="user" method="POST">
                            <div class="form-group">
                                <p class="pl-3">ID Produk</p>
                                <input type="text" class="form-control form-control-user" id="id_produk" name="id_produk" value="<?= $produk['id_produk']; ?>" readonly>
                                <?= form_error('id_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <p class="pl-3">Nama Produk</p>
                                <input type="text" class="form-control form-control-user" id="nama_produk" name="nama_produk" value="<?= $produk['nama_produk']; ?>">
                                <?= form_error('nama_produk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <p class="pl-3">Harga</p>
                                <input type="number" class="form-control form-control-user" id="harga" name="harga" value="<?= $produk['harga']; ?>">
                                <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <p class="pl-3">Kategori</p>
                                <input type="text" class="form-control form-control-user" id="kategori" name="kategori" value="<?= $produk['kategori']; ?>">
                                <?= form_error('kategori', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="grid">
                                <p class="pl-3">Status</p>
                                <div class="row">
                                    <div class="pl-4">
                                        <input type="radio" id="bisa dijual" name="status" value="bisa dijual" <?php if ($produk['status'] == 'bisa dijual') { ?> checked=checked <?php } ?>>
                                        <label for="bisa dijual">Bisa Dijual</label>
                                    </div>
                                    <div class="pl-5">
                                        <input type="radio" id="tidak bisa dijual" name="status" value="tidak bisa dijual" <?php if ($produk['status'] == 'tidak bisa dijual') { ?> checked=checked <?php } ?>>
                                        <label for="tidak bisa dijual">Tidak Bisa Dijual</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <?= form_error('status', '<small class="text-danger pl-4 mb-1">', '</small>'); ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block mt-1">
                                Edit Produk
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>