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
        .card-deck {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            }
            .card {
            margin: 10px;
            width: 18rem;
            }
            .card-img-top {
            max-height: 300px;
            object-fit: cover;
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
            <h1 class="display-4 fw-bold">คณะผู้บริหารสถานศึกษา</h1>
            <p>
                โครงสร้างบริหารงานผู้บริหารสถานศึกษา โรงเรียนเทศบาล 6 นครเชียงราย
            </p>
        </div>   
    </header>
    <!-- End section page-title -->

  

    <!-- Section Timeline-->
    <section class="container py-3" >
    <div class="container mt-5">
    <!-- CEO Level -->
    <div class="text-center mb-5">
      <div class="card-deck">
        <div class="card">
          <img src="asset/images/blog/bigboss.jpg" class="card-img-top" alt="CEO">
          <div class="card-body">
            <h5 class="card-title">นางอัมพร จันทนะเปลิน</h5>
            <p class="card-text">ผู้อำนวยการสถานศึกษา</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Level 2 - Heads of Departments -->
    <div class="text-center mb-5">
      <h2>หัวหน้าฝ่าย</h2>
      <div class="card-deck">
        <!-- Repeat for each head of department -->
        <div class="card">
          <img src="asset/images/blog/secon_boss1.jpg" class="card-img-top" alt="Head of Department 1">
          <div class="card-body">
            <h5 class="card-title">Jane Smith</h5>
            <p class="card-text">หัวหน้าฝ่ายการตลาด</p>
          </div>
        </div>
        <div class="card">
          <img src="asset/images/blog/secon_boss2.jpg" class="card-img-top" alt="Head of Department 2">
          <div class="card-body">
            <h5 class="card-title">Peter Brown</h5>
            <p class="card-text">หัวหน้าฝ่ายการเงิน</p>
          </div>
        </div>
        <div class="card">
          <img src="asset/images/blog/secon_boss3.jpg" class="card-img-top" alt="Head of Department 3">
          <div class="card-body">
            <h5 class="card-title">Emily White</h5>
            <p class="card-text">หัวหน้าฝ่ายทรัพยากรมนุษย์</p>
          </div>
        </div>
        <div class="card">
          <img src="asset/images/blog/secon_boss4.jpg" class="card-img-top" alt="Head of Department 4">
          <div class="card-body">
            <h5 class="card-title">Michael Green</h5>
            <p class="card-text">หัวหน้าฝ่ายเทคโนโลยี</p>
          </div>
        </div>
        <div class="card">
          <img src="asset/images/blog/secon_boss1.jpg" class="card-img-top" alt="Head of Department 1">
          <div class="card-body">
            <h5 class="card-title">Jane Smith</h5>
            <p class="card-text">หัวหน้าฝ่ายการตลาด</p>
          </div>
        </div>
        <div class="card">
          <img src="asset/images/blog/secon_boss2.jpg" class="card-img-top" alt="Head of Department 2">
          <div class="card-body">
            <h5 class="card-title">Peter Brown</h5>
            <p class="card-text">หัวหน้าฝ่ายการเงิน</p>
          </div>
        </div>
        <div class="card">
          <img src="asset/images/blog/secon_boss3.jpg" class="card-img-top" alt="Head of Department 3">
          <div class="card-body">
            <h5 class="card-title">Emily White</h5>
            <p class="card-text">หัวหน้าฝ่ายทรัพยากรมนุษย์</p>
          </div>
        </div>
        <div class="card">
          <img src="asset/images/blog/secon_boss4.jpg" class="card-img-top" alt="Head of Department 4">
          <div class="card-body">
            <h5 class="card-title">Michael Green</h5>
            <p class="card-text">หัวหน้าฝ่ายเทคโนโลยี</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Level 3 - Employees in Teams -->
    <div class="text-center mb-5">
      <h2>พนักงานทีม</h2>
      <div class="card-deck">
        <!-- Repeat for each employee -->
        <div class="card">
          <img src="asset/images/blog/01.png" class="card-img-top" alt="Employee 1">
          <div class="card-body">
            <h5 class="card-title">Alice Brown</h5>
            <p class="card-text">พนักงานทีมการตลาด</p>
          </div>
        </div>
        <div class="card">
          <img src="asset/images/blog/01.png" class="card-img-top" alt="Employee 2">
          <div class="card-body">
            <h5 class="card-title">Bob White</h5>
            <p class="card-text">พนักงานทีมการเงิน</p>
          </div>
        </div>
        <div class="card">
          <img src="asset/images/blog/01.png" class="card-img-top" alt="Employee 3">
          <div class="card-body">
            <h5 class="card-title">Charlie Green</h5>
            <p class="card-text">พนักงานทีมทรัพยากรมนุษย์</p>
          </div>
        </div>
        <div class="card">
          <img src="asset/images/blog/01.png" class="card-img-top" alt="Employee 4">
          <div class="card-body">
            <h5 class="card-title">Diana Black</h5>
            <p class="card-text">พนักงานทีมเทคโนโลยี</p>
          </div>
        </div>
        <div class="card">
          <img src="asset/images/blog/01.png" class="card-img-top" alt="Employee 5">
          <div class="card-body">
            <h5 class="card-title">Ethan Gray</h5>
            <p class="card-text">พนักงานทีมขาย</p>
          </div>
        </div>
      </div>
    </div>
  </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      
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