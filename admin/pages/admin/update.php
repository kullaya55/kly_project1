<?php 
include_once('../authen.php'); 

if(!isset($_POST['submit'])){
    header('Location: index.php');
    exit;
}

// ดึงค่าจากฟอร์ม
$id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$status = $_POST['status'];

// เตรียม SQL และใช้ Prepared Statement
$sql = "UPDATE `admin` 
        SET `first_name` = ?, 
            `last_name` = ?, 
            `status` = ?, 
            `updated_at` = ? 
        WHERE `id` = ?";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);  // ตรวจสอบ SQL Error ที่ทำให้ prepare ไม่ผ่าน
}

$update_at = date("Y-m-d H:i:s");
$stmt->bind_param("ssssi", $first_name, $last_name, $status, $update_at, $id);


if ($stmt->execute()) {
    echo '<script>
            alert("Finished Updating!");
            window.location.href = "index.php";
          </script>';
} else {
    echo '<script>
            alert("Update Failed: '.$conn->error.'");
            window.location.href = "index.php";
          </script>';
}

$stmt->close();
$conn->close();
