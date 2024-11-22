<?php
    require_once('connect.php');
    $sql = "SELECT * FROM article";
    $result = $conn->query($sql) or die($conn->connect_error);

    // print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        while($row = $result->fetch_assoc()){ 
    ?>
        <h1><?php echo $row['subject'] ?></h1>
        <h3><?php echo $row['sub_title'] ?></h3>
        <h5><?php echo $row['detail'] ?></h5>
        <a href="detail.php?id=<?php echo $row['id'] ?>">
            <div><img src="<?php echo $row['image'] ?>" alt="programer"></div>
        </a>
        <h5><?php echo $row['tag'] ?></h5>
        <h5><?php echo $row['updated_at'] ?></h5>
        <h5><?php echo $row['created_at'] ?></h5>
        <div>
            <a href="detail.php?id=<?php echo $row['id'] ?>">click</a>
        </div>
    <?php
        }
    ?>
</body>
</html>