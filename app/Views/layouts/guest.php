<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? "Documents" ; ?></title>

    <!--begin::Css-->
    <link rel="stylesheet" href="<?= base_url('assets_bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets_bootstrap/css/style.css') ?>">
    <!--end::Css-->

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous"/>

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous"/>
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!-- Main CSS File -->
    <link href="<?= base_url('assets_bootstrap/css/main.css')?>" rel="stylesheet">
</head>
<body >
    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('assets_bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets_bootstrap/vendor/php-email-form/validate.js')?>"></script>
    <script src="<?= base_url('assets_bootstrap/vendor/aos/aos.js')?>"></script>
    <script src="<?= base_url('assets_bootstrap/vendor/purecounter/purecounter_vanilla.js')?>"></script>
    <script src="<?= base_url('assets_bootstrap/vendor/glightbox/js/glightbox.min.js')?>"></script>
    <script src="<?= base_url('assets_bootstrap/vendor/swiper/swiper-bundle.min.js')?>"></script>
    <script src="<?= base_url('assets_bootstrap/vendor/imagesloaded/imagesloaded.pkgd.min.js')?>"></script>
    <script src="<?= base_url('assets_bootstrap/vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>

    <!-- Main JS File -->
    <script src="<?= base_url('assets_bootstrap/js/main.js')?>"></script>
</body>
</html>
