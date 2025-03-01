<?php
    require_once('php/connect.php');
    $id = $_GET['id'];
    $category = "ส้ม2";
    $type = "น้ำผึ้ง2";
    $amout = 252;

    //isset คือ การเช็คค่าว่าตัวเปรนี้เกิดขึ้นหรือยัง
    if(isset($id)){
        $sql="UPDATE `fruits` SET `category` = '".$category."', `type` = '".$type."', `amout` = '".$amout."' WHERE `id` = '".$id."' ";
        $result = $conn->query($sql);
        //วิธีพิมพ์ตัวอักษร ตัวหนอน กด art + 96
        if($result){
            echo"สำเร็จ";
        }else{
            echo"ผิดพลาด";
        }
    }else{
        echo"ไม่มีข้อมูล Update";
    }
    


?>