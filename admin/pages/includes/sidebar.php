<?php 
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }  
    // ดึงชื่อโฟลเดอร์สุดท้ายใน URL
    $uri = $_SERVER['REQUEST_URI'];
    $array = explode('/', trim($uri, '/'));
    $key = array_search("pages", $array);

    // ตรวจสอบว่าเจอ "pages" และมีค่าถัดไปหรือไม่
    if ($key !== false && isset($array[$key + 1])) {
        $name = $array[$key + 1];
    } else {
        $name = ''; // ตั้งค่าเริ่มต้นถ้าไม่เจอหรือไม่มีค่าถัดไป
    }
?>
<nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-info">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          เข้าใช้งานล่าสุด :
                <?php 
                  echo date_format(new DateTime($_SESSION['authen_last_login']), "j F Y H:i:s");
                ?>

          <i class="fa fa-th-large"></i>
        </a>
      </li>
    </ul>
</nav>
  <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light text-center d-block">Admin Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <!-- ให้ชื่อที่ login เข้ามาแสดงตรง sidebar -->
            <?php echo isset($_SESSION['authen_name']) ? $_SESSION['authen_name'] : 'Guest'; ?>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="../dashboard" class="nav-link <?php echo $name == 'dashboard' ? 'active': '' ?>">
              <i class="fas fa-tachometer-alt nav-icon"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <?php if($_SESSION['authen_status'] == 'superadmin'){ ?> <!-- เปิดตรวจสอบ session สำหรับตรวจสอบ superadmin -->
          <li class="nav-item">
            <a href="../admin" class="nav-link <?php echo $name == 'admin' ? 'active': '' ?>">
              <i class="fas fa-users-cog nav-icon"></i>
              <p>ข้อมูลผู้ดูแลระบบ</p>
            </a>
          </li>
          <?php } ?> <!-- ปิดตรวจสอบ session สำหรับตรวจสอบ superadmin -->
          <li class="nav-item">
            <a href="../articles" class="nav-link <?php echo $name == 'articles' ? 'active': '' ?>">
              <i class="fas fa-chalkboard-teacher nav-icon"></i>
              <p>ข้อมูลกิจกรรม</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../carousel" class="nav-link <?php echo $name == 'carousel' ? 'active': '' ?>">
              <i class="fas fa-chalkboard-teacher nav-icon"></i>
              <p>ข้อมูลประชาสัมพันธ์</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../contacts" class="nav-link <?php echo $name == 'contacts' ? 'active': '' ?>">
              <i class="fas fa-chalkboard-teacher nav-icon"></i>
              <p>Contacts</p>
            </a>
          </li>
          <li class="nav-header">Account Settings</li>
          <li class="nav-item">
            <a href="../../logout.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>