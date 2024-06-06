<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('page_title', true) ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <script src="<?= base_url('js/script.js') ?>"></script>
    <!-- Add CSS or JS -->
    <?= $this->renderSection('add_css_or_js') ?>
    <style>
        #form_input {
            padding-bottom: 5px;
        }
    </style>
</head>
<body>
    <!-- Content -->
    <?= $this->renderSection('content') ?>
    
    <!-- Add Javascript -->
    <?= $this->renderSection('add_js') ?>
</body>
</html>