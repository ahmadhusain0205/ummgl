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
    <div class="col-xs-6 col-md-12">
        <div class="panel panel-default">
            <div class="panel-body easypiechart-panel">
                <h4 class="text-dark"><b>Lecture History</b></h4>
                <p>
                    Sistem ini di buat untuk merekap data perkuliahan yang sudah dilalui oleh mahasiswa dengan waktu tertentu.
                </p>
                <p>
                    Datanya sendiri diambil dari mata kuliah, nilai huruf, nilai angka, semester, ip, dan ipk.
                </p>
                <p>
                    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                </p>
                <p>
                    <b class="text-dark">Create</b>. Sabtu, 25<sup>th</sup> July 2020
                </p>
                <p>
                    --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                </p>
            </div>
        </div>
    </div>
</div>