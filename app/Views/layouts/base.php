<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/custom.css">

    <title><?= $title ?> | LongitudeTechnologies</title>
    <?= $this->renderSection('stylesheet') ?>
  </head>
  <body>
  <?= $this->include('layouts/includes/header') ?>
  <?= $this->renderSection('content') ?>  

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?= base_url()?>/assets/js/custom.js"></script>
    <?= $this->renderSection('javascript') ?>
  </body>
</html>