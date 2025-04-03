<?php 
$images = [
    '11.jpg' => [
        'name' => 'ชนิษฎา เทียงแสน',
        'id' => '65010912505',
        'major' => 'คอมพิวเตอร์ธุรกิจ',
        'faculty' => 'การบัญชีและการจัดการ',
        'university' => 'มหาวิทยาลัยมหาสารคาม'
    ],
    '2.jpg' => [
        'name' => 'นาสาววริษา พุลพุทธ',
        'id' => '65010912560',
        'major' => 'คอมพิวเตอร์ธุรกิจ',
        'faculty' => 'การบัญชีและการจัดการ',
        'university' => 'มหาวิทยาลัยมหาสารคาม'
    ],
    '3.jpg' => [
        'name' => 'นางสาวชลธิชา เอี่ยมละออ',
        'id' => '65010912506',
        'major' => 'คอมพิวเตอร์ธุรกิจ',
        'faculty' => 'การบัญชีและการจัดการ',
        'university' => 'มหาวิทยาลัยมหาสารคาม'
    ],
    '12.jpg' => [
        'name' => 'นายณภัทร พิมพรัตน์',
        'id' => '65010912509',
        'major' => 'คอมพิวเตอร์ธุรกิจ',
        'faculty' => 'การบัญชีและการจัดการ',
        'university' => 'มหาวิทยาลัยมหาสารคาม'
    ],
    '5.jpg' => [
        'name' => 'นายนิรันดร ศรีสวัสดิ์',
        'id' => '65010912532',
        'major' => 'คอมพิวเตอร์ธุรกิจ',
        'faculty' => 'การบัญชีและการจัดการ',
        'university' => 'มหาวิทยาลัยมหาสารคาม'
    ],
    '6.jpg' => [
        'name' => 'นายเกียรติศักดิ์ มูลบัวภา',
        'id' => '65010912539',
        'major' => 'คอมพิวเตอร์ธุรกิจ',
        'faculty' => 'การบัญชีและการจัดการ',
        'university' => 'มหาวิทยาลัยมหาสารคาม'
    ],
    '7.jpg' => [
        'name' => 'นายฐิติวัฒน์ ไชยฮะนิจ',
        'id' => '65010912528',
        'major' => 'คอมพิวเตอร์ธุรกิจ',
        'faculty' => 'การบัญชีและการจัดการ',
        'university' => 'มหาวิทยาลัยมหาสารคาม'
    ],
    '8.jpg' => [
        'name' => 'นายภัทรบดินทร์ ประภาสโนบล',
        'id' => '65010912556',
        'major' => 'คอมพิวเตอร์ธุรกิจ',
        'faculty' => 'การบัญชีและการจัดการ',
        'university' => 'มหาวิทยาลัยมหาสารคาม'
    ],
    '9.jpg' => [
        'name' => 'นายนิธิต ศรีวัง',
        'id' => '65010912531',
        'major' => 'คอมพิวเตอร์ธุรกิจ',
        'faculty' => 'การบัญชีและการจัดการ',
        'university' => 'มหาวิทยาลัยมหาสารคาม'
    ],
    '10.jpg' => [
        'name' => 'นายเจษฎา หลงกุล',
        'id' => '65010912526',
        'major' => 'คอมพิวเตอร์ธุรกิจ',
        'faculty' => 'การบัญชีและการจัดการ',
        'university' => 'มหาวิทยาลัยมหาสารคาม'
    ]
];

$image_id = isset($_GET['id']) && array_key_exists($_GET['id'] . ".jpg", $images) ? $_GET['id'] . ".jpg" : '11.jpg';
$image_description = $images[$image_id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดสมาชิก</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="details.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="images/logo.png" alt="Logo">
                <span class="navbar-title ms-2">BUSINESS COMPUTER</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Content -->
    <div class="container text-center mt-5">
        <h2>รายละเอียดภาพ</h2>
        <div class="detail-box">
            <img src="images/<?php echo $image_id; ?>" alt="<?php echo $image_description['name']; ?>" class="detail-image">
            <p class="mt-3"><strong>ชื่อ:</strong> <?php echo $image_description['name']; ?></p>
            <p><strong>รหัสนิสิต:</strong> <?php echo $image_description['id']; ?></p>
            <p><strong>สาขา:</strong> <?php echo $image_description['major']; ?></p>
            <p><strong>คณะ:</strong> <?php echo $image_description['faculty']; ?></p>
            <p><strong>มหาวิทยาลัย:</strong> <?php echo $image_description['university']; ?></p>
            <a href="index.php" class="btn btn-dark mt-3">กลับหน้าหลัก</a>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Bootstrap Agency. All Rights Reserved.</p>
        <p>Contact: <strong>0956539192</strong> | Email: <strong>65010912532@msu.ac.th</strong></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
