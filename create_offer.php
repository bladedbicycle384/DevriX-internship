<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create a new job offer</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="stylesheet" href="./css/master.css">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
	<ul class = "jobs-listing">
		<li class = "job-card">
			<form action = "offer_handling.php" method = "post">
			<h1>Enter your job offer's details</h1>
			<div class = "job-primary">
				Title:<br><input type = "text" name = "title" class = "job-title"><br>
				Company:<br><input type = "text" name = "company" class = "textarea"><br>
				Salary:<br><input type = "number" name = "salary"><br>
				Description:<br><textarea  name = "description"></textarea><br>
				<input type = "submit" value = "Create listing" class = "button">
			</div>
		</li>
	</ul>
	
</body>