<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/profile.jpg'); ?>">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">
                <?= $this->session->userdata('username'); ?>
            </div>
            <?php
            if ($this->session->userdata('status')) {
                echo "<div class='profile-usertitle-status'><span class='indicator label-success'></span>Online</div>";
            } else {
                echo "<div class='profile-usertitle-status'><span class='indicator label-danger'></span>Offline</div>";
            }
            ?>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <?php
        if ($this->uri->segment('1') == 'Dashboard') {
            echo "<li class='active'>";
        } else {
            echo "<li>";
        }
        ?><a href="<?= base_url('Dashboard'); ?>"><em class="fa fa-fw fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <?php
        if ($this->session->userdata('status') == 'admin_login') {
            if ($this->uri->segment('1') == 'Admin') {
                echo "<li class='parent active'>";
            } elseif ($this->uri->segment('1') == 'User') {
                echo "<li class='parent active'>";
            } else {
                echo "<li class='parent'>";
            }
            echo "<a data-toggle='collapse' href='#sub-item-1'>
            <em class='fa fa-fw fa-users'>&nbsp;</em> System Manager <span data-toggle='collapse' href='#sub-item-1' class='icon pull-right'><em class='fa fa-plus'></em></span>
        </a>
        <ul class='children collapse' id='sub-item-1'>
            <li>
                <a class='' href='";
            echo base_url('Admin');
            echo "
                '>
                    <span class='fa fa-fw fa-angle-double-right'>&nbsp;</span> Admin
                </a>
            </li>
            <li>
                <a class='' href='";
            echo base_url('User');
            echo "'>
                    <span class='fa fa-fw fa-angle-double-right'>&nbsp;</span> User
                </a>
            </li>
        </ul>";
        }
        ?>
        <?php
        if ($this->uri->segment('1') == 'Score') {
            echo "<li class='active'>";
        } else {
            echo "<li>";
        }
        ?><a href="<?= base_url('Score'); ?>"><em class="fa fa-fw fa-bar-chart">&nbsp;</em> Score</a></li>
        <?php
        if ($this->uri->segment('1') == 'Course') {
            echo "<li class='active'>";
        } else {
            echo "<li>";
        }
        ?><a href="<?= base_url('Course'); ?>"><em class="fa fa-fw fa-book">&nbsp;</em> Course</a></li>
        <?php
        if ($this->uri->segment('1') == 'Semester') {
            echo "<li class='parent active'>";
        } elseif ($this->uri->segment('1') == 'Semester1') {
            echo "<li class='parent active'>";
        } elseif ($this->uri->segment('1') == 'Semester2') {
            echo "<li class='parent active'>";
        } elseif ($this->uri->segment('1') == 'Semester3') {
            echo "<li class='parent active'>";
        } elseif ($this->uri->segment('1') == 'Semester4') {
            echo "<li class='parent active'>";
        } elseif ($this->uri->segment('1') == 'Semester5') {
            echo "<li class='parent active'>";
        } else {
            echo "<li class='parent'>";
        }
        ?><a data-toggle="collapse" href="#sub-item-2">
            <em class="fa fa-fw fa-calendar">&nbsp;</em> Semester <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
        </a>
        <ul class="children collapse" id="sub-item-2">
            <li>
                <a class="" href="<?= base_url('Semester1'); ?>">
                    <span class="fa fa-fw fa-angle-double-right">&nbsp;</span> Semester 1
                </a>
            </li>
            <li>
                <a class="" href="#">
                    <span class="fa fa-fw fa-angle-double-right">&nbsp;</span> Semester 2
                </a>
            </li>
            <li>
                <a class="" href="#">
                    <span class="fa fa-fw fa-angle-double-right">&nbsp;</span> Semester 3
                </a>
            </li>
            <li>
                <a class="" href="#">
                    <span class="fa fa-fw fa-angle-double-right">&nbsp;</span> Semester 4
                </a>
            </li>
            <li>
                <a class="" href="#">
                    <span class="fa fa-fw fa-angle-double-right">&nbsp;</span> Semester 5
                </a>
            </li>
        </ul>
        </li>
        <li><a href="#"><em class="fa fa-fw fa-firefox">&nbsp;</em> IP</a></li>
        <li><a href="<?= base_url('Login/logout'); ?>"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="<?= base_url('Dashboard'); ?>">
                    <em class="fa fa-home"></em>
                </a>
            </li>
            <li class="active"><?= $this->uri->segment('1'); ?></li>
        </ol>
    </div>
    <br><br>