<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/stlye.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
</head>
<body>
    <!-- Section Navbar -->
      <?php include_once('includes/navbar.php'); ?>
    <!-- End Section Navbar -->
  <!-- section page-title -->
    <header class="jarallax " data-jarallax='{"speed":0.6}'  style="background-image: url('https://plus.unsplash.com/premium_photo-1679177183775-75c2e0d0d209?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
      <div class="page-image">
          <h1 class="display-4 fw-bold">ข้อมูลการติดต่อเรา</h1>
          <p>
            Kullaya Studio (เรียนรู้เว็บไซต์ไปพร้อมกัน)
          </p>
      </div>   
  </header>
  <!-- End section page-title -->

    <!-- Section Blog -->
     <section class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="border-short-bottom-white ">
                    รายละเอียด
                </h1>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card  h-100">
                    <div class="card-body">
                        <i class="fa-solid fa-address-card fa-4x py-2 text-info"></i>
                        <h4 class="card-title">ที่อยู่</h4>
                        <p class="card-text">เชียงราย</p>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card  h-100">
                    <div class="card-body">
                        <i class="fa-solid fa-square-phone fa-4x py-2 text-info"></i>
                        <h4 class="card-title">เบอร์โทรศัพท์</h4>
                        <p class="card-text">(+666)92 - 3919228</p>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card  h-100">
                    <div class="card-body">
                        <i class="fa-solid fa-envelope fa-4x py-2 text-info"></i>
                        <h4 class="card-title">อีเมลล์</h4>
                        <p class="card-text">kullaya.kp05@gmail.com</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            แบบฟอร์มติดต่อเรา
                        </h5>
                        <form method="post" action="php/contact.php">
                            <div class="row g-3">
                                <div class="form-group col-md-4">
                                    <label for="name">ชื่อ</label>
                                  <input type="text" id="name" name="name" class="form-control" required placeholder="กรุณากรอกชื่อ" aria-label="First name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone">เบอร์โทรศัพท์</label>
                                  <input type="text" id="phone" name="phone" class="form-control" required placeholder="กรุณากรอกเบอร์โทรศัพท์" aria-label="Last name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">อีเมล์</label>
                                  <input type="email" id="email" name="email" class="form-control" required placeholder="กรุณากรอกอีเมล์" aria-label="Last name">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="detail">ข้อความของคุณ</label>
                                <textarea id="detail" name="detail" rows="5" class="form-control" required placeholder="เขียนข้อความของคุณที่นี่"></textarea>
                              </div>
                              <button class="btn btn-primary d-block mx-auto mt-2" type="submit">
                                ส่งข้อความ
                              </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- End Section Blog -->


    <!-- Section Timeline-->
    <section class="page-title jarallax position-relative py-5" data-jarallax='{"speed":0.6}'  style="background-image: url('https://images.unsplash.com/photo-1487017159836-4e23ece2e4cf?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
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
              <a class="nav-link" href="about.php">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  active" href="contact.php">ติดต่อเรา</a>
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