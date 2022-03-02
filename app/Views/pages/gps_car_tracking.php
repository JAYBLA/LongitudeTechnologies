<?= $this->extend('layouts/baseInner') ?>

<?= $this->section('stylesheet') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="innerTopMargin"></section>
<section class="innerPages py-5 pb-3">
    <div class="container" data-aos="fade-up">

        <div class="innersection-title">
            <h3>GPS <span>CAR TRACKING</span></h3>
        </div>

        <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center">
                <p style="font-size:1.5em;">
                    Track your vehicle using our Vehicle Tracking System anytime, day or night and from anywhere in the
                    entire country, region, continent and globe, all from the comfort of your mobile phone or Desktop
                    Computer. iPad, or even from your desktop. This system is an effective anti car theft system with
                    the ability to track your car from any location.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url() ?>/assets/images/car_tracking.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mt-5 pt-4">
                <h4 class="bold">Get Real time information on</h4>
               <h5><em>History Reports and Vehicle Route Playback</em></h5> 
                <ul class="longitude-list">
                    <li>Real-time Location Reports</li> 
                    <li>Mileage Reports<li>
                    <li>Idle Time Reports<li>
                    <li>Speed Reports<li>
                </ul>
            </div>
            <div class="col-lg-6 mt-5 pt-4">
            <img src="<?= base_url() ?>/assets/images/gps-car-pen.jpg" class="img-fluid" alt="">
            </div>

        </div>

    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>