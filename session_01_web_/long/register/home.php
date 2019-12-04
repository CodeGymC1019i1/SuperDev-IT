<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <h2>Home</h2>


    <?php
        $link ="data.json";
        include "process.php";
        include "delete.php";
        $array = readFileJSON($link);
        //echo $array[1]['username']; //username
        //echo $array[1]['password']; //password
    ?>

    <div class="w3-container">
        <table class="w3-table-all w3-centered">
            <tr>
                <th>STT</th>
                <th>username</th>
                <th>password</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>

            <?php foreach($array as $key => $value){ ?>
                <tr>
                    <th><?= $key ?></th>
                    <th><?= $array[$key]['username']?></th>
                    <th><?= $array[$key]['password']?></th>
                    <th><a href="" onclick="<?php deleteUser($array, $key, $link);?>">Delete</a></th>
                    <th><a href="">Edit</a></th>
                </tr>
            <?php }?>
        </table>
    </div>
</body>
</html>