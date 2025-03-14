<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/stlye.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <style>
        .timeline {
            position: relative;
            padding: 20px 0;
        }
        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 4px;
            height: 100%;
            background: #007bff;
            transform: translateX(-50%);
        }
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }
        .timeline-item .timeline-content {
            background: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            width: 45%;
        }
        .timeline-item:nth-child(even) .timeline-content {
            margin-left: auto;
        }
        .timeline-item .timeline-icon {
            position: absolute;
            top: 15px;
            left: 50%;
            width: 20px;
            height: 20px;
            background: #007bff;
            border-radius: 50%;
            transform: translateX(-50%);
        }
    </style>
</head>
<body>
    <!-- Section Navbar -->
        <?php include_once('includes/navbar.php'); ?>
    <!-- End Section Navbar -->
    

    <!-- section page-title -->
    <header class="jarallax " data-jarallax='{"speed":0.6}'  style="background-image: url('https://plus.unsplash.com/premium_photo-1679177183775-75c2e0d0d209?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="page-image">
            <h1 class="display-4 fw-bold">เกี่ยวกับเรา</h1>
            <p>
                คุณไม่เก่งตั้งแต่เริ่ม แต่คุณต้องเริ่มก่อน ถึงจะเก่ง
            </p>
        </div>   
    </header>
    <!-- End section page-title -->

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
    <!-- Section  To Do-->
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-6 py-3 ps-lg-0">
                <!-- การนำ video จาก youtube มาใช้งาน -->
                <div class="ratio ratio-16x9"><!-- ratio ratio-16x9 กำหนดให้ youtube ย่อขยายตามขนาด -->
                    <iframe class="embed-responsive-item" style="max-width: 100%;height: 100%;" src="https://www.youtube.com/embed/9r1sbAmDFcM?si=IhSWVTadHbAf" frameborder="0" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-lg-6">
                <h2>ทำความรู้จักกับเราให้ดียิ่งขึ้น</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel temporibus similique accusantium sunt reiciendis impedit neque accusamus id exercitationem dolore provident illo debitis porro, molestias labore veritatis beatae dolorem quaerat?</p>
                <br>
                <h3>เราคาดหวังไว้ว่า...</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel temporibus similique accusantium sunt reiciendis impedit neque accusamus id exercitationem dolore provident illo debitis porro, molestias labore veritatis beatae dolorem quaerat?</p>
            </div>
        </div>
    </section>
    <!-- End Section  To Do-->

    <!-- Section Timeline-->
    <section class="container py-3" >
      <div class="container mt-1">
          <h2 class="text-center mb-4">Timeline</h2>
          <div class="timeline">
              <div class="timeline-item">
                  <div class="timeline-icon"></div>
                  <div class="timeline-content">
                      <h5>เหตุการณ์ที่ 1</h5>
                      <p>รายละเอียดของเหตุการณ์แรกที่เกิดขึ้นในไทม์ไลน์</p>
                  </div>
              </div>
              <div class="timeline-item">
                  <div class="timeline-icon"></div>
                  <div class="timeline-content">
                      <h5>เหตุการณ์ที่ 2</h5>
                      <p>รายละเอียดของเหตุการณ์ที่สองที่เกิดขึ้นในไทม์ไลน์</p>
                  </div>
              </div>
              <div class="timeline-item">
                  <div class="timeline-icon"></div>
                  <div class="timeline-content">
                      <h5>เหตุการณ์ที่ 3</h5>
                      <p>รายละเอียดของเหตุการณ์ที่สามที่เกิดขึ้นในไทม์ไลน์</p>
                  </div>
              </div>
              <div class="timeline-item">
                  <div class="timeline-icon"></div>
                  <div class="timeline-content">
                      <h5>เหตุการณ์ที่ 2</h5>
                      <p>รายละเอียดของเหตุการณ์ที่สองที่เกิดขึ้นในไทม์ไลน์</p>
                  </div>
              </div>
              <div class="timeline-item">
                  <div class="timeline-icon"></div>
                  <div class="timeline-content">
                      <h5>เหตุการณ์ที่ 3</h5>
                      <p>รายละเอียดของเหตุการณ์ที่สามที่เกิดขึ้นในไทม์ไลน์</p>
                  </div>
              </div>
              <div class="timeline-item">
                  <div class="timeline-icon"></div>
                  <div class="timeline-content">
                      <h5>เหตุการณ์ที่ 2</h5>
                      <p>รายละเอียดของเหตุการณ์ที่สองที่เกิดขึ้นในไทม์ไลน์</p>
                  </div>
              </div>
              <div class="timeline-item">
                  <div class="timeline-icon"></div>
                  <div class="timeline-content">
                      <h5>เหตุการณ์ที่ 3</h5>
                      <p>รายละเอียดของเหตุการณ์ที่สามที่เกิดขึ้นในไทม์ไลน์</p>
                  </div>
              </div>
          </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      
    </section>

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
          <a href="http:www.youtube.com" target="_blank">
            <i class="fa-brands fa-youtube fa-2x"></i>
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
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    
</body>
</html>