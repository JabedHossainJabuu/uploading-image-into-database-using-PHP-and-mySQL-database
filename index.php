<?php
require_once './operations.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Image upload</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
        <h1 class="text-center my-3">Registration form</h1>

        <div class="container d-flex justify-content-center">
                <form action="display.php" class="w-50" method="POST"
                enctype="multipart/form-data">

                        <?php inputField("Username", "username", "", "text");?>
                        <?php inputField("Mobile", "mobile", "", "text");?>
                        <?php inputField("", "file", "", "file");?>

                        <button class="btn btn-dark" type="submit" name="submit">Submit</button>
                </form>
        </div>
</body>

</html>