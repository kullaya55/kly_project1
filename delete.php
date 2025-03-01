<?php
    require_once('php/connect.php');

    $id = $_GET['id'];

    if(isset($id)){
        $sql = "DELETE FROM `fruits` WHERE `id` = '".$id."' ";
        $result = $conn->query($sql);
        // ตัวเช็คว่าข้อมูลมีอยู่ไหม โดนลบหรือยัง ลบสำเร็จหรือไม่
        // echo $conn->affected_rows;

        if($conn->affected_rows){
            echo"ลขข้อมูลสำเร็จ";
        }else{
            echo"ไม่มีข้อมูลให้ลบ";
        }

    }else{
        echo"ไม่มี id นี้";
    }
?>