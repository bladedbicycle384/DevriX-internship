<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jobs</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="stylesheet" href="./css/master.css">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
	<div class="site-wrapper">
		<header class="site-header">
			<h1 class="site-title"><a href="#">Job Offers</a></h1>
		</header>
		<a href="create_offer.php" id="new_offer"> Create a new job offer </a>
		
		<?php
			include 'database_connect.php';
			
			$sql = "SELECT id, title, description, company, salary FROM Offers;";
			$result = $connection -> query($sql);
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo ("<div class='job'>");
				echo ($row['title'] . " at " . $row['company'] . "</a><br><hr>");
				echo ("Description: " . $row['description'] . "<br><br>");
				echo ("Salary: " . $row['salary'] . " $" . "<br>");
				echo ("</div><br><br>");      
			}
		}
		
		include 'footer.php';
		?>
	</div>

</body>
</html>