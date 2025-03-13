<?php 
   // session_start();
   // require_once('../../../php/connect.php');
   // if( !isset($_SESSION['authen_id'] ) ){
   //    header('Location: ../../login.php');  
   // }

   session_start();
    require_once('../../../php/connect.php');

    $uri = $_SERVER['REQUEST_URI'];
    $array = explode('/', trim($uri, '/'));
    $key = array_search("pages", $array);

    // ตรวจสอบว่าเจอ "pages" และมีค่าถัดไปหรือไม่
    if ($key !== false && isset($array[$key + 1])) {
        $name = $array[$key + 1];
    } else {
        $name = ''; // ตั้งค่าเริ่มต้นถ้าไม่เจอหรือไม่มีค่าถัดไป
    }

    // เช็ค session และสิทธิ์
    if (!isset($_SESSION['authen_id'])) {
        header('Location: ../../login.php');
        exit;
    } 
    else if ($name == 'admin' && $_SESSION['authen_status'] != 'superadmin') {
        header('Location: ../dashboard/');
        exit;
    }


    // ตรวจสอบการเชื่อมต่อฐานข้อมูล
    if (!isset($conn)) {
        die('Database connection failed.');
    }

    // ตรวจสอบ Session
    if (!isset($_SESSION['authen_id'])) {
        header('Location: ../../login.php');
        exit();
    }
?>