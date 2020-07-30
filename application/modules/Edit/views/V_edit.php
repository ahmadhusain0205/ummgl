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
                        <form method="POST" class="user" action="<?= base_url('Edit/ubah'); ?>">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="hidden" name="id" value="<?= $u->id; ?>">
                                    <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Input Username" required value="<?= $u->username; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Input Password" required value="<?= $u->password; ?>">
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>