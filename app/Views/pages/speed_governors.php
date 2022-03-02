<?= $this->extend('layouts/baseInner') ?>

<?= $this->section('stylesheet') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="innerTopMargin"></section>
<section class="innerPages py-5 pb-3">
    <div class="container" data-aos="fade-up">

        <div class="innersection-title">
            <h3>SPEED <span>GOVENORS</span></h3>
        </div>

        <div class="row">
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-start">
                <p>
                We install high end and functionality proven speed govenors and limiters to all your vehicles. Our products are Approved by traffic control institutions in both Kenya and Tanzania.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url() ?>/assets/images/speed-govenors.png" class="img-fluid" alt="">
            </div>
        </div>

    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>