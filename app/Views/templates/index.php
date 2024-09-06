<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <!-- Typhography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
        <!-- Navbar Start -->
        <?= $this->include('templates/navbar'); ?>
        <!-- Navbar End -->
        
        <!-- Content Start -->
        <?= $this->renderSection('content'); ?>
        <!-- Content End -->

        <!-- Footer Start -->
        <?= $this->include('templates/footer')?>
        <!-- Footer End -->
    
</body>
</html>