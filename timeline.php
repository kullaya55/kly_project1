<?php 
  require_once('php/connect.php');

  // ดึงข้อมูลจากฐานข้อมูล (เช่น URL)
  $sql = "SELECT url FROM article WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $_GET['id']); // ตรวจสอบ id ว่าเป็นตัวเลข
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $url = $row['url']; // ได้ URL จากฐานข้อมูล
  echo $url;
  $stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submit URL</title>
  <script>
    function openUrl() {
      var url = "<?php echo $url; ?>";  // ใช้ URL จาก PHP ที่ดึงมาจากฐานข้อมูล
      window.open(url, '_blank');  // เปิด URL ในแท็บใหม่
    }
  </script>
</head>
<body>

  <form method="post">
    <!-- ปุ่ม submit ที่คลิกแล้วเปิดหน้า URL -->
    <button type="button" class="btn btn-primary" onclick="openUrl()">อ่านเพิ่มเติม</button>
  </form>

</body>
</html>
