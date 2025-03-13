<?php include_once('../authen.php'); ?>
<?php
if (isset($_POST['submit'])) {
    // ตรวจสอบประเภทของไฟล์
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $file_type = mime_content_type($_FILES['file']['tmp_name']);
    $max_size = 2 * 1024 * 1024; // ขนาดไฟล์ไม่เกิน 2MB

    if (!in_array($file_type, $allowed_types)) {
        echo "Only image files (JPG, PNG, GIF) are allowed.";
        exit;
    }

    if ($_FILES['file']['size'] > $max_size) {
        echo "File is too large. Maximum size is 2MB.";
        exit;
    }

    // แยกชื่อไฟล์กับนามสกุล
    $tag = isset($_POST['tags']) ? 'all,' . join(',', $_POST['tags']) : 'all';
    $status = isset($_POST['status']) ? 'true' : 'false';
    $temp = explode('.', $_FILES['file']['name']);
    $new_name = uniqid('img_') . '.' . end($temp); // ใช้ uniqid เพื่อหลีกเลี่ยงการซ้ำกัน
    $url_upload = '../../../asset/images/blog/' . $new_name;

    // ตรวจสอบว่าไฟล์สามารถอัพโหลดได้หรือไม่
    if (move_uploaded_file($_FILES['file']['tmp_name'], $url_upload)) {
        // เชื่อมต่อฐานข้อมูล

        // Escape ข้อมูลที่ได้รับจากฟอร์ม
        $subject = $conn->real_escape_string($_POST['subject']);
        $sub_title = $conn->real_escape_string($_POST['sub_title']);
        $detail = $conn->real_escape_string($_POST['detail']);
        $url = isset($_POST['url']) ? $conn->real_escape_string($_POST['url']) : '';

        // Debug ตรวจสอบค่าก่อนการบันทึก
        // var_dump($subject, $sub_title, $detail, $new_name, $tag, $status, $url);
        // exit;
        
        // การใช้ prepared statement เพื่อป้องกัน SQL injection
        $stmt = $conn->prepare("INSERT INTO `article` (`subject`, `sub_title`, `detail`, `image`, `tag`, `status`, `url`, `updated_at`, `created_at`) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NOW())");

        // Binding parameters (เรียงลำดับให้ตรงกับ SQL Statement)
        $stmt->bind_param("sssssss", $subject, $sub_title, $detail, $new_name, $tag, $status, $url);

        // Execute การเพิ่มข้อมูลลงในฐานข้อมูล
        if ($stmt->execute()) {
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
