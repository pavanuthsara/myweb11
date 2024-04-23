<?php include_once 'config.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    // sql command to retrive data
    $sql = "SELECT * FROM user;";

    // retrived data store in $result
    $result = mysqli_query($connection, $sql);

    // check number of records
    $resultCheck = mysqli_num_rows($result);

    // if query has 
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['userid']." ".$row['username']."<br>";
        }
    }
?>
    
</body>
</html>