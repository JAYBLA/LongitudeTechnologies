<?= $this->extend('layouts/baseInner') ?>

<?= $this->section('stylesheet') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>   
<section class="innerTopMargin"></section>
    <section class="innerPages py-5 pb-3">
      <div class="container" data-aos="fade-up">

        <div class="innersection-title">         
          <h3>Precision <span>Agriculture</span></h3>          
        </div>

        <div class="row">
        <div class="col-lg-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-center">            
            <p>
            Longitude Technologies is FJ Dynamics’ authorized disritributor for Precision Ag products in Eastern Africa. <br>
            FJ Dynamics has a soluion that can meet any farmer’s need regardless of farm size or brand of machinery.FJ Dynamics’ recision ag products can be used on and with most equipment on the farm, regardless of the manufacturer.
            </p> 
          </div>
          <div class="col-lg-12 mt-5">
            <img src="<?= base_url() ?>/assets/images/smart precision agriculture.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 mt-5">          
            <img src="<?= base_url() ?>/assets/images/Ultimate precision solution from land preparation to harvesting.png" class="img-fluid" alt="">
            <p class="bold">Ultimate precision solution from land preparation to harvesting</p>
          </div>
          <div class="col-lg-6 mt-5">          
            <img src="<?= base_url() ?>/assets/images/Accuracy up to 2.5cm using RTK Base Station..png" class="img-fluid" alt="">
            <p class="bold">Accuracy up to 2.5cm using RTK Base Station.</p>
          </div>
          <div class="col-lg-6 mt-5">          
            <img src="<?= base_url() ?>/assets/images/fjdynamics autostreering kit.png" class="img-fluid" alt="">
            
          </div>
          <div class="col-lg-6 mt-5">          
            <img src="<?= base_url() ?>/assets/images/automatic and precise navigation.png" class="img-fluid" alt="">
            <img src="<?= base_url() ?>/assets/images/gps auto streering.jpg" class="img-fluid" alt="">
            <p class="bold">                      GPS Autosteering Kit for Tractor and Sprayer</p>
          </div>
          <div class="col-lg-6 mt-5">          
            <img src="<?= base_url() ?>/assets/images/tractor.png" class="img-fluid" alt="">
            
          </div>
          <div class="col-lg-6 mt-5">          
            <img src="<?= base_url() ?>/assets/images/fd dynamics base station.png" class="img-fluid" alt="">            
            <p class="bold">FD Dynamics Base Station for RTK Signals</p>
          </div>
        </div>

      </div>
    </section>    
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>