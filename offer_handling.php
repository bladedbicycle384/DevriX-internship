<?php
	include 'database_connect.php';
	
	$title = mysqli_real_escape_string($connection, $_POST["title"]);
    $description = mysqli_real_escape_string($connection, $_POST["description"]);
    $company = mysqli_real_escape_string($connection, $_POST["company"]);
    $salary = mysqli_real_escape_string($connection, $_POST["salary"]);

	$sql = "INSERT INTO Offers (title, description, company, salary) VALUES ('{$title}', '{$description}', '{$company}', $salary);";
	
	$connection->query($sql) or die("Couldn't connect to the database\n");
	header('Location: index.php');
?>