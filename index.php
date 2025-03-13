<?php
  require_once('php/connect.php');
  $sql = "SELECT * FROM `article` WHERE `status` = 'true' ORDER BY `id` DESC LIMIT 6"; //กำหนดให้ดึงข้อมูลมาแค่ 6 บทความ
  // $sql = "SELECT * FROM `article` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
  $result = $conn->query($sql);

  $sql_car = "SELECT * FROM `carousel` ORDER BY `id` DESC LIMIT 3"; 
  $result_car = $conn->query($sql_car);

   // กำหนด base path ของภาพ
   $base_path_blog = 'asset/images/blog/'; // กำหนดให้เป็นเส้นทางที่เก็บรูปภาพ

   $base_path_carousel = 'asset/images/carousel/'; // กำหนดให้เป็นเส้นทางที่เก็บรูปภาพ


   function formatThaiDate($dateStr) {
    $thaiMonths = [
        1 => 'มกราคม', 2 => 'กุมภาพันธ์', 3 => 'มีนาคม', 4 => 'เมษายน',
        5 => 'พฤษภาคม', 6 => 'มิถุนายน', 7 => 'กรกฎาคม', 8 => 'สิงหาคม',
        9 => 'กันยายน', 10 => 'ตุลาคม', 11 => 'พฤศจิกายน', 12 => 'ธันวาคม'
    ];

    $date = new DateTime($dateStr);
    $year = $date->format('Y') + 543; // แปลง ค.ศ. เป็น พ.ศ.
    $month = $thaiMonths[(int)$date->format('m')];
    $day = $date->format('j');

    return "{$day} {$month} {$year}";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โรงเรียนเทศบาล 6 นครเชียงราย</title>
   <!-- favicons -->
   
    <!-- css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/stlye.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <script>
      function openUrl(url) {
        if (url) {
          window.open(url, '_blank');  // เปิด URL ในแท็บใหม่
        } else {
          alert('URL ไม่มีค่า');
        }
      }
    </script>

</head>
<body>
    <!-- Section Navbar -->
      <?php include_once('includes/navbar.php'); ?>
    <!-- End Section Navbar -->
    
    <section id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <?php  
          for ($i = 0; $i < $result_car->num_rows; $i++) {
            echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$i.'" '.($i == 0 ? 'class="active"' : '').' aria-label="Slide '.($i+1).'"></button>';
          }
        ?>
      </div>

      <div class="carousel-inner">
        <?php  
          $active = true;
          while($row_car = $result_car->fetch_assoc()){ 
        ?>
        <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
          <div class="carousel-img" style="background-image: url('<?php echo $base_path_carousel . $row_car['image']; ?>');">
            <div class="carousel-caption">
              <h1 class="display-4 fw-bold"><?php echo $row_car['topic']; ?></h1>
              <p><?php echo $row_car['detail']; ?></p>
            </div>
            <div class="backscreen"></div>
          </div>
        </div>
        <?php 
          $active = false;
          } 
        ?>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </section>
    <!-- End section Carousel -->

    <!-- Section Blog-->
    <section class="container">
      <h1 class="border-short-bottom-white text-center">ข่าวกิจกรรม</h1>
      <div class="row">
        <?php  
          while($row = $result->fetch_assoc()){ 
          $url = $row['url'];
        ?>
        <section class="col-12 col-sm-6 col-md-4 p-2">
          <div class="card h-100">
            <a href="blog-detail.php?id=<?php echo $row['id']?>" class="wrapper-card-image">
              <img src="<?php echo $base_path_blog .$row['image']?>" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['subject']?></h5>
              <p class="card-text"><?php echo $row['sub_title']?></p>
              <p class="text-end text-muted">
                <?php echo formatThaiDate($row['updated_at']); ?>
              </p>
            </div>
            <div class="p-3">
              <a class="btn btn-primary" onclick="openUrl('<?php echo $url; ?>')" >อ่านเพิ่มเติม</a>
            </div>
          </div>
        </section> 
        <?php } ?>
      </div>
    </section>
    <!-- End Section Blog-->

  
    <!-- Section  Jumbotron-->
    <section class="container-fluid mt-3 ">
      <div class=" p-5 bg-section2 text-white rounded">
        <h1 class="border-short-bottom text-center">อยากเขียนเว็บไซต์เก่งๆๆๆโว้ยๆ</h1> 
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p> 
      </div>
      
    </section>
    <!-- End Section  Jumbotron-->

    <!-- Section Blog-->
    <section class="container">
      <h1 class="border-short-bottom-white text-center">ข่าวกิจกรรม</h1>
      <div class="row">

        <?php  
          while($row = $result->fetch_assoc()){ 
          $url = $row['url'];
        ?>
        <section class="col-12 col-sm-6 col-md-4 p-2">
          <div class="card h-100">
            <a href="blog-detail.php?id=<?php echo $row['id']?>" class="wrapper-card-image">
              <img src="<?php echo $base_path_blog .$row['image']?>" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['subject']?></h5>
              <p class="card-text"><?php echo $row['sub_title']?></p>
              <p class="text-end text-muted">
                <?php 
                  echo formatThaiDate($row['updated_at']); 
                ?>
              </p>
            </div>
            <div class="p-3">
              <a class="btn btn-primary" onclick="openUrl('<?php echo $url; ?>')" >
                อ่านเพิ่มเติม
              </a>
            </div>
          </div>
        </section> 
        <?php } ?>

      </div>
     </section>
    <!-- End Section Blog-->
    <!-- เปิดข่าวกิจกรรม -->
    <section class="container">
      <div class="p-3 text-end">
        <a class="btn no-background" href="blog.php" target="_blank"><i class="far fa-calendar-plus"></i> ดูข่าวกิจกรรมเพิ่มเติม</a>
      </div>
     </section>
    <!-- ปุิดข่าวกิจกรรม -->

    <!-- ประกาศ -->
    <section class="container">
      <!-- Blog Posts Section -->
      <div class="container mt-5">
      <h1 class="border-short-bottom-white text-center">ข่าวกิจกรรม</h1>

        <!-- Blog Post 1 -->
        <div class="blog-post">
          <h2 class="blog-post-title">ประกาศการประชุมประจำปี</h2>
          <p class="blog-post-meta">วันที่: 9 มีนาคม 2025 โดย <a href="#">ผู้ดูแลเว็บไซต์</a></p>
          <p class="blog-post-content">
            ขอเชิญชวนทุกท่านเข้าร่วมการประชุมประจำปีที่จะจัดขึ้นในวันที่ 15 มีนาคม 2025 ที่สำนักงานใหญ่ของเรา...
            <br><br>
            ในการประชุมครั้งนี้ เราจะพูดถึงแผนงานในปีหน้าและผลการดำเนินงานในปีที่ผ่านมา...
          </p>
          <a href="https://www.facebook.com/share/p/165nKeQGyi/" class="btn btn-primary">อ่านเพิ่มเติม</a>
        </div>
        <!-- Blog Post 2 -->
        <div class="blog-post">
          <h2 class="blog-post-title">ประกาศเปิดรับสมัครงาน</h2>
          <p class="blog-post-meta">วันที่: 5 มีนาคม 2025 โดย <a href="#">ฝ่ายทรัพยากรมนุษย์</a></p>
          <p class="blog-post-content">
            บริษัทของเรากำลังเปิดรับสมัครพนักงานในหลายตำแหน่ง เช่น ฝ่ายขาย, ฝ่ายการตลาด, และฝ่ายเทคโนโลยี...
            <br><br>
            หากคุณสนใจสามารถสมัครได้ที่เว็บไซต์ของเรา หรือส่งประวัติส่วนตัวมาที่อีเมล...
          </p>
          <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
        </div>

        <!-- Blog Post 3 -->
        <div class="blog-post">
          <h2 class="blog-post-title">อัปเดตระบบใหม่</h2>
          <p class="blog-post-meta">วันที่: 1 มีนาคม 2025 โดย <a href="#">ฝ่ายไอที</a></p>
          <p class="blog-post-content">
            บริษัทของเราจะทำการอัปเดตระบบใหม่ในวันที่ 10 มีนาคม 2025 เพื่อเพิ่มประสิทธิภาพในการทำงาน...
            <br><br>
            ขอบคุณทุกท่านที่ให้ความร่วมมือในการทดสอบระบบใหม่และแจ้งข้อผิดพลาดที่พบ...
          </p>
          <a href="#" class="btn btn-primary">อ่านเพิ่มเติม</a>
        </div>

        
      </div>
    </section>
    <!-- End ประกาศ -->
    <!-- Section  To Do-->
    <section class="container py-5">
      <div class="row">
          <div class="col-lg-6 py-3 ps-lg-0">
          <h2>ทำความรู้จักกับเราให้ดียิ่งขึ้น</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel temporibus similique accusantium sunt reiciendis impedit neque accusamus id exercitationem dolore provident illo debitis porro, molestias labore veritatis beatae dolorem quaerat?</p>
              <br>
              <h3>เราคาดหวังไว้ว่า...</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel temporibus similique accusantium sunt reiciendis impedit neque accusamus id exercitationem dolore provident illo debitis porro, molestias labore veritatis beatae dolorem quaerat?</p>
          </div>
          <div class="col-lg-6">
            <!-- การนำ video จาก youtube มาใช้งาน -->
            <div class="ratio ratio-16x9"><!-- ratio ratio-16x9 กำหนดให้ youtube ย่อขยายตามขนาด -->
                <iframe class="embed-responsive-item" style="max-width: 100%;height: 100%;" src="https://www.youtube.com/embed/9r1sbAmDFcM?si=IhSWVTadHbAf" frameborder="0" allowfullscreen>
                </iframe>
            </div>
              
          </div>
      </div>
    </section>
    <!-- End Section  To Do-->

    <!-- Section footer -->
     <!-- text-md-start กำหนดให้ข้อความชิดด้านซ้ายมือในขนาดหน้าจอ md  -->
     <footer class="semi-footer p-5 text-center text-md-start">
      <div class="row">
        <div class="col-md-4">
          <a class="navbar-brand" href="#">
            <img src="asset/images/logo-wb.svg" alt="Bootstrap" width="30" height="24">
            Website-Demo
          </a>
          <p>
            <i class="fa-solid fa-square-phone"></i> 089-3919228 <br>
            <i class="fa-solid fa-envelope"></i> kullaya.kp05@gmail.com<br>
            <i class="fa-solid fa-address-card"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </p>
          <a href="http://www.facebook.com" target="_blank">
            <i class="fa-brands fa-square-facebook fa-2x"></i>
          </a>
          <a href="http:www.youtube.com" target="_blank">
            <i class="fa-brands fa-youtube fa-2x"></i>
          </a>
        </div>
        <div class="col-md-4">
          <h4>เมนู</h4>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
            <!-- ms-auto จัดตำแหน่งให้อยู่ทางขวามือ -->
            <li class="nav-item ">
              <a class="nav-link active" aria-current="page" href="index.php">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="employee.php">บุคลากร</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">ติดต่อเรา</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4>แผนที่</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.9147234501293!2d99.86136607506243!3d19.927998081460007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30d7071baa1f3b67%3A0xaa05f311ea02ae97!2z4LmC4Lij4LiH4LmA4Lij4Li14Lii4LiZ4LmA4LiX4Lio4Lia4Liy4LilIDYg4LiZ4LiE4Lij4LmA4LiK4Li14Lii4LiH4Lij4Liy4LiiICjguJ3guLHguYjguIfguKHguLHguJjguKLguKHguJvguKXguLLguKIp!5e0!3m2!1sth!2sth!4v1730092683303!5m2!1sth!2sth" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
     </footer>
     <footer class="footer">
      <span>COPYRIGHT &copy; 2024 | <a href="">kullaya admin</a> All Right Reserved</span>
     </footer>
    <!-- End Section footer -->


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>