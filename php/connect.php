<?php
    error_reporting(E_ALL); // การเปิดให้แสดง error ทุกอย่าง ว่าผิดพลาดตรงไหน

    //เชื่อมต่อฐานข้อมูล
    $conn = new mysqli('localhost','root','','db_register'); 
    //การตั้งค่าภาษา
    $conn->set_charset('utf8');
    
    if($conn->connect_errno){
        echo "Connect error :".$conn->connect_error;
        //ให้แสดงข้อความเมื่อเกิดการ error
        exit(); //กรณีที่เกิด error ให้ exit ออกไปเลย
    }
    $base_path_blog = 'asset/images/';

    /*
        *** เป็นตัวเลขของ error code 
            echo $conn->connect_errno;
        *** จะเป็น error message
            echo $conn->connect_error;

        error_reporting(0); //ปิด error ในกรณีที่เราต้องการแสดง error ของเราเอง
    */


    // git rm -r --cached folder_name   คำสั่งสำหรับลบ folder ใน git
    
?>