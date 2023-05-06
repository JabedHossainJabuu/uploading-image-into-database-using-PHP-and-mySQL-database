<?php

$con = mysqli_connect('localhost', 'root', '', 'imageUploadProject');

if (!$con) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>