<?php 
include ('./connect.php');

if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $mobile = $_POST['mobile'];
        $image = $_FILES['file'];

        echo $username;
        echo '<br>'; 
        echo $mobile;
        echo '<br>';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Display Data</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
	<h1>display</h1>
</body>
</html>