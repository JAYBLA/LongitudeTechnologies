<?= $this->extend('layouts/baseInner') ?>

<?= $this->section('stylesheet') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="innerTopMargin"></section>
<section class="innerPages py-5 pb-3">
    <div class="container" data-aos="fade-up">

        <div class="innersection-title">
            <h3>FUEL MONITORING</h3>
        </div>

        <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center">
                <p style="font-size:1.5em;">
                    Experience our Fuel Monitoring System and watch your daily, weekly and monthly expenses coming down
                    as your revenues go up. Our robust fuel monitoring system can be accessed from anywhere and at any
                    time. It helps curb fuel theft at the 3 common points i.e. fuel theft at the fuel station through
                    collaboration between drivers and attendants, fuel theft through siphoning of fuel from your tank
                    and through fuel-wasting behaviors including failure to service vehicles on time.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url() ?>/assets/images/fuel-monitoring.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-12 mt-5 pt-4">
                <h4 class="bold">FEATURES</h4>
                <p>The Fuel Monitoring and Management system comes with plenty of other intelligent features to help you
                    easily manage, control and monitor fuel consumption withinn your fleet.</p>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <img src="<?= base_url() ?>/assets/images/graphical_representation.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FUEL THEFT DETECTION </h5>
                        <p class="card-text">Graphical representation on the fuel consumption anomalies.</p>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <img src="<?= base_url() ?>/assets/images/engine-immobilization.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">ENGINE IMMOBILISATION </h5>
                        <p class="card-text">Disable or enable engine remotely by use of SMS Commands, Mobile phone Apps or internet connected desktop.</p>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <img src="<?= base_url() ?>/assets/images/real_time_track.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">REAL-TIME TRACK BY WEB SYSTEM</h5>
                        <p class="card-text">Track your real-time fuel consumption reports by use of internet connected PC or Mobile phone.</p>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <img src="<?= base_url() ?>/assets/images/reliable_communication.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">RELIABLE COMMUNICATION</h5>
                        <p class="card-text">Able to re-upload the location data in the event that the GSM signal is weak.</p>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <img src="<?= base_url() ?>/assets/images/refueling.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">RE-FUELLING REPORTS</h5>
                        <p class="card-text">Get detailed reports on all re-fueling instances for each of your vehicle in real time. Also get alerts on re-fueling activities</p>                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <img src="<?= base_url() ?>/assets/images/idling.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">IDLING ALARMS</h5>
                        <p class="card-text">Get detailed reports on idling durations as well as alarms on alarms exceeding set periods.</p>                        
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>