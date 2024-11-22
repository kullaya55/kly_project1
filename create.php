<?php
    require_once('connect.php');

    $category = "มะม่วง";
    $type = "น้ำดอกไม้";
    $amout = 45;

    $sql = "INSERT INTO `fruits` ( `category`, `type`, `amout`) VALUES ('".$category."', '".$type."', '".$amout."')";

    $result = $conn->query($sql);

    //นำข้อมูล $result มาเช็คข้อมูลว่า
    if($result){
        echo "สำเร็จแล้ว";
    }else{
        echo "ไม่สำเร็จ";
    }
?>