<div class="container-fluid">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">From Pengiriman</h1>
              </div>
              <?= $this->session->flashdata('massage');?>
              <form class="user" method="post" action="<?= base_url('pengiriman2/index')?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama" value="<?= set_value('name'); ?>">

                  <?= form_error('name','<small class="text-danger pl-3">','</small>')?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="penerima" name="penerima" placeholder="Penerima" value="<?= set_value('penerima'); ?>">

                  <?= form_error('penerima','<small class="text-danger pl-3">','</small>')?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">

                  <?= form_error('email','<small class="text-danger pl-3">','</small>')?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat tujuan" value="<?= set_value('alamat'); ?>">

                  <?= form_error('alamat','<small class="text-danger pl-3">','</small>')?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="hp" name="hp" placeholder="Nomor Hp" value="<?= set_value('hp'); ?>">

                  <?= form_error('hp','<small class="text-danger pl-3">','</small>')?>
                </div>

                <div class="form-group">
                    <label for="jurusan"> Paket </label>
                    <select class="form-control" id="paket" name="paket">
                      <option value="Normal - 25000"> Normal - 25000 </option>
                      <option value="Express - 30000"> Express - 30000 </option>
                      <option value="Hell - 45000"> Hell - 45000 </option>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Tambah
                </button>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>