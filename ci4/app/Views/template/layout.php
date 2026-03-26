<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('style.css'); ?>">
</head>
<body>

<header>
    <h1>Layout Sederhana</h1>
    <nav>
        <a href="<?= base_url('/'); ?>">Home</a>
        <a href="<?= base_url('/page/about'); ?>">About</a>
        <a href="<?= base_url('/page/contact'); ?>">Kontak</a>
    </nav>
</header>

<div class="container">
    <main>
        <?= $this->renderSection('content'); ?>
    </main>

    <aside>
        <h3>Widget Header</h3>
        <ul>
            <li><a href="#">Widget Link</a></li>
            <li><a href="#">Widget Link</a></li>
        </ul>
    </aside>
</div>

<footer>
    <p>© 2026 - Universitas Pelita Bangsa</p>
</footer>

</body>
</html>