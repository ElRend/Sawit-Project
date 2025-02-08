<!-- Modal Tambah Produksi -->
<div class="modal fade" id="tambahProduksiModal" tabindex="-1" aria-labelledby="tambahProduksiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#001b6d;">
                <h5 class="modal-title text-white fs-4" id="tambahProduksiModalLabel">Tambah Produksi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="produksi/create" method="POST">
                <div class="mb-3 row">
                    <label for="namaPohon" class="form-label col-md-3">Nama Pohon :</label>
                    <div class="col-md-12">
                        <select name="id_pohon" class="form-control" required>
                            <option value="">Pilih Pohon yang Tersedia</option>
                            <?php foreach($pohons as $pohon){ ?>
                            <option value="<?= $pohon['id'] ?>"><?= $pohon['jenis_bibit'] ?></option>
                            <?php }; ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="tanggalPanen" class="form-label">Tanggal Panen :</label>
                        <input type="date" class="form-control" id="tanggalPanen" name="Tanggal_Panen" required>
                    </div>
                    <div class="col-md-6">
                        <label for="jumlahBuah" class="form-label">Jumlah Buah :</label>
                        <input type="number" class="form-control" id="jumlahBuah" name="Jumlah_Buah" placeholder="Masukkan Jumlah buah saja..." required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="buahMatang" class="form-label">Buah Matang :</label>
                        <input type="number" class="form-control" id="buahMatang" name="Buah_Matang" placeholder="Masukkan Buah Matang..." required>
                    </div>
                    <div class="col-md-6">
                        <label for="jumlahBungaDompet" class="form-label">Jumlah Bunga Dompet :</label>
                        <input type="number" class="form-control" id="jumlahBungaDompet" name="Jumlah_Bunga_Dompet" placeholder="Jumlah Bunga Dompet" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="jumlahBungaJantan" class="form-label">Jumlah Bunga Jantan :</label>
                        <input type="number" class="form-control" id="jumlahBungaJantan" name="Jumlah_Bunga_Jantan" placeholder="Jumlah Bunga Jantan" required>
                    </div>
                    <div class="col-md-6">
                        <label for="jumlahBungaBetina" class="form-label">Jumlah Bunga Betina :</label>
                        <input type="number" class="form-control" id="jumlahBungaBetina" name="Jumlah_Bunga_Betina" placeholder="Jumlah Bunga Betina" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="jumlahJanjangPanen" class="form-label">Jumlah Janjang Panen :</label>
                        <input type="number" class="form-control" id="jumlahJanjangPanen" name="Jumlah_Janjang_Panen" placeholder="Jumlah Janjang Panen" required>
                    </div>
                    <div class="col-md-6">
                        <label for="beratJanjangPanen" class="form-label">Berat Janjang Panen :</label>
                        <input type="number" class="form-control" id="beratJanjangPanen" name="Berat_Janjang_Panen" placeholder="Berat Janjang Panen" required>
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
<!-- End Modal Tambah Produksi -->