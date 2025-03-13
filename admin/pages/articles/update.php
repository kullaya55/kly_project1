<?php 
include_once('../authen.php');

if (isset($_POST['submit'])) {
    $image_name = $_POST['data_file'];

    // ตรวจสอบการอัปโหลดไฟล์รูปภาพ
    if ($_FILES['file']['error'] == 0) {
        if (!getimagesize($_FILES['file']['tmp_name'])) {
            echo '<script> alert("ต้องอัพโหลดไฟล์ภาพเท่านั้น!")</script>';
            header('Refresh:0; url=index.php');
            exit;
        }

        $temp = explode('.', $_FILES['file']['name']);
        $image_name = round(microtime(true) * 9999) . '.' . end($temp);
        $url_upload = '../../../asset/images/blog/' . $image_name;

        if (!move_uploaded_file($_FILES['file']['tmp_name'], $url_upload)) {
            echo '<script> alert("ไม่สามารถอัพโหลดรูปภาพได้ โปรดลองอีกครั้ง")</script>';
            header('Refresh:0; url=index.php');
            exit;
        }

        // ลบไฟล์เก่าถ้าอัปโหลดใหม่
        $sql = "SELECT image FROM article WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_POST['id']);
        $stmt->execute();
        $stmt->bind_result($old_image);
        $stmt->fetch();
        $stmt->close();

        if ($old_image && file_exists('../../../asset/images/blog/' . $old_image)) {
            unlink('../../../asset/images/blog/' . $old_image);
        }
    }

    // ตรวจสอบค่า `tags[]`
    // $tag = isset($_POST['tags']) && is_array($_POST['tags']) ? join(',', $_POST['tags']) : 'all';
    $tag = isset($_POST['tags']) ? 'all,' . join(',', $_POST['tags']) : 'all';

    // ตรวจสอบค่า `status`
    $status = isset($_POST['status']) ? 'true' : 'false';

    // รับค่า `url` ที่กรอกในฟอร์ม
    $url = $_POST['url']; 

    // ใช้ `real_escape_string()` ป้องกัน SQL Injection
    $sql = "UPDATE `article`
            SET subject = ?, 
                sub_title = ?, 
                detail = ?, 
                image = ?, 
                tag = ?, 
                status = ?, 
                url = ?, 
                updated_at = NOW() 
            WHERE id = ?";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error in prepare statement: " . $conn->error); // แสดงข้อผิดพลาดจาก prepare()
    }

    // เชื่อมโยงตัวแปรกับคำสั่ง SQL
    $stmt->bind_param(
        "sssssssi", 
        $_POST['subject'], 
        $_POST['sub_title'], 
        $_POST['detail'], 
        $image_name, 
        $tag, // ตรวจสอบว่า `tags[]` ได้รับค่าที่ถูกต้อง
        $status, 
        $url,  
        $_POST['id']
    );

    if ($stmt->execute()) {
        echo '<script> alert("แก้ไขข้อมูลสำเร็จ")</script>';
        header('Refresh:0; url=index.php');
    } else {
        echo "Error updating data: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    header('Refresh:0; url=index.php');
    exit;
}
?>
