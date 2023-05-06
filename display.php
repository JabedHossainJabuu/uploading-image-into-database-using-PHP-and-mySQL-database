<?php
include './connect.php';

if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $mobile = $_POST['mobile'];
        $image = $_FILES['file'];

        $imagefilename = $image['name'];
        $imagefiletemp = $image['tmp_name'];
        $filename_separate = explode('.', $imagefilename);
        $file_extension = strtolower($filename_separate[1]);

        $extension = array('jpeg', 'jpg', 'png');
        if (in_array($file_extension, $extension)) {
                $upload_dir = 'images/';
                if (!file_exists($upload_dir)) {
                        mkdir($upload_dir, 0777, true);
                }
                $upload_image = $upload_dir . $imagefilename;
                move_uploaded_file($imagefiletemp, $upload_image);

                $sql = "INSERT INTO `registration` (name,mobile,image) values ('$username','$mobile','$upload_image')";

                $result = mysqli_query($con, $sql);

                if ($result) {
                        echo "<div class=\"alert alert-success\" role=\"alert\">
                <strong>Success!</string> Data Inserted.
              </div>";
                } else {
                        die(mysqli_error($con));
                }
        }
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

        <style>
                img{
                        width: 100%;
                }
        </style>
</head>

<body>
        <h1 class="text-center my-4">User Data</h1>
        <div class="container mt-5 d-flex justify-content-center">
                <table class="table table-bordered w-50">
                        <thead class="table-dark">
                                <tr>
                                        <th scope="col">Sl no</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Image</th>
                                </tr>
                        </thead>
                        <tbody>

                                <?php

                                $sql = "SELECT * FROM `registration`";
                                $result = mysqli_query($con, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $name = $row['name'];
                                        $image = $row['image'];
                                        echo '  <tr>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td><img src='.$image.' /></td>
                                </tr>';
                                }

                                ?>

                        </tbody>
                </table>
        </div>
</body>

</html>