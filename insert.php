<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $conn=mysqli_connect("localhost", "root", "", "twentyaugust");
    if ($conn) {
    echo "connected successfully<br>";
    } else {
    //echo mysql_connect_error();
    die("database connection failed..........");
    }
    $sql = 'INSERT INTO student (name,roll_no,address) values("sonali",33,"kokan")';
    if( mysqli_query($conn, $sql))
    {
        echo "Query inserted successfully";
    }
    ?>

    
</body>
</html>