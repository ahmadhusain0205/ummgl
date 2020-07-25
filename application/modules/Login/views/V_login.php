<div class="row">
    <div class="container md-4">
        <?php
        if (isset($_GET['alert'])) {
            if ($_GET['alert'] == 'gagal') {
                echo "<div class='alert alert-danger font-weight-bold text-center'>Login Gagal</div>";
            } elseif ($_GET['alert'] == 'logout') {
                echo "<div class='alert alert-danger font-weight-bold text-center'>Anda telah Logout</div>";
            }
        }
        ?>
    </div>
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">Log in</div>
            <div class="panel-body">
                <form role="form" method="POST" action="<?= base_url('Login/login_aksi'); ?>">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Username" name="username" type="text" required>
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" required>
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sebagai">Login Sebagai : </label>
                            <select name="sebagai" id="sebagai" class="form-control">
                                <option value="admin">ADMIN</option>
                                <option value="user">USER</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>