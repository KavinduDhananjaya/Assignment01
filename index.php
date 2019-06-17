<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/14/2019
 * Time: 10:50 PM
 */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        input {
            margin: 10px;
        }

        a {
            text-decoration: none;
            font-size: 30px;
        }

    </style>

</head>
<body>

<form action="page1.php" method="post">

    <label for="">First Name :</label>
    <input type="text" name="fname"><br>
    <label for="">Last Name :</label>
    <input type="text" name="lname"><br><br>

    <input type="submit" value="SEND">

</form>

</body>
</html>