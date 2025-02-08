<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>
<div class="container-fluid p-4">
    <div class="card shadow">
        <!-- Dispaly Alert -->
        <?php if (session()->has('errors')) : ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach (session('errors') as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>    
        <?php elseif(session()->has('success')) : ?>
            <div class="alert alert-success">
                <ul>
                    <li><?= esc(session('success')) ?></li>
                </ul>
            </div>
        <?php endif ?> 

        <div class="card-header">
            <div class="content d-flex justify-content-between align-items-center">
                <h1 class="fw-bolder me-auto fs-3">Daftar Produksi</h1>
                <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambahProduksiModal">
                    <i class="nav-icon bi bi-plus-circle "></i>
                    Tambah Produksi
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr class="fs-5">
                            <th class="col-lg-1">No</th>
                            <th class="col-lg-3">Nama Pohon</th>
                            <th class="col-lg-2">Tanggal Panen</th>
                            <th class="col-lg-2">Jumlah Buah</th>
                            <th class="col-lg-2">Buah Matang</th>
                            <th class="col-lg-2 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if (count($produksi) > 0) {
                            $no = 1;
                            foreach ($produksi as $item) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= esc($item['jenis_bibit']) ?></td>
                                <td><?= esc($item['Tanggal_Panen']) ?></td>
                                <td><?= esc($item['Jumlah_Buah']) ?></td>
                                <td><?= esc($item['Buah_Matang']) ?></td>
                                <td class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-info mx-2" data-bs-toggle="modal" data-bs-target="#detailProduksiModal<?= $item['id'] ?>">Tampil</a>
                                    <a href="#" class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#editProduksiModal<?= $item['id'] ?>">Edit</a>
                                    <button type="button" class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $item['id'] ?>">
                                        Hapus
                                    </button>
                                    <!-- Modal Delete (per item) -->
                                    <div class="modal fade" id="deleteModal<?= $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel<?= $item['id'] ?>" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel<?= $item['id'] ?>">Konfirmasi Penghapusan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin ingin menghapus item ini? 
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <form action="/admin/produksi/delete/<?= $item['slug'] ?>" method="POST" style="display:inline;">
                                                        <?= csrf_field() ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>

                            </tr>

                            <!-- Modal Edit Produksi -->
                            <div class="modal fade" id="editProduksiModal<?= $item['id'] ?>" tabindex="-1" aria-labelledby="editProduksiModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color:#001b6d;">
                                            <h5 class="modal-title text-white fs-4" id="editProduksiModalLabel">Edit Produksi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/admin/produksi/update/<?=$item['id']?>" method="POST">
                                                <?= csrf_field() ?>
                                                <!-- Nama Pohon (Satu Baris Penuh) -->
                                                <div class="mb-3">
                                                    <label for="namaPohon" class="form-label">Nama Pohon</label>
                                                    <select name="id_pohon" class="form-control" id="namaPohon" required>
                                                        <?php foreach($pohons as $pohon){ ?>
                                                            <!-- Set the option as selected if it matches the current item -->
                                                            <option value="<?= $pohon['id'] ?>" <?= ($pohon['id'] == $item['id_pohon']) ? 'selected' : '' ?>> <?= $pohon['jenis_bibit'] ?>
                                                            </option>
                                                        <?php }; ?>
                                                    </select>
                                                </div>

                                                <!-- Field Lainnya (Dua Kolom per Baris) -->
                                                <div class="mb-3 row">
                                                    <div class="col-md-6">
                                                        <label for="tanggalPanen" class="form-label">Tanggal Panen</label>
                                                        <input type="date" class="form-control" id="tanggalPanen" name="Tanggal_Panen" value="<?= $item['Tanggal_Panen'] ?>" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="jumlahBuah" class="form-label">Jumlah Buah</label>
                                                        <input type="number" class="form-control" id="jumlahBuah" name="Jumlah_Buah" value="<?= $item['Jumlah_Buah'] ?>" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <div class="col-md-6">
                                                        <label for="buahMatang" class="form-label">Buah Matang</label>
                                                        <input type="number" class="form-control" id="buahMatang" name="Buah_Matang" value="<?= $item['Buah_Matang'] ?>" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="jumlahBungaDompet" class="form-label">Jumlah Bunga Dompet</label>
                                                        <input type="number" class="form-control" id="jumlahBungaDompet" name="Jumlah_Bunga_Dompet" value="<?= $item['Jumlah_Bunga_Dompet'] ?>" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <div class="col-md-6">
                                                        <label for="jumlahBungaJantan" class="form-label">Jumlah Bunga Jantan</label>
                                                        <input type="number" class="form-control" id="jumlahBungaJantan" name="Jumlah_Bunga_Jantan" value="<?= $item['Jumlah_Bunga_Jantan'] ?>" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="jumlahBungaBetina" class="form-label">Jumlah Bunga Betina</label>
                                                        <input type="number" class="form-control" id="jumlahBungaBetina" name="Jumlah_Bunga_Betina" value="<?= $item['Jumlah_Bunga_Betina'] ?>" required>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <div class="col-md-6">
                                                        <label for="jumlahJanjangPanen" class="form-label">Jumlah Janjang Panen</label>
                                                        <input type="number" class="form-control" id="jumlahJanjangPanen" name="Jumlah_Janjang_Panen" value="<?= $item['Jumlah_Janjang_Panen'] ?>" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="beratJanjangPanen" class="form-label">Berat Janjang Panen</label>
                                                        <input type="number" class="form-control" id="beratJanjangPanen" name="Berat_Janjang_Panen" value="<?= $item['Berat_Janjang_Panen'] ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <button type="reset"  class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Modal Edit Produksi -->

                        <?php }
                        } else { ?>
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data produksi ditemukan</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                        <!-- $pager->links('default', 'my_pagination') -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Render Produksi Create Modal -->
<?= view('admin/produksi/partial/_partial-modal-produksi-create') ?>
<!-- Render Produksi Details Modal -->
<?= view('admin/produksi/partial/_partial-modal-produksi-details') ?>
<script>
    $(document).ready(function() {
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); 
            var id = button.data('id'); // Ambil id dari data-id di button
            var form = $('#deleteForm'); 
            form.attr('action', '/admin/produksi/delete/' + id); // Update action form
        });
    });
</script>



<?= $this->endSection() ?>
