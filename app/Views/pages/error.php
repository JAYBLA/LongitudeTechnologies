<?= $this->extend('layouts/baseInner') ?>

<?= $this->section('stylesheet') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="innerTopMargin"></section>
    <section class="innerPages py-5 pb-3">
      <div class="container">

        <div class="innersection-title">         
          <h3 style="font-size:3em;">404 ! <span>PAGE NOT FOUND</span></h3>  
          <a class="btn longitude-btn-primary btn-lg" href="/">Back Home</a>       
        </div>
    </section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>