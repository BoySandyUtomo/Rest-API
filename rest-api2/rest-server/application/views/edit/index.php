 <!-- Begin Page Content -->
        <div class="container-fluid">
          <h1 class="h3 mb-4 text-gray-800">WELCOME <?= $user ['name']?></h1>
          <div class="row">
      <div class="col-lg-8">
        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#MenuModal">Add</a>
        <div class="row mt-2 mb-3" >
            <div class="col-md-4">
              <form action="" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Cari">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-primary float-right">Cari</button>  
                  </div>
                </div>
              </form>
            </div>
        </div>


        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    <?php $i = 1; ?>
    <?php foreach ($menu as $m ): ?>
    <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $m['name']; ?></td>
      <td><?= $m['email']; ?></td>
      <td><?= $m['alamat']; ?></td>
      <td>
        <a href="<?= base_url('edit/update/'.$m['id']);?>" class="badge badge-success">Edit</a>
        <a href="<?= base_url('edit/detail/'.$m['id']);?>" class="badge badge-success">Details</a>
        <a href="<?= base_url('edit/cetak/'.$m['id']);?>" class="badge badge-success">Cetak</a>
        <a href="<?= base_url('edit/delete/'.$m['id']);?>" class="badge badge-danger" onclick="return confirm('Delete Data?')">Delete</a>
      </td>
    </tr>
    <?php $i++; ?>
  <?php endforeach; ?>


    
  </tbody>
</table>
        

      </div>
    </div>

  </div>

  <!-- modal-->

<!-- Modal -->
<div class="modal fade" id="MenuModal" tabindex="-1" role="dialog" aria-labelledby="MenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="MenuModalLabel">Add</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('edit'); ?>" method="post">
      <div class="modal-body">
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="name"placeholder="Nama">
    </div>
    <div class="form-group">
      <input type="text" class="form-control form-control-user" id="penerima" name="penerima" placeholder="Penerima">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="email" name="email"placeholder="Email">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="alamat" name="alamat"placeholder="Alamat">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" id="hp" name="hp"placeholder="Nomer Hp">
    </div>
    <div class="form-group">
      <label for="jurusan"> Paket </label>
        <select class="form-control" id="paket" name="paket">
          <option value="Normal - 25000"> Normal - 25000 </option>
          <option value="Express - 30000"> Express - 30000 </option>
          <option value="Hell - 45000"> Hell - 45000 </option>
         </select>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>

        </div>