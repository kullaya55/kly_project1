<?php
session_start();
require_once('../php/connect.php');

// ตั้งค่า timezone ทันที
date_default_timezone_set('Asia/Bangkok');

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM `admin` WHERE `username` = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if (!empty($row)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['authen_id'] = $row['id'];
            $_SESSION['authen_username'] = $row['username'];
            $_SESSION['authen_name'] = $row['first_name'] . ' ' . $row['last_name'];
            $_SESSION['authen_last_login'] = $row['last_login'];

            // ตั้งค่า session สถานะให้ตรงกับฐานข้อมูล
            $_SESSION['authen_status'] = strtolower($row['status']); // กรณีต้องการให้เช็คแบบไม่สนตัวพิมพ์เล็ก-ใหญ่

            // อัปเดต last_login
            $update = "UPDATE `admin` 
                      SET `last_login` = '".date("Y-m-d H:i:s")."' 
                      WHERE `id` = '".$row['id']."' ";

            $result_update = $conn->query($update);

            if($result_update){
                // Debug ตรวจสอบค่า session ได้เลยถ้าอยากชัวร์
                // print_r($_SESSION); exit();

                header('Location: pages/dashboard');
                exit();
            } else {
                echo '<script>alert("เกิดข้อผิดพลาด");</script>';
            }
        } else {
            echo '<script>alert("รหัสผ่านไม่ถูกต้อง");</script>';
        }
    } else {
        echo '<script>alert("ไม่พบข้อมูลผู้ใช้");</script>';
    }

    $stmt->close();
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="dist/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="dist/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="dist/img/favicons/site.webmanifest">
  <link rel="mask-icon" href="dist/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="dist/img/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="dist/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login to start your Admin</p>

      <form action="" method="post">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fas fa-lock"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Login</button>
          </div>
          <!-- /.col -->
        </div>
        
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
