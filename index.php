
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <form action="form-process.php" method="post">
        <h3>Enter user details</h3>
        User ID : <input type="number" name="userid"> <br>
        User Name : <input type="text" name="username"> <br>
        <!-- <input type="button" value="Submit" name="button-submit"> -->
        <button type="submit">Submit</button> 
    </form>

    <?php 
    include_once 'config.php';

    $sql = "SELECT * FROM user;";
    $result = $connection->query($sql);

    if($result->num_rows>0){
        echo "<table>";
        while($row=$result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$row['userid']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    $connection->close();

    ?>

    <h3>Update details</h3>
    <form action="form-process.php" method="post">
        <h3>Enter user details</h3>
        User ID : <input type="number" name="userid"> <br>
        User Name : <input type="text" name="username"> <br>
        <!-- <input type="button" value="Submit" name="button-submit"> -->
        <button type="submit">Submit</button> 
    </form>
    
</body>
</html>