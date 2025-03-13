<?php
include_once('../authen.php'); // ดึงการเชื่อมต่อฐานข้อมูล

// ตรวจสอบว่ามีการส่ง id มาหรือไม่
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);

    // สร้างคำสั่ง SQL เพื่อลบข้อมูล
    $sql = "DELETE FROM carousel WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("ลบข้อมูลสำเร็จ!");</script>';
    } else {
        echo '<script>alert("เกิดข้อผิดพลาด: ' . $conn->error . '");</script>';
    }
} else {
    echo '<script>alert("ไม่พบข้อมูลที่ต้องการลบ");</script>';
}

// กลับไปหน้า index.php
header('Refresh:0; url=index.php');
?>
