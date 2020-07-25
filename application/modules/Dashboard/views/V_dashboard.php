<div class="row">
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Courses</h4>
                <div class="easypiechart" id="easypiechart-blue" data-percent="<?= $this->M_dashboard->get_data('Course')->num_rows(); ?>"><span class="percent"><?= $this->M_dashboard->get_data('Course')->num_rows(); ?> %</span></div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Score</h4>
                <div class="easypiechart" id="easypiechart-orange" data-percent="<?= $this->M_dashboard->get_data('Score')->num_rows(); ?>"><span class="percent"><?= $this->M_dashboard->get_data('Score')->num_rows(); ?> %</span></div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Semester</h4>
                <div class="easypiechart" id="easypiechart-teal" data-percent="<?= $this->M_dashboard->get_data('Semester')->num_rows(); ?>"><span class="percent"><?= $this->M_dashboard->get_data('Semester')->num_rows(); ?> %</span></div>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-md-3">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4>Users</h4>
                <div class="easypiechart" id="easypiechart-red" data-percent="<?= $this->M_dashboard->get_data('user')->num_rows(); ?>"><span class="percent"><?= $this->M_dashboard->get_data('user')->num_rows(); ?> %</span></div>
            </div>
        </div>
    </div>
</div>