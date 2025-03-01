<?php
    require_once("php/connect.php");

    $sql = "SELECT * FROM `fruits` WHERE category = 'ทุเรียน' ";
    
    $result = $conn->query($sql) or die($conn->error);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo $row['category'];
            echo $row['type'].':';
            echo $row['amout'].'<br>';
        }
        echo '<br>มีผลไม้ทั้งหมด'.$result->num_rows.'ชนิด';//นับจำนวนข้อมูล
    }else{
        echo "ไมีข้อมูล";
    }










        // คำสั่งที่ 1 MySQLi_Result::fetch_assoc() ข้อมูลที่ได้จะเป็น associative array
        // $row = $result->fetch_assoc();
        // echo '<pre>',print_r($row),'</pre>';
        // เข้าการเข้าถึงข้อมูล
        // echo $row['category'];
     // คำสั่งที่ 2 MysQLi_Result::fetch_row() ข้อมูลที่ได้จะเป็น indexed array
        // $row = $result->fetch_row();
        // echo '<pre>',print_r($row),'</pre>';
        //การเข้าถึงข้อมูล
        // echo $row['1'];

    // คำสั่งที่ 3 MysQLi_Result::fetch_array() ข้อมูลที่ได้จะเป็น indexed array และ associative array
        // $row = $result->fetch_array();
        // echo '<pre>',print_r($row),'</pre>';
        //การเข้าถึงข้อมูล ได้ทั้ง 2 แบบ คือ แบบ index กับ key
        // echo $row[1];
        // echo '<br>';
        // echo $row['category'];

        // คำสั่งที่ 4 MysQLi_Result::fetch_object() ข้อมูลที่ได้จะเป็น object
        // $row = $result->fetch_object();
        // echo '<pre>',print_r($row),'</pre>';
        //การเข้าถึงข้อมูล เป็นแบบ obect คือ ต้องการชี้ข้อมูลตัวไหนก็ชี้ไปที่ข้อมูลตัวนั้น
        // echo $row->category;
?>