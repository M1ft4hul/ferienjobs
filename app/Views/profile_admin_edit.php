<?php echo $this->extend('profile_admin') ?>
<?php echo $this->section('content'); ?>
<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <p style="text-align: center;"><b>Edit Profile Admin</b></p>
            <hr>
            <form action="<?php echo base_url('update/' . $user['id']) ?>" method="post">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Panjang</label>
                    <div class="col-sm-7">
                        <input type="text" name="nama" value="<?php echo $user['nama'] ?>" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-7">
                        <input type="email" name="email" value="<?php echo $user['email'] ?>" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-7">
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Kata Sandi Baru" id="password">
                        <span class="mata"><i class="bi bi-eye-fill" id="show_eye"></i></span>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-warning">Update Data</button>
                |
                <a href="<?php echo base_url('/profile-admin') ?>" type="button" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>