<?php
        require_once('connect.php');
        // ตั้งค่า Secret Key
        $secretKey = '6LdrvOcqAAAAAJE9RJ88b1am7goOZLb0Z9BmTyyZ';

        // รับค่าจากฟอร์ม
        $response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';
        $remoteip = $_SERVER['REMOTE_ADDR'];

        // ตรวจสอบว่ามีการกรอก recaptcha หรือไม่
        if (empty($response)) {
            echo '<script>alert("กรุณายืนยันตัวตนด้วย reCAPTCHA");</script>';
            header('Refresh:0; url=../contact.php');
            exit();
        }

        // ส่งไปตรวจสอบกับ Google
        $url = "https://www.google.com/recaptcha/api/siteverify";
        $data = [
            'secret' => $secretKey,
            'response' => $response,
            'remoteip' => $remoteip
        ];

        // ใช้ cURL แทน file_get_contents เพื่อความปลอดภัย
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $result = curl_exec($ch);
        curl_close($ch);

        $resp = json_decode($result);

        if ($resp && $resp->success) {
            echo '<pre>',print_r($_POST),'</pre>'; // ตรงนี้คุณอาจเปลี่ยนเป็น redirect หรือการทำงานอื่นๆ
            $sql="INSERT INTO `contacts` (`name`, `phone`, `email`, `detail`, `created_at`) 
            VALUES ('".$_POST['name']."',
                    '".$_POST['phone']."',
                    '".$_POST['email']."',
                    '".$_POST['detail']."',
                    '".date("Y-m-d")."');"; //การเดิ่มวันที่ โดยใช้ฟังก์ชัน date
            $result = $conn->query($sql) or die($conn->error);
            if($result){
                
            }
            //XuDnGUs2uWD67h51CDzyPhw8VE4G7FvqbkeYpfYnft6
        } else {
            echo '<script>alert("Verification Recaptcha Failed!!!");</script>';
            header('Refresh:0; url=../contact.php');
            exit();
        }
    ?>
