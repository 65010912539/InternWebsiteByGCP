<?php 
$pages = ['portfolio', 'internship', 'news'];
$current_page = basename($_SERVER['PHP_SELF'], ".php");
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
        .news-item {
            margin-bottom: 50px; /* เพิ่มระยะห่างระหว่างข่าว */
        }
        .news-item img {
            max-width: 100%;
            height: auto;
        }
        .news-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 10px;
        }
        .news-content {
            font-size: 1rem;
            margin-top: 10px;
        }

        /* ปรับตำแหน่งหัวข้อข่าว */
        .news-header {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: left; /* ปรับข้อความไปทางซ้าย */
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- ปุ่ม Member -->
                    <li class="nav-item">
                        <a class="btn btn-light ms-3" href="member.php">Member</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <!-- เปลี่ยนหัวข้อข่าว -->
        <div class="news-header">ข่าวสารคณะการบัญชีและการจัดการ</div>

        <!-- ข่าว 1 -->
        <div class="news-item">
            <img src="images/1News.jpg" alt="ข่าว 1" class="img-fluid">
            <div class="news-content">
                นิสิตคณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม ได้รับผลการตอบรับเข้าร่วมนำเสนอบทความในการประชุมวิชาการการวิจัยดำเนินงานแห่งชาติประจำปี 2568 ครั้งที่ 22 (OR-NET 2025) ระหว่างวันที่ 26 – 28 มีนาคม 2568 ณ TRUE ICON HALL, ICONSIAM กรุงเทพมหานคร<br><br>
                ผลงานที่เข้าร่วม ได้แก่<br>
                “การสร้างตัวแบบสำหรับการพยากรณ์มูลค่าการส่งออกมันสำปะหลังของไทยไปยังสาธารณรัฐประชาชนจีน”<br>
                🔸ผู้นำเสนอ : ธีรภัทร สรัลชนากรกุล<br>
                🔹อาจารย์ที่ปรึกษา: อาจารย์ ดร.อนุพงศ์ สุขประเสริฐ<br>
                “การวิเคราะห์และการพยากรณ์ปริมาณการส่งออกยางพาราของประเทศไทย”<br>
                🔸ผู้นำเสนอ : Mr.Reaksa Yi<br>
                🔹อาจารย์ที่ปรึกษา: อาจารย์ ดร.อนุพงศ์ สุขประเสริฐ
            </div>
        </div>

        <!-- ข่าว 2 -->
        <div class="news-item">
            <img src="images/2News.jpg" alt="ข่าว 2" class="img-fluid">
            <div class="news-content">
                เมื่อวันที่ 31 มีนาคม 2568 บุคลากรทีมวิศวกรผู้เชี่ยวชาญจากสำนักงานโยธาธิการและผังเมืองจังหวัดมหาสารคาม ลงพื้นที่ตรวจสอบอาคารบริหารธุรกิจสิรินธร อาคาร 11 ชั้น คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม เพื่อประเมินผลกระทบจากเหตุการณ์แผ่นดินไหวเมื่อวันที่ 28 มีนาคม 2568 ที่ผ่านมา<br><br>
                ทีมตรวจสอบได้ดำเนินการประเมินความเสียหายทางโครงสร้าง ทั้งในส่วนของฐานราก เสา คาน และพื้นอาคาร รวมถึงการแตกร้าวของผนังและวัสดุตกแต่ง เบื้องต้นได้ตรวจสอบอาคารและระบบต่างๆ แล้วพบว่าโครงสร้างอาคารมั่นคงแข็งแรง ไม่พบจุดเสี่ยงที่กระทบต่อความปลอดภัย โครงสร้างทั้งหมดปลอดภัยสามารถใช้งานได้ปกติ
            </div>
        </div>

        <!-- ข่าว 3 -->
        <div class="news-item">
            <img src="images/3News.jpg" alt="ข่าว 3" class="img-fluid">
            <div class="news-content">
                เมื่อวันที่ 16 มีนาคม 2568  ผู้ช่วยศาสตราจารย์ ดร.พันคม ศรีบุญลือ รองคณบดีฝ่ายบริหารและแผนพัฒนาองค์กร และ อาจารย์ ดร.อนุพงศ์ สุขประเสริฐ ผู้ช่วยคณบดีฝ่ายพัฒนานิสิตและนวัตกรรม คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม เข้าร่วมหารือการพัฒนาความร่วมมือระหว่างประเทศกับ Gaunxi Minzu University ในการและเปลี่ยนนิสิตระหว่าง 2 สถาบัน ทั้งในรูปแบบหลักสูตรระยะสั้น Summer Camp และรูปแบบ 1 ภาคการศึกษา Exchange Student การจัดทำหลักสูตรร่วมกันแบบ 2+2 และ 3+1 การแลกเปลี่ยนบุคคลากร และความร่วมมือทางการวิจัยระหว่างทั้ง 2 สถาบัน ณ นครหนานหนิง เขตปกครองตนเองกว่างซีจ้วง สาธารณรัฐประชาชนจีน
            </div>
        </div>

        <!-- ข่าว 4 -->
        <div class="news-item">
            <img src="images/4News.jpg" alt="ข่าว 4" class="img-fluid">
            <div class="news-content">
                เมื่อวันที่ 7 มีนาคม 2568 รองศาสตราจารย์ ดร.จรวย สาวิถี คณบดีคณะการบัญชีและการจัดการ พร้อมด้วยผู้บริหาร คณาจารย์และบุคลากร ร่วมแลกเปลี่ยนเรียนรู้กับบัณฑิตวิทยาลัยมหาวิทยาลัยมหาสารคาม ในโครงการ GS Roadshow 2025  ทั้งนี้ได้จัดขึ้นโดยมีวัตถุประสงค์เพื่อแลกเปลี่ยนการดำเนินงานการจัดการเรียนการสอนระดับบัณฑิตศึกษาของคณะ/หน่วยงาน ตลอดจนชี้แจงระเบียบข้อบังคับและรับฟังปัญหาข้อเสนอแนะเพื่อการบริหารจัดการการศึกษาระดับบัณฑิตศึกษา ณ ห้องประชุม Hall of Fame คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม
            </div>
        </div>

        <!-- ข่าว 5 -->
        <div class="news-item">
            <img src="images/5News.jpg" alt="ข่าว 5" class="img-fluid">
            <div class="news-content">
                เมื่อวันที่ 5 มีนาคม 2568 งานบริการวิชาการและกิจการพิเศษ คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม ได้จัดโครงการอบรมและบริการวิชาการ เรื่อง Digital Accounting สู่เส้นทาง Smart Accountant ณ MBS Co-working Space คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม ขึ้น สำหรับคณาจารย์ บุคลากร นิสิต และผู้ประกอบวิชาชีพบัญชี<br><br>
                โดยได้รับเกียรติจาก ผู้ช่วยศาสตราจารย์ ดร.พันคม ศรีบุญลือ รองคณบดีฝ่ายบริหารและแผนพัฒนาองค์กร เป็นประธานกล่าวเปิดโครงการฯ และ ผู้ช่วยศาสตราจารย์ ดร.ธัญญธร ศรีวิเชียร รองคณบดีฝ่ายบริการวิชาการและกิจการพิเศษ กล่าวรายงาน<br><br>
                การจัดโครงการในครั้งนี้มีวัตถุประสงค์เพื่อให้ผู้เข้าร่วมโครงการฯ ซึ่งเป็นคณาจารย์ นิสิต ผู้ประกอบวิชาชีพบัญชีมีความรู้ ความเข้าใจและสามารถนำความรู้ด้านบัญชีดิจิทัล และนวัตกรรมทางบัญชีที่มีความทันสมัยไปประยุกต์ใช้ในการลดขั้นตอนการทำงาน ตรวจ
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
