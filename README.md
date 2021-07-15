# Job board at DevriX
The task for my school internship at DevriX.

# How to use
* Download and install [XAMPP](https://www.apachefriends.org/download.html).
* Get the files from this repo and put them in the xampp/htdocs folder.
* Open the location you placed the files and create a new one named database_connect.php.
* Inside place the following code to get your database connection going:
```
<?php
$user = "*insert database user*";
$password = "*insert database password*";
$database = "*insert database name*";
$connection = new mysqli('localhost', $user, $password, $database);
?>
```
* Then from the XAMPP control panel open the shell, execute the "mysql" command and copy and paste the contents of the "database.sql" file.
* To see it work just open a browser and in the URL type in "localhost/proekt".
