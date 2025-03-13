<?php 
    include_once('../authen.php');

    // ดึง id จาก GET และตรวจสอบว่าเป็นตัวเลขหรือไม่
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // ถ้า id ไม่มี หรือ id ไม่ถูกต้อง ให้กลับหน้า index
    if ($id <= 0) {
        header('Location: index.php');
        exit();
    }

    // ป้องกันการลบผู้ดูแลระบบหลัก (id = 1)
    if ($id == 1) {
        echo '<script> 
                alert("ไม่สามารถลบผู้ดูแลระบบหลักได้!");
                window.location = "index.php"; 
              </script>';
        exit();
    }

    // เตรียมและประมวลผลคำสั่ง SQL (Prepared Statement) เพื่อความปลอดภัย
    $stmt = $conn->prepare("DELETE FROM `admin` WHERE `id` = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // ตรวจสอบผลลัพธ์และแจ้งเตือน
    if ($stmt->affected_rows > 0) {
        echo '<script>
                alert("ลบข้อมูลเรียบร้อยแล้ว!");
                window.location = "index.php"; 
              </script>';
    } else {
        echo '<script>
                alert("ไม่พบข้อมูล หรือ ไม่สามารถลบได้!");
                window.location = "index.php"; 
              </script>';
    }

    // ปิด Statement
    $stmt->close();
    $conn->close();
?>
