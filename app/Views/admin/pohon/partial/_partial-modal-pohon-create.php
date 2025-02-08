<!-- Modal Tambah Pohon -->
<div class="modal fade" id="tambahPohonModal" tabindex="-1" aria-labelledby="tambahPohonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#001b6d;">
                <h5 class="modal-title text-white fs-4" id="tambahPohonModalLabel">Tambah Pohon</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/admin/pohon/create" method="POST">
                    <?= csrf_field() ?>
                    <div class="mb-3 row">
                        <label for="jenisBibit" class="form-label col-md-3">Jenis Bibit :</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="jenisBibit" name="jenis_bibit" placeholder="Masukkan jenis bibit pohon..." required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Tanggal_Tanam" class="form-label col-md-3">Tanggal Tanam :</label>
                        <div class="col-md-12">
                            <input type="date" class="form-control" id="tahunTanam" name="tahun_tanam" placeholder="Masukkan tahun tanam..." required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="float-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal Tambah Pohon -->
