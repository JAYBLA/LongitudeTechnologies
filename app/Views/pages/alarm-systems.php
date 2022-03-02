<?= $this->extend('layouts/baseInner') ?>

<?= $this->section('stylesheet') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="innerTopMargin"></section>
<section class="innerPages py-5 pb-3">
    <div class="container" data-aos="fade-up">

        <div class="innersection-title">
            <h3>ALARM <span>SYSTEMS</span></h3>
        </div>

        <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-start">
                <p>
                    Our company supplies, installs and maintains all vehicle security systems including Alarm systems,
                    Rear view cameras, Proximity cameras as well as dash cameras on all types of vehicles.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url() ?>/assets/images/alarm.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-12 mt-5 pt-4">
                <h4 class="bold">FEATURES</h4>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">ENGINE CUT-OUT</h5>
                        <p class="card-text">Disables an engine from starting until a hidden switch is pressed. The
                            switch completely cuts out the power and thus preventing engine start.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">AUTO ARMING</h5>
                        <p class="card-text">The alarm will automatically lock doors in case you accidentally leave the
                            doors unlocked. This helps in ensuring the security of your car and valuables within the
                            car.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">AUTO CENTRAL LOCKING</h5>
                        <p class="card-text">Close or Open all doors simultaneously with a click of a button provided in
                            the remote control device.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">SHOCK SENSORS</h5>
                        <p class="card-text">The Alarm System is able to detect force subjected to the car and activates
                            the siren. Scares criminals trying a break-in or steal detachable parts</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">DOOR LOCK ALARM</h5>
                        <p class="card-text">The security system automatically detects and tuns on siren when there is
                            an improperly closed door when the driver leaves the vehicle.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">ENGINE IMMOBILIZER</h5>
                        <p class="card-text">Automatically immobilizes the engine if the hidden killer switch is not
                            pressed within 90 seconds after you ignite the car engine. Siren and hazards turn on after
                            engine stop.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">ANTI-HIJACKING</h5>
                        <p class="card-text">The anti-hijacking feature activates hazards and siren in case the vehicle engine is running and either of the front doors is opened. To cancel the anti-hijacking feature, the driver should press the hidden killer switch once the door is properly closed</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">KEYLESS REMOTE CONTROL</h5>
                        <p class="card-text">Our Alarm system comes with two key-less remote controls with well labelled keys for various alarm system functions.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">ONE YEAR WARRANTY</h5>
                        <p class="card-text">Our car alarm system comes with a one year warranty covering firmware maintenance, upgrades and malfunctions caused by manufacturer.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>