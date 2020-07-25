<div class="row">
    <div class="container">
        <div class="card col-lg-11">
            <div class="card-header">
                <div class="card-body">
                    <button type="button" class="btn btn-sm btn-success shadow mb-4 float-right" data-toggle="modal" data-target="#adminTambahModal">
                        <i class="fa fa-plus"></i> New Score
                    </button>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-datatable">
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th width="20%">Grade</th>
                                    <th width="20%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = "1";
                                foreach ($score as $c) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $c->grade; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-warning shadow mb-4" data-toggle="modal" data-target="#editAdmin<?php echo $c->id; ?>">
                                                <i class="fa fa-wrench"></i> Edit
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger shadow mb-4" data-toggle="modal" data-target="#deleteAdminModal">
                                                <i class="fa fa-trash"></i> Hapus
                                            </button>
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
                <h5 class="modal-title text-primary" id="exampleModalLabel">Add score</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" class="user" action="<?= base_url('Score/tambah'); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Grade">Grade</label>
                        <select name="grade" id="grade" class="form-control" required>
                            <option value="">-- Select Grade --</option>
                            <?php { ?>
                                <option value="<?= 'A'; ?>"><?= 'A'; ?></option>
                                <option value="<?= 'B'; ?>"><?= 'B'; ?></option>
                                <option value="<?= 'C'; ?>"><?= 'C'; ?></option>
                                <option value="<?= 'D'; ?>"><?= 'D'; ?></option>
                                <option value="<?= 'E'; ?>"><?= 'E'; ?></option>
                            <?php } ?>
                        </select>
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
foreach ($score as $c) :
?>
    <div class="modal fade" id="editAdmin<?php echo $c->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning" id="exampleModalLabel">Edit Score</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" class="user" action="<?= base_url('Score/edit'); ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="grade">Grade</label>
                            <input type="hidden" name="id" value="<?= $c->id; ?>">
                            <select name="grade" id="grade" class="form-control" required>
                                <option value="">-- Select Grade --</option>
                                <?php { ?>
                                    <option value="<?= 'A'; ?>"><?= 'A'; ?></option>
                                    <option value="<?= 'B'; ?>"><?= 'B'; ?></option>
                                    <option value="<?= 'C'; ?>"><?= 'C'; ?></option>
                                    <option value="<?= 'D'; ?>"><?= 'D'; ?></option>
                                    <option value="<?= 'E'; ?>"><?= 'E'; ?></option>
                                <?php } ?>
                            </select>
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
<div class="modal fade" id="deleteAdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <a class="btn btn-danger" href="<?= base_url('score/delete/') . $c->id; ?>">Yes</a>
            </div>
        </div>
    </div>
</div>