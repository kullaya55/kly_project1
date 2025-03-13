<?php 
include_once('../authen.php'); 

// ตรวจสอบการกดปุ่ม submit
if (isset($_POST['submit'])) {
    // ตรวจสอบประเภทของไฟล์
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $file_type = mime_content_type($_FILES['file']['tmp_name']);
    $max_size = 2 * 1024 * 1024; // ขนาดไฟล์ไม่เกิน 2MB

    // ตรวจสอบประเภทไฟล์
    if (!in_array($file_type, $allowed_types)) {
        echo "Only image files (JPG, PNG, GIF) are allowed.";
        exit;
    }

    // ตรวจสอบขนาดไฟล์
    if ($_FILES['file']['size'] > $max_size) {
        echo "File is too large. Maximum size is 2MB.";
        exit;
    }

    // แยกชื่อไฟล์และนามสกุล
    $temp = explode('.', $_FILES['file']['name']);
    $new_name = uniqid('img_') . '.' . end($temp); // ใช้ uniqid เพื่อหลีกเลี่ยงการซ้ำกัน
    $url_upload = '../../../asset/images/carousel/' . $new_name;

    // ตรวจสอบว่าไฟล์สามารถอัปโหลดได้หรือไม่
    if (move_uploaded_file($_FILES['file']['tmp_name'], $url_upload)) {
        // เชื่อมต่อฐานข้อมูล
        $topic = $conn->real_escape_string($_POST['topic']);
        $detail = $conn->real_escape_string($_POST['detail']);
        
        // การใช้ prepared statement เพื่อป้องกัน SQL injection
        $stmt = $conn->prepare("INSERT INTO `carousel` (`topic`, `detail`, `image`, `updated_at`) VALUES (?, ?, ?, NOW())");
        $stmt->bind_param("sss", $topic, $detail, $new_name); // Binding parameters

        // Execute การเพิ่มข้อมูลลงในฐานข้อมูล
        if ($stmt->execute()) {
            // Redirect ไปที่หน้าหลักหลังจากเพิ่มข้อมูลสำเร็จ
            header('location:index.php');
        } else {
            echo "Error inserting data: " . $stmt->error;
        }

        // ปิดการเชื่อมต่อฐานข้อมูล
        $stmt->close();
        $conn->close();
    } else {
        echo "Upload unsuccessful!";
    }
} else {
    header('location:index.php');
    exit;
}
?>
