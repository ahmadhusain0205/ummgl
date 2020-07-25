<div class="row">
    <div class="container">
        <div class="card col-lg-11">
            <div class="card-header">
                <div class="card-body">
                    <button type="button" class="btn btn-sm btn-success shadow mb-4 float-right" data-toggle="modal" data-target="#adminTambahModal">
                        <i class="fa fa-plus"></i> New Course
                    </button>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-datatable">
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th>Course</th>
                                    <th>SKS</th>
                                    <th width="20%">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = "1";
                                foreach ($course as $c) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $c->course; ?></td>
                                        <td><?= $c->sks; ?></td>
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
                <h5 class="modal-title text-primary" id="exampleModalLabel">Add Course</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" class="user" action="<?= base_url('Course/tambah'); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="course">Course</label>
                        <input type="text" class="form-control form-control-user" name="course" id="course" placeholder="Input Course" required>
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <select name="sks" id="sks" class="form-control" required>
                            <option value="">-- Select SKS --</option>
                            <?php { ?>
                                <option value="<?= '1'; ?>"><?= '1'; ?></option>
                                <option value="<?= '2'; ?>"><?= '2'; ?></option>
                                <option value="<?= '3'; ?>"><?= '3'; ?></option>
                                <option value="<?= '4'; ?>"><?= '4'; ?></option>
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
foreach ($course as $c) :
?>
    <div class="modal fade" id="editAdmin<?php echo $c->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning" id="exampleModalLabel">Edit Course</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form method="POST" class="user" action="<?= base_url('Course/edit'); ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="course">Course</label>
                            <input type="hidden" name="id" value="<?= $c->id; ?>">
                            <input type="text" class="form-control form-control-user" name="course" id="course" placeholder="Input Course" required value="<?= $c->course; ?>">
                        </div>
                        <div class="form-group">
                            <label for="sks">SKS</label>
                            <select name="sks" id="sks" class="form-control" required>
                                <option value="">-- Select SKS --</option>
                                <?php { ?>
                                    <option value="<?= '1'; ?>"><?= '1'; ?></option>
                                    <option value="<?= '2'; ?>"><?= '2'; ?></option>
                                    <option value="<?= '3'; ?>"><?= '3'; ?></option>
                                    <option value="<?= '4'; ?>"><?= '4'; ?></option>
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
                <a class="btn btn-danger" href="<?= base_url('Course/delete/') . $c->id; ?>">Yes</a>
            </div>
        </div>
    </div>
</div>