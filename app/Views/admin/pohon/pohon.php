<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>
<div class="container-fluid p-4">
        <div class="card shadow">
            <!-- Display Alert -->
                <?php if (session()->has('errors')) : ?>
                    <div class="alert alert-danger">
                        <ul>
                            <li><?= esc(session('errors')) ?></li> <!-- Tampilkan langsung sebagai string -->
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
                    <h1 class="fw-bolder me-auto fs-3">Daftar Pohon</h1>
                    <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambahPohonModal">Tambah Pohon</button>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="fs-5">
                                <th class="col-lg-1" >No</th>
                                <th class="col-lg-5">Jenis Bibit</th>
                                <th class="col-lg-4">Tahun Tanam</th>
                                <th class="col-lg-2 text-center">Action</th>
                            </tr>
                        </thead>
                        <?php 
                            if($pohons > 0){
                                $no = 1;
                                foreach($pohons as $item ){?>
                                <tr class="">
                                    <td><?= $no++ ?></td>
                                    <td><?= $item['jenis_bibit'] ?></td>
                                    <td><?= $item['tahun_tanam'] ?></td>
                                    <td class="d-flex justify-content-center">
                                        <button class="btn btn-warning mx-2" data-bs-toggle="modal" data-bs-target="#editPohonModal<?= $item['id'] ?>">Edit</button>
                                        <button class="btn btn-danger mx-2" data-bs-toggle="modal" data-bs-target="#deletePohonModal<?= $item['id'] ?>">Hapus</button>
                                    </td>

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
                                                    <form action="/admin/produksi/delete/<?= $item['slug'] ?>" method="post" style="display:inline;">
                                                        <?= csrf_field() ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </tr>
                        <?php }}
                            else{ ?>
                                <tr>
                                    <td colspan="4">Tidak ditemukan Data</td>
                                </tr>
                         <?php  }; ?> 
                        </tbody>
                    </table>

                    <!-- Modal Edit Pohon -->
                        <?php foreach ($pohons as $item) { ?>
                        <div class="modal fade" id="editPohonModal<?= $item['id'] ?>" tabindex="-1" aria-labelledby="editPohonModalLabel<?= $item['id'] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color:#001b6d;">
                                        <h5 class="modal-title text-white fs-4" id="editPohonModalLabel<?= $item['id'] ?>">Edit Pohon</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/admin/pohon/update/<?= $item['id'] ?>" method="POST">
                                            <?= csrf_field() ?>
                                            <div class="mb-3 row">
                                                <label for="jenisBibit" class="form-label col-md-3">Jenis Bibit :</label>
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control" id="jenisBibit" name="jenis_bibit" value="<?= $item['jenis_bibit'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="tahunTanam" class="form-label col-md-3">Tahun Tanam :</label>
                                                <div class="col-md-12">
                                                    <input type="date" class="form-control" id="tahunTanam" name="tahun_tanam" value="<?= $item['tahun_tanam'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="float-end">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

    <?= view('admin/pohon/partial/_partial-modal-pohon-create') ?>
    <?= view('admin/pohon/partial/_partial-modal-pohon-delete') ?>



<?= $this->endSection() ?>