<?php 
$pages = ['index', 'portfolio', 'internship', 'news'];
$current_page = basename($_SERVER['PHP_SELF'], ".php");
if (!in_array($current_page, $pages)) {
    $current_page = 'index';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University News</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="intern.css">
    <style>
        body {
            margin-top: 80px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="./images/logo.png" alt="Logo">
                <span class="navbar-title ms-2">newspage</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <?php foreach ($pages as $page) : ?>
                        <?php if ($page != 'index') : ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == $page) ? 'active' : ''; ?>" href="<?php echo $page . '.php'; ?>">
                                <?php echo ucfirst($page); ?>
                            </a>
                        </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4 text-center">
        <h1>ข่าว</h1>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 University News. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>