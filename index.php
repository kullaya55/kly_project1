<?php
  require_once('php/connect.php');
  $sql = "SELECT * FROM `article` WHERE `status` = 'true' ORDER BY `id_article` DESC LIMIT 6"; //กำหนดให้ดึงข้อมูลมาแค่ 6 บทความ
  // $sql = "SELECT * FROM `article` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
  $result = $conn->query($sql) ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullaya-Blog Index</title>
   <!-- favicons -->
   
    <!-- css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/stlye.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    

</head>
<body>
    <!-- Section Navbar -->
      <?php include_once('includes/navbar.php'); ?>
    <!-- End Section Navbar -->
    
    <!-- section Carousel -->
    <section id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1621857093087-7daa85ab14a6?q=80&w=1795&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <div class="carousel-caption">
              <h1 class="display-4 fw-bold">Web Developer 1</h1>
              <p>
                นักเขียนเว็บไซต์ (Html Css JavaScript)
              </p>
            </div>
            <div class="backscreen"></div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-img" style="background-image: url('https://plus.unsplash.com/premium_photo-1678565879444-f87c8bd9f241?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <div class="carousel-caption">
              <h1 class="display-4 fw-bold">Web Developer 2</h1>
              <p>
                นักเขียนเว็บไซต์ (AngularJs)
              </p>
            </div>
            <div class="backscreen"></div>
          </div>
          
        </div>
        <div class="carousel-item">
          <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1620825937374-87fc7d6bddc2?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
            <div class="carousel-caption">
              <h1 class="display-4 fw-bold">Web Developer 3</h1>
              <p>
                นักเขียนเว็บไซต์ (PHP MySql)
              </p>
            </div>
            <div class="backscreen"></div>
          </div>
        </div>

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

  
    <!-- Section  Jumbotron-->
    <section class="container-fluid mt-3 ">
      <div class=" p-5 bg-dark text-white rounded">
        <h1 class="border-short-bottom text-center">อยากเขียนเว็บไซต์เก่งๆๆๆโว้ยๆ</h1> 
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p> 
      </div>
      
    </section>
    <!-- End Section  Jumbotron-->

    <!-- Section Blog-->
     <section class="container">
      <h1 class="border-short-bottom-white text-center">Blog Kullaya</h1>
      <div class="row">
        <?php  
          while($row = $result->fetch_assoc()){ 
        ?>
        <section class="col-12 col-sm-6 col-md-4 p-2">
          <div class="card h-100">
            <a href="blog-detail.php?id_article=<?php echo $row['id_article']?>" class="wrapper-card-image">
              <img src="<?php echo $base_path_blog .$row['image']?>" class="card-img-top" alt="...">
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
        <?php } ?>
        
      </div>
     </section>
    <!-- End Section Blog-->



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