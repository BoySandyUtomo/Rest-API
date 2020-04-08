<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card"> 
                <div class="card-header">
                    Form Ubah Data Pengiriman
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $pengiriman['id']; ?>">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= $pengiriman['name']; ?>">
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="penerima">Penerima</label>
                            <input type="text" name="penerima" class="form-control" id="penerima" value="<?= $pengiriman['penerima']; ?>">
                            <small class="form-text text-danger"><?= form_error('penerima'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $pengiriman['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $pengiriman['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="hp">No.hp</label>
                            <input type="text" name="hp" class="form-control" id="hp" value="<?= $pengiriman['hp']; ?>">
                            <small class="form-text text-danger"></small>
                        </div>


                        <div class="form-group">
                            <label for="paket">Paket</label>
                            <select class="form-control" id="paket" name="paket">
                                <?php foreach( $paket as $j ) : ?>
                                    <?php if( $j == $pengiriman['paket'] ) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>