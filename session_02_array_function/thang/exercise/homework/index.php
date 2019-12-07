<?php
//include_once "list.php";
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

        .title {
            font-family: 'Berkshire Swash', cursive;
            color: #0717ff;
            font-size: 20px;
        }

        .container {
            text-align: center;
            margin-top: 20px;
        }

        .form-control {
            /*width: 180px;*/
            /*height: 50px;*/
            border: none;
            border-radius: 15px;
            background-color: white;
            font-size: 16px;
            text-align: center;
        }

        .btn-danger {
            border: none;
            border-radius: 10px;
            background-color: #ff1d31;
            font-size: 16px;
        }
    </style>
</head>
<body>
<form action="addStudent.php" method="get">
    <center>
        <table class="container">
            <tr>
                <td class="title">Name:</td>
                <td><input type="text" class="form-control"  name="name"></td>
            </tr>
            <tr>
                <td class="title">Phone:</td>
                <td><input type="text" class="form-control" name="phone"></td>
            </tr>
            <tr>
                <td class="title">Adreess:</td>
                <td><input type="text" class="form-control"  name="address"></td>
            </tr>
            <tr>
                <td class="title">class:</td>
                <td><input type="text" class="form-control"  name="class"></td>
            </tr>
            <tr>
                <td class="title"><select name="role" style="font-size: 20px">
                        <option value="admin">Admin</option>
                        <option value="student" selected>Student</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input class=" btn-danger" type="submit" value="ADD USER"
                </td>
            </tr>
        </table>
    </center>
</form>
</body>
</html>