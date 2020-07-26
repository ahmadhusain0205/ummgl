<div class="row">
    <div class="container">
        <div class="card col-lg-11">
            <div class="card-header">
                <div class="card-body">
                    <button type="button" class="btn btn-sm btn-success shadow mb-4 float-right" data-toggle="modal" data-target="#adminTambahModal">
                        <i class="fa fa-plus"></i> New Admin
                    </button>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-datatable">
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Status</th>
                                    <th width="20%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = "1";
                                foreach ($admin as $a) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $a->username; ?></td>
                                        <td><?= md5($a->password); ?></td>
                                        <td>
                                            <?php
                                            if ($a->username == $this->session->userdata('username')) {
                                                echo "<div class='profile-usertitle-status'><span class='indicator label-success'></span>Online</div>";
                                            } else {
                                                echo "<div class='profile-usertitle-status'><span class='indicator label-danger'></span>Offline</div>";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-warning shadow mb-4" data-toggle="modal" data-target="#editAdmin<?= $a->id; ?>">
                                                <i class="fa fa-wrench"></i> Edit
                                            </button>
                                            <?php
                                            if ($a->username == $this->session->userdata('username')) {
                                                echo "<button type='button' class='btn btn-sm btn-dark shadow mb-4'><i class='fa fa-trash'></i> Hapus
                                            </button>";
                                            } else {
                                                echo "<button type='button' class='btn btn-sm btn-danger shadow mb-4' data-toggle='modal' data-target='#deleteAdminModal";
                                                echo $a->id;
                                                echo "'>
                                                <i class='fa fa-trash'></i> Hapus
                                            </button>";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal tambah -->
<div class="modal fade" id="adminTambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Add Admin</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" class="user" action="<?= base_url('Admin/tambah'); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Input Username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Input Password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal edit -->
<?php
foreach ($admin as $a) :
?>
    <div class="modal fade" id="editAdmin<?= $a->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning" id="exampleModalLabel">Edit Admin</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" class="user" action="<?= base_url('Admin/edit'); ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="hidden" name="id" value="<?= $a->id; ?>">
                            <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Input Username" required value="<?= $a->username; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Input Password" required value="<?= $a->password; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Modal Hapus -->
<?php
foreach ($admin as $a) :
?>
    <div class="modal fade" id="deleteAdminModal<?= $a->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel">Delete data?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Yes" for <b>confirm</b>, or "No" for <b>cancel</b></div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                    <a class="btn btn-danger" href="<?= base_url('Admin/delete/') . $a->id; ?>">Yes</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>