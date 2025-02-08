
<!-- Modal Detail Produksi -->
<?php foreach ($produksi as $item) { ?>
<div class="modal fade" id="detailProduksiModal<?= $item['id'] ?>" tabindex="-1" aria-labelledby="detailProduksiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#001b6d;">
                <h5 class="modal-title text-white fs-4" id="detailProduksiModalLabel">Detail Produksi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Nama Pohon (Satu Baris Penuh) -->
                <div class="mb-3">
                    <label class="form-label">Nama Pohon</label>
                    <p class="form-control"><?= esc($item['jenis_bibit']) ?></p>
                </div>

                <!-- Field Lainnya (Dua Kolom per Baris) -->
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label class="form-label">Tanggal Panen</label>
                        <p class="form-control"><?= esc($item['Tanggal_Panen']) ?></p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jumlah Buah</label>
                        <p class="form-control"><?= esc($item['Jumlah_Buah']) ?></p>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label class="form-label">Buah Matang</label>
                        <p class="form-control"><?= esc($item['Buah_Matang']) ?></p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jumlah Bunga Dompet</label>
                        <p class="form-control"><?= esc($item['Jumlah_Bunga_Dompet']) ?></p>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label class="form-label">Jumlah Bunga Jantan</label>
                        <p class="form-control"><?= esc($item['Jumlah_Bunga_Jantan']) ?></p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jumlah Bunga Betina</label>
                        <p class="form-control"><?= esc($item['Jumlah_Bunga_Betina']) ?></p>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label class="form-label">Jumlah Janjang Panen</label>
                        <p class="form-control"><?= esc($item['Jumlah_Janjang_Panen']) ?></p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Berat Janjang Panen</label>
                        <p class="form-control"><?= esc($item['Berat_Janjang_Panen']) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- End Modal Detail Produksi -->