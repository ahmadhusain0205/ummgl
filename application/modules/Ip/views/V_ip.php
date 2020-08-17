<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th width="50%">Course</th>
                            <th width="10%">SKS</th>
                            <th width="10%">Grade</th>
                            <th width="10%">Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = "1";
                        foreach ($semester1 as $se) :
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $se->course; ?></td>
                                <td><?= $se->sks; ?></td>
                                <td><?= $se->grade; ?></td>
                                <td><?= $se->semester; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <th colspan="2"><b>Total</b></th>
                            <td><?= $ip1; ?></td>
                            <td colspan="2" align="right">coba</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>