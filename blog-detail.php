<?php
  require_once('connect.php');
  $sql ="SELECT * FROM article WHERE id_article='".$_GET['id_article']."'";
  $result = $conn->query($sql) or die($conn->error);

  if($result->num_rows >0){
    $row = $result->fetch_assoc();
  }else{
    echo "ไม่มีข้อมูล";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Detail</title>
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
    <header class="jarallax " data-jarallax='{"speed":0.6}'  style="background-image: url(<?php echo $row['image']?>);">
        <div class="page-image">
            <h1 class="display-4 fw-bold"><?php echo $row['subject'];?></h1>
            <p><?php echo $row['sub_title'];?></p>
        </div>   
    </header>
    <!-- End section page-title -->

    <!-- Section Blog -->
     <section class="container blog-content">
        <div class="row">
            <div class="col-12">
                <?php
                  echo $row['detail'];
                ?>
            </div>
            <div class="col-12">
              <hr>
              <p class="text-end text-muted">1 พฤศจิกายน 2567</p>
            </div>
            <div class="col-12">
              <div class="owl-carousel owl-theme">
                <section class="col-12 p2">
                  <!-- h-100 คือ การกำหนดให้ card มีขนาดเท่ากันทุก card -->
                  <div class="card h-100">
                    <a href="" class="wrapper-card-image">
                      <img src="asset/images/img-2.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body" style="height:150px;overflow: hidden;">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                      <a href="#" class="btn btn-primary w-100">Go somewhere</a>
                    </div>
                  </div>
                </section>

                <section class="col-12 p2">
                  <!-- h-100 คือ การกำหนดให้ card มีขนาดเท่ากันทุก card -->
                  <div class="card h-100">
                    <a href="" class="wrapper-card-image">
                      <img src="asset/images/img-2.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body" style="height:150px;overflow: hidden;">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                      <a href="#" class="btn btn-primary w-100">Go somewhere</a>
                    </div>
                  </div>
                </section>

                <section class="col-12 p2">
                  <!-- h-100 คือ การกำหนดให้ card มีขนาดเท่ากันทุก card -->
                  <div class="card h-100">
                    <a href="" class="wrapper-card-image">
                      <img src="asset/images/img-2.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body" style="height:150px;overflow: hidden;">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis vitae reiciendis dolorem voluptates. Nostrum, optio repellat iusto veritatis est voluptas accusamus, dolor rem molestiae a consectetur doloribus qui id.
                      Sapiente commodi repellendus, quas culpa vel nisi animi repudiandae harum quo recusandae! Modi esse veritatis repudiandae nam iure sint voluptatibus ab expedita, fugit beatae non possimus delectus quibusdam. Quo, officia.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                      <a href="#" class="btn btn-primary w-100">Go somewhere</a>
                    </div>
                  </div>
                </section>

                <section class="col-12 p2">
                  <!-- h-100 คือ การกำหนดให้ card มีขนาดเท่ากันทุก card -->
                  <div class="card h-100">
                    <a href="" class="wrapper-card-image">
                      <img src="asset/images/img-2.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body" style="height:150px;overflow: hidden;">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example Lorem ipsum dolor, sit amet consectetur adipisicing elit. In sunt numquam, ratione libero fugiat hic id nam aperiam nobis earum eveniet sapiente cum obcaecati at vero optio quam, aspernatur perferendis.text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                      <a href="#" class="btn btn-primary w-100">Go somewhere</a>
                    </div>
                  </div>
                </section>

                <section class="col-12 p2">
                  <!-- h-100 คือ การกำหนดให้ card มีขนาดเท่ากันทุก card -->
                  <div class="card h-100">
                    <a href="" class="wrapper-card-image">
                      <img src="asset/images/img-2.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body" style="height:150px;overflow: hidden;">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="p-3">
                      <a href="#" class="btn btn-primary w-100">Go somewhere</a>
                    </div>
                  </div>
                </section>
              </div>
            </div>
        </div>
     </section>
    <!-- End Section Blog -->
    <!-- เรียนถึง 18.4 -->

    <!-- Section Abount-->

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
    
    <!-- End Section Abount-->

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
              <a class="nav-link  " href="about.php">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="contact.php">ติดต่อเรา</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active " href="blog.php">Blog</a>
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


    <script src="node_modules/jquery/dist/jquery.js"></script>
    
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js""></script>
    <script src="asset/js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>

    
</body>
</html>