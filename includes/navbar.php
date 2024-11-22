<?php  
  $file_name = basename($_SERVER['SCRIPT_FILENAME'],".php");
?>
<nav id="navbar" class="navbar navbar-expand-lg bg-alpha border-bottom border-body fixed-top " data-bs-theme="dark"">
      <div class="container">
          <a class="navbar-brand" href="index.php">
              <img src="asset/images/logo-wb.svg" alt="Bootstrap" width="30" height="24">
              Website-Demo
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarKey" aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarKey">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
            <!-- ms-auto จัดตำแหน่งให้อยู่ทางขวามือ -->
            <li class="nav-item">
              <a class="nav-link <?php echo $file_name == 'index' ? 'active' : '' ?>" href="index.php">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $file_name == 'employee' ? 'active' : '' ?>" href="employee.php">บุคลากร</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $file_name == 'about' ? 'active' : '' ?>" href="about.php">เกี่ยวกับเรา</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $file_name == 'contact' ? 'active' : '' ?>" href="contact.php">ติดต่อเรา</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo $file_name == 'blog' || $file_name == 'blog-detail' ? 'active' : '' ?>" href="blog.php">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>