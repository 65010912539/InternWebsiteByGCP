<?php 
$pages = ['index', 'portfolio', 'internship'];
$current_page = basename($_SERVER['PHP_SELF'], ".php");
if (!in_array($current_page, $pages)) {
    $current_page = 'index';
}

$images = [
    '11.jpg' => 'ชนิษฎา เทียงแสน',
    '2.jpg' => 'นาสาววริษา พุลพุทธ',
    '3.jpg' => 'นางสาวชลธิชา เอี่ยมละออ',
    '12.jpg' => 'นายณภัทร พิมพรัตน์',
    '5.jpg' => 'นายนิรันดร ศรีสวัสดิ์',
    '6.jpg' => 'นายเกียรติศักดิ์ มูลบัวภา',
    '7.jpg' => 'นายฐิติวัฒน์ ไชยฮะนิจ',
    '8.jpg' => 'นายภัทรบดินทร์ ประภาสโนบล',
    '9.jpg' => 'นายนิธิต ศรีวัง',
    '10.jpg' => 'นายเจษฎา หลงกุล'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internship System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="intern.css"> <!-- ไฟล์ CSS -->
    <style>
        body {
            margin-top: 80px;
        }

        /* ซ่อนปุ่มใน navbar ที่ไม่ต้องการ */
        .navbar-nav {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="./images/logo.png" alt="Logo">
                <span class="navbar-title ms-2">BUSINESS COMPUTER</span>
            </a>
            <!-- ปุ่ม Home -->
            <a class="btn btn-light ms-3" href="index.php">Home</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4 text-center">
        <h1>Member</h1>
        <p>สมาชิกกลุ่ม Google Clound Platform(GCP)</p>

        <!-- Internship Section -->
        <div id="internship" class="row mt-4">
            <?php foreach ($images as $file => $description) : ?>
                <div class="col-md-3 mb-4">
                    <a href="details.php?id=<?php echo pathinfo($file, PATHINFO_FILENAME); ?>">
                        <img src="images/<?php echo $file; ?>" alt="<?php echo $description; ?>" class="image-circle">
                    </a>
                    <p class="mt-2"><?php echo $description; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Internship System. All Rights Reserved.</p>
        <p>Contact: <strong>0956539192</strong> | Email: <strong>65010912532@msu.ac.th</strong></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var lastScrollTop = 0;
        var navbar = document.querySelector('.navbar');

        window.onscroll = function() {
            handleNavbarScroll();
        };

        function handleNavbarScroll() {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > 50) {
                navbar.classList.add('navbar-small');
            } else {
                navbar.classList.remove('navbar-small');
            }

            if (scrollTop > lastScrollTop) {
                navbar.style.transform = "translateY(-100%)";
            } else {
                navbar.style.transform = "translateY(0)";
            }
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        }

        navbar.addEventListener('mouseenter', function() {
            navbar.style.transform = "translateY(0)";
        });

        navbar.addEventListener('mouseleave', function() {
            if (window.pageYOffset > 50) {
                navbar.style.transform = "translateY(-100%)";
            }
        });
    </script>
</body>
</html>
