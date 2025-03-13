<?php 
include_once('../authen.php'); // เชื่อมต่อฐานข้อมูลผ่าน authen.php ที่ควรรวม connect.php ไว้แล้ว

if (!isset($conn)) {
    die('<script>alert("Database connection error: ไม่พบการเชื่อมต่อฐานข้อมูล"); window.location.href="form-create.php";</script>');
}

if (isset($_POST['submit'])) {

    // ตรวจสอบว่าข้อมูลครบหรือไม่
    if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['status'])) {
        echo '<script>alert("กรุณากรอกข้อมูลให้ครบถ้วน"); window.location.href="form-create.php";</script>';
        exit();
    }

    // ตรวจสอบว่ามี username ซ้ำหรือไม่
    $check_sql = "SELECT id FROM `admin` WHERE `username` = ?";
    $check_stmt = $conn->prepare($check_sql);

    if ($check_stmt === false) {
        die('<script>alert("SQL Error: ' . $conn->error . '"); window.location.href="form-create.php";</script>');
    }

    $check_stmt->bind_param("s", $_POST['username']);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo '<script>alert("Username นี้มีอยู่ในระบบแล้ว"); window.location.href="form-create.php";</script>';
        exit();
    }
    $check_stmt->close();

    // เตรียมข้อมูลก่อนบันทึก
    $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $now = date("Y-m-d H:i:s");

    // SQL สำหรับเพิ่มข้อมูล
    $sql = "INSERT INTO `admin` 
            (`first_name`, `last_name`, `username`, `password`, `status`, `last_login`, `updated_at`, `created_at`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('<script>alert("SQL Error: ' . $conn->error . '"); window.location.href="form-create.php";</script>');
    }

    $stmt->bind_param("ssssssss", 
        $_POST['first_name'], 
        $_POST['last_name'], 
        $_POST['username'], 
        $hashed, 
        $_POST['status'], 
        $now, 
        $now, 
        $now
    );

    // บันทึกข้อมูล
    if ($stmt->execute()) {
        echo '<script>alert("เพิ่มข้อมูลเรียบร้อยแล้ว!"); window.location.href="index.php";</script>';
    } else {
        echo '<script>alert("เกิดข้อผิดพลาด ไม่สามารถเพิ่มข้อมูลได้: ' . $stmt->error . '"); window.location.href="form-create.php";</script>';
    }

    $stmt->close();
    $conn->close();

} else {
    // ถ้าเข้าถึงไฟล์นี้โดยตรง จะเด้งกลับหน้า index
    header('Location: index.php');
    exit();
}
