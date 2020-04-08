<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">EDIT</h1>
              </div>
              <?= $this->session->flashdata('massage');?>
              <form class="user" method="post" action="<?= base_url('edit/update2'); ?>">
                <input type="hidden" name="id" id="id" value="<?= $data ['id']?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="<?= $data ['name']?>" value="<?= $data ['name']?>">

                  <?= form_error('name','<small class="text-danger pl-3">','</small>')?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="penerima" name="penerima" placeholder="<?= $data ['penerima']?>" value="<?= $data ['penerima']?>">

                  <?= form_error('name','<small class="text-danger pl-3">','</small>')?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="<?= $data ['email']?>" value="<?= $data ['email']?>">

                  <?= form_error('email','<small class="text-danger pl-3">','</small>')?>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="<?= $data ['alamat']?>" value="<?= $data ['alamat']?>">

                  <?= form_error('alamat','<small class="text-danger pl-3">','</small>')?>
                </div>

                <div class="form-group"> 
                  <input type="text" class="form-control form-control-user" id="hp" name="hp" placeholder="<?= $data ['hp']?>" value="<?= $data ['hp']?>">

                  <?= form_error('hp','<small class="text-danger pl-3">','</small>')?>
                </div>

                <div class="form-group">
                    <label for="jurusan"> Paket </label>
                    <select class="form-control" id="paket" name="paket">
                      <?php foreach ($paket as $p) : ?>

                        <?php if( $p == $data['paket'] ) : ?>
                        <option value="<?= $p; ?>" selected> <?= $p; ?> </option>

                        <?php else :  ?>
                        <option value="<?= $p; ?>"> <?= $p; ?> </option>

                        <?php endif ;  ?>
                      <?php endforeach; ?>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Add
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>