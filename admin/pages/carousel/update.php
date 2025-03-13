<?php 
include_once('../authen.php');

if (isset($_POST['submit'])) {
    // ตรวจสอบว่า id ถูกส่งมาหรือไม่ และเป็นตัวเลข
    if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
        echo '<script> alert("ข้อมูลไม่ถูกต้อง!"); window.location="index.php"; </script>';
        exit;
    }

    $id = (int) $_POST['id']; // แปลงให้เป็นตัวเลข
    $topic = trim(htmlspecialchars($_POST['topic'] ?? ""));
    $detail = trim(htmlspecialchars($_POST['detail'] ?? ""));
    $image_name = $_POST['data_file'] ?? ""; // ค่าเริ่มต้นของรูปภาพ

    // ตรวจสอบการอัปโหลดไฟล์รูปภาพ
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = mime_content_type($file_tmp);
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];

        if (!in_array($file_type, $allowed_types)) {
            echo '<script> alert("ไฟล์ต้องเป็น JPG, PNG หรือ GIF เท่านั้น!"); window.location="index.php"; </script>';
            exit;
        }

        // สร้างชื่อไฟล์ใหม่
        $temp = explode('.', $_FILES['file']['name']);
        $image_name = round(microtime(true) * 9999) . '.' . end($temp);
        $url_upload = '../../../asset/images/carousel/' . $image_name;

        if (!move_uploaded_file($file_tmp, $url_upload)) {
            echo '<script> alert("ไม่สามารถอัพโหลดรูปภาพได้ โปรดลองอีกครั้ง"); window.location="index.php"; </script>';
            exit;
        }

        // ลบไฟล์เก่าถ้าอัปโหลดใหม่
        $sql = "SELECT image FROM carousel WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->bind_result($old_image);
        $stmt->fetch();
        $stmt->close();

        if ($old_image && file_exists('../../../asset/images/carousel/' . $old_image)) {
            unlink('../../../asset/images/carousel/' . $old_image);
        }
    }

    // อัปเดตข้อมูล
    $sql = "UPDATE `carousel`
            SET topic = ?, 
                detail = ?, 
                image = ?, 
                updated_at = NOW() 
            WHERE id = ?";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error in prepare statement: " . $conn->error);
    }

    $stmt->bind_param("sssi", $topic, $detail, $image_name, $id); // **แก้เป็น "sssi"**

    if ($stmt->execute()) {
        echo '<script> alert("แก้ไขข้อมูลสำเร็จ"); window.location="index.php"; </script>';
    } else {
        echo "Error updating data: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    header('Location: index.php');
    exit;
}

?>
