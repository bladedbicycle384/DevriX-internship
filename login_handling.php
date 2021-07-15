<?php 
    include 'database_connect.php';

    $name = mysqli_real_escape_string($connection, $_POST["name"]);
    $password = mysqli_real_escape_string($connection, $_POST["password"]);

    $sql = "SELECT username, password FROM `Admins`
            WHERE username LIKE '{$name};'";

    $result=$connection->query($sql) or die("Can't pull information from the database");


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if($row["password"]===$password){
            echo("Login successful");
            header('Location: '.$uri.'edits.php');
        }else{
            echo("Wrong password");
        }
    }else{
        echo("This user doesn't exist");
    }
?>