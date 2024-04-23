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

//sql query
$sql = "SELECT * FROM user;";

//assing into result variable, data retrive from database
$result = $connection->query($sql);

//check data exists in table or not
if($result->num_rows>0){
    //read data
    while($row = $result->fetch_assoc()){
        echo $row['userid']."-".$row['username']."<br>";
    }
} else {
    //if there are no any resluts
    echo "No results";
}

//close the connection
$connection->close();

?>
 

    
</body>
</html>