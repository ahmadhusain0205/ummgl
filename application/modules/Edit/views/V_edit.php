<div class="row">
    <div class="container">
        <div class="card col-lg-11">
            <div class="card">
                <div class="card-header">
                    <h4 align="center">
                        <b>Edit Profile</b>
                    </h4>
                </div>
                <div class="card-body">
                    <?php foreach ($user as $u) : ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control form-control" name="username" id="username" placeholder="Input Username" required value="<?= $u->username; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control" name="password" id="password" placeholder="Input Password" required value="<?= $u->password; ?>">
                        </div>
                        <a href="<?= base_url('Edit/ubah'); ?>" type="button" class="btn btn-sm btn-warning shadow mb-4">
                            <i class="fa fa-save"></i> Save
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>