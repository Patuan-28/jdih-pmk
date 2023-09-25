<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>img/Frame 1.png" rel="icon">
    <link href="<?= base_url() ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="<?= base_url() ?>css/main.css">

    <!-- =======================================================
  * Template Name: Impact
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>
    <?= $this->include('front/layout/topbar') ?>
    <header id="header" class="header d-flex align-items-center">
        <?= $this->include('front/layout/navbar'); ?>
    </header>

    <main>
        <?= $this->renderSection('content'); ?>
    </main>

    <?= $this->include('front/layout/footer'); ?>
    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>js/main.js"></script>

</body>

</html>