<?php 
include_once('../authen.php'); 

// เช็คว่ามีการส่ง id และเป็นตัวเลข
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die('<p style="color:red;">Invalid ID</p>');
}

$id = $_GET['id'];

// ใช้ Prepared Statement ป้องกัน SQL Injection
$stmt = $conn->prepare("SELECT first_name, last_name, username, status FROM `admin` WHERE `id` = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// ถ้าไม่เจอข้อมูล
if (!$row) {
    die('<p style="color:red;">ไม่พบข้อมูล Admin ที่ต้องการแก้ไข</p>');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Admin Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS Links -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <?php include_once('../includes/sidebar.php') ?>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"><h1>จัดการข้อมูลผู้ดูแลระบบ</h1></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard">หน้าแรก</a></li>
              <li class="breadcrumb-item"><a href="../admin">จัดการข้อมูลผู้ดูแลระบบ</a></li>
              <li class="breadcrumb-item active">แก้ไขข้อมูลผู้ดูแลระบบ</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">แก้ไขข้อมูลผู้ดูแลระบบ</h3>
        </div>

        <form role="form" action="update.php" method="post" id="editForm">
          <div class="card-body">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" disabled class="form-control" value="<?php echo htmlspecialchars($row['username']); ?>">
              <input type="hidden" name="username" value="<?php echo htmlspecialchars($row['username']); ?>" required>
            </div>

            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" name="first_name" id="firstName" 
                     placeholder="First Name" value="<?php echo htmlspecialchars($row['first_name']); ?>" required>
            </div>

            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" name="last_name" id="lastName" 
                     placeholder="Last Name" value="<?php echo htmlspecialchars($row['last_name']); ?>" required>
            </div>

            <div class="form-group">
              <label>เลือกสถานะผู้ดูแลระบบ</label>
              <select class="form-control" required name="status" >
                <option value="" disabled selected>สถานะผู้ดูแลระบบ</option>
                <option value="superadmin" <?php echo ($row['status'] == 'superadmin') ? 'selected' : ''; ?>>Super Admin</option>
                <option value="admin" <?php echo ($row['status'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
              </select>
            </div>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
          </div>

          <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">ยืนยันข้อมูล</button>
          </div>
        </form>
      </div>    
    </section>
  </div>
  <?php include_once('../includes/footer.php') ?>

</div>

<!-- JS Scripts -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../dist/js/adminlte.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>

<script>
  $(function () {
    $('#dataTable').DataTable();
  });

  // เพิ่ม Client-side Validation
  document.getElementById('editForm').onsubmit = function() {
    const firstName = document.getElementById('firstName').value.trim();
    const lastName = document.getElementById('lastName').value.trim();
    if (firstName === '' || lastName === '') {
      alert('กรุณากรอกข้อมูลให้ครบถ้วน');
      return false;
    }
    return true;
  };
</script>
</body>
</html>
