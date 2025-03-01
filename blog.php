<?php
  require_once('php/connect.php');
  //ตรงนี้จะให้รู้ว่าเรากำลังอยู่หน้าเว็บไซต์ใน tag อะไร
  // if(isset($_GET['tag'])){ //ให้เช็คว่า มีค่าของ tag จริงไหม
  //   $tag = $_GET['tag'];
  // }
  // else{
  //   $tag = 'all';
  // }
  //เขียนแบบย่อ shot if การเขียนแบบลดรูป
  $tag = isset($_GET['tag']) ? $_GET['tag'] : 'all';
  // ตัวแปร tag เกิดขึ้นหรือยัง ?(ถ้า)ตัวเปรเกิดขึ้นแล้วให้กำหนดข้อมูลไป คือ $_GET['tag'] ถ้าไม่ได้กำหนดให้แสดง all


  $sql = "SELECT * FROM `article` WHERE `tag` LIKE '%".$tag."%' AND `status` = 'true'";
  $result = $conn->query($sql) ;
  if(!$result){
    header( "Location: blog.php" );
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ให้เปลี่ยน title ไปตามหััวข้อ page -->
    <title>Blog - Kullaya</title>
    <!-- COMMOn TAGS -->

    <!-- Search Engine -->
    <meta name="description" content="การสอนเกี่ยวกับการสร้างเว็บไซต์">
    <meta name="keywords" content="html, css, php, sql">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">

    <!-- Css link -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/stlye.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.css">
</head>
<body>
    <!-- Section Navbar -->
      <?php include_once('includes/navbar.php'); ?>
    <!-- End Section Navbar -->
    
    <!-- section page-title -->
    <header class="jarallax " data-jarallax='{"speed":0.6}'  style="background-image: url('https://plus.unsplash.com/premium_photo-1679177183775-75c2e0d0d209?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
      <div class="page-image">
          <h1 class="display-4 fw-bold">บทความ</h1>
          <p>
            สังคมแห่งการเขียนเว็บไซต์
          </p>
      </div>   
  </header>
  <!-- End section page-title -->

    <!-- Section Blog -->
     <section class="container py-5">
        <div class="row pb-4">
            <div class="col-12 text-center">
                <div class="btn-group-cuttom">
                  <a href="blog.php?tag=all">
                    <button class="btn btn-primary">ทั้งหมด</button>
                  </a>
                  <a href="blog.php?tag=html">
                    <button class="btn btn-primary">HTML</button>
                  </a>
                  <a href="blog.php?tag=css">
                    <button class="btn btn-primary">CSS</button>
                  </a>
                  <a href="blog.php?tag=javascript">
                    <button class="btn btn-primary">JavaScript</button>
                  </a>
                  <a href="blog.php?tag=php">
                    <button class="btn btn-primary">PHP</button>
                  </a>
                  <a href="blog.php?tag=mysql">
                    <button class="btn btn-primary">MySql</button>
                  </a>
                </div>
            </div>
        </div>
        <div class="row ">
          <?php
            if($result->num_rows){
              while($row = $result->fetch_assoc()){
          ?>
          <section class="col-12 col-sm-6 col-md-4 p-2">
            <div class="card h-100">
              <a href="blog-detail.php?id_article=<?php echo $row['id_article']?>" class="wrapper-card-image">
                <img class="card-img-top" src="<?php echo $base_path_blog.$row['image']?>" alt="Coding">
              </a>
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['subject']?></h5>
                <p class="card-text"><?php echo $row['sub_title']?></p>
              </div>
              <div class="p-3">
                <a class="btn btn-primary w-100" href="blog-detail.php?id_article=<?php echo $row['id_article'];?>">
                  อ่านเพิ่มเติม
                </a>
              </div>
            </div>
          </section>   
          <?php
              }
            }else{
          ?>
          <section class="col-12">
            <p class="text-center">ไม่มีข้อมูล</p>
          </section>
          <?php } ?>
        </div>
     </section>
    <!-- Section Blog -->

    <!-- Section Timeline-->

    <section class="page-title jarallax position-relative py-5" data-jarallax='{"speed":0.6}'  style="background-image: url('https://plus.unsplash.com/premium_photo-1679177183775-75c2e0d0d209?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="asset/images/logo-wb.svg" class="img-fluid" width="150" alt="">
                    <h2 class="display-4 fw-bold">Timeline About Us</h2>
                    <div class="star-rating">
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <span>☆</span>
                        <div class="star-current" style="width: 50%;">
                            <!-- style="width: 50%; คำสั่งจำนวนดาว -->
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                            <span>★</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </section>
    
    <!-- End Section Timeline-->

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
          <a href="http:www.youtube.com target="_blank"">
            <i class="fa-brands fa-youtube fa-2x""></i>
          </a>
        </div>
        <div class="col-md-4">
          <h4>เมนู</h4>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
            <!-- ms-auto จัดตำแหน่งให้อยู่ทางขวามือ -->
            <li class="nav-item ">
              <a class="nav-link" aria-current="page" href="index.php">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="employee.php">บุคลากร</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" href="about.php">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="contact.php">ติดต่อเรา</a>
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
    <script src="node_modules/jarallax/dist/jarallax.min.js""></script>
</body>
</html>