<?= $this->extend('layouts/baseInner') ?>

<?= $this->section('stylesheet') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="innerTopMargin"></section>
<section class="innerPages py-5 pb-3">
    <div class="container" data-aos="fade-up">

        <div class="innersection-title">
            <h3>SATELLITE <span>IMAGES</span></h3>
        </div>

        <div class="row">
            <div class="col-lg-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-start">
                <h3 class="bold">SATELLITE MAGE DATA FOR AGRICULTURE</h3>
                <p>
                    Longitude Technologies company limited is the official reseller of the American company called
                    Planet which provide geospatial data from two main constellation Planetscope and Skysat <br>

                    Medium resolution PlanetScope at 3m per pixel offers global, near-daily coverage of 90% of the
                    Earth's landmass, with archive dating back to 2016. <br>

                    Our high resolution SkySat has a 50cm per pixel tasking constellation with limited, on-demand
                    archive. <br>
                    SkySat would require a new tasking order; the minimum area coverage per tasking is 25 sq km.
                    Longitude technologies delivers Planet satellite images for different industry use cases including
                    Agriculture, Civil Government, Forestry and Land Use, Emergency and Disaster Management.


                </p>
            </div>
            <div class="col-lg-12 mt-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title color-primary">SATELLITE IMAGE DATA IN EMERGENCY AND DISASTER MANAGEMENT</h5>
                        <h6 class="bold">FIRES ON MOUNT KILIMANJARO</h6>
                        <p class="card-text">Kilimanjaro Region, Tanzania Oct 12, 2020 <br>
                           <b>Source:</b> <em> PlanetScope</em> <br>
                            Forest and brush fires swept over the slopes of Mount Kilimanjaro, Tanzania in mid-October
                            2020. This PlanetScope image, collected on October 12, captured the dense smoke that covered
                            large portions of the mountainside.
                        </p>
                    </div>
                    <img src="<?= base_url() ?>/assets/images/kilimanjaro-fire.jpg" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col-lg-12 mt-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title color-primary">SATELLITE IMAGE DATA FOR AGRICULTURE</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                        <img src="<?= base_url() ?>/assets/images/agriculture1.jpg" class="card-img-bottom" alt="...">
                        </div>
                        <div class="col-md-4">
                        <img src="<?= base_url() ?>/assets/images/agriculture2.jpg" class="card-img-bottom" alt="...">
                        </div>
                        <div class="col-md-4">
                        <img src="<?= base_url() ?>/assets/images/agriculture3.jpg" class="card-img-bottom" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title color-primary">SATELLITE IMAGE DATA FOR FORESTRY & LAND USE</h5>
                        <h6 class="bold">TROPICAL FOREST, VIRUNGA NATIONAL PARK</h6>
                        <p class="card-text">Democratic Republic of the CongoJun 28, 2020<br>
                           <b>Source:</b> <em> Skysat</em> <br>
                           Tropical rainforests host the most biological diversity on Earth. High-resolution satellite imagery can help map these areas—which are often remote and difficult to access—down to the individual tree.
                        </p>
                    </div>
                    <img src="<?= base_url() ?>/assets/images/tropical-forest.jpg" class="card-img-bottom" alt="...">
                </div>
            </div>
            <div class="col-lg-6 mt-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title color-primary">SATELLITE IMAGE DATA IN CIVIL GOVERNMENT</h5>
                        <h6 class="bold">QUIET STREETS IN SUDAN</h6>
                        <p class="card-text">Omdurman, SudanApr 23, 2020<br>
                           <b>Source:</b> <em> Skysat</em> <br>
                           The normally bustling streets of Omdurman (across the Nile River from Sudan’s capital, Khartoum) were relatively quiet on April 23, 2020. As in much of the world, the region was under lockdown in response to the COVID-19 pandemic. According to Al Jazeera, residents were only allowed out for essentials within their own neighborhoods.
                        </p>
                    </div>
                    <img src="<?= base_url() ?>/assets/images/streets.jpg" class="card-img-bottom" alt="...">
                </div>
            </div>
        </div>

    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<?= $this->endSection() ?>