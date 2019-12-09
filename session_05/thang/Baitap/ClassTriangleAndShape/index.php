<?php

include_once "Class/Triangle.php";
include_once "Class/Shape.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $default = true;
    if (!empty($_POST["side1"]) && !empty($_POST["side2"]) && !empty($_POST["side3"]))
        if (is_numeric($_POST["side1"]) && is_numeric($_POST["side2"]) && is_numeric($_POST["side3"])) {
            $triangle = new Triangle($_POST["color"], $_POST["side1"], $_POST["side2"], $_POST["side3"]);
            $default = false;
        }
    if ($default) {
        $triangle = new Triangle();
    }
}
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
        #container {
            width: 50%;
            position: absolute;
            margin-left: 20%;
            border: 1px gray solid;
        }

        legend {
            size: 14px;
        }

        fieldset {
            margin: 5px;
        }
        div{
            margin: 10px;
        }
    </style>
</head>
<body>
<div id="container">
    <form action="" method="post">
        <fieldset>
            <legend><b>Triangle</b></legend>
            <table>
                <tr>
                    <td>Type color of triangle:</td>
                    <td><input type="text" name="color"></td>
                </tr>
                <tr>
                    <td>Type length of first side's triangle:</td>
                    <td><input type="text" name="side1"</td>
                </tr>
                <tr>
                    <td>Type length of second side's triangle:</td>
                    <td><input type="text" name="side2"></td>
                </tr>
                <tr>
                    <td>Type length of third side's triangle:</td>
                    <td><input type="text" name="side3"></td>
                </tr>
            </table>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
    <div>
        <?php
        if (!empty($triangle)) {
            if ($default)
                echo "You didnt type a few input or format input not right, init triangle default with color BLACK, 3 side = 1.<br>";
            echo $triangle->toString();
        }
        ?>
    </div>
</div>
</body>
</html>