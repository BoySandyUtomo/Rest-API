<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pengiriman
                </div>
                <div class="card-body">
                    <h5 class="card-title">Pengirim : </h5>
                    <h5 class="card-title"><?= $pengiriman['name']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Email :</h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $pengiriman['email']; ?></h6>
                    <h6 class="card-subtitle mb-2 text-muted">Nomer HP :</h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $pengiriman['hp']; ?></h6>
                    <p class="card-text"> Alamat Dituju : </p>
                    <p class="card-text"><?= $pengiriman['alamat']; ?></p>
                    <p class="card-text">Jenis Pengiriman :</p>
                    <p class="card-text"><?= $pengiriman['paket']; ?></p>
                    <p class="card-text">Penerima :</p>
                    <p class="card-text"><?= $pengiriman['penerima']; ?></p>
                    <a href="<?= base_url(); ?>pengiriman" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>