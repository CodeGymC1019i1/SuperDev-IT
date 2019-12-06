<?php
$index = $_GET["id"];
$currentData = file_get_contents('data.json');
$arr = json_decode($currentData, true);
//var_dump($index);
$name = $arr[$index]["name"];
$phone = $arr[$index]["phone"];
$address = $arr[$index]["address"];
$class = $arr[$index]["class"];
$role = $arr[$index]["role"];
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
        body {
            background: blanchedalmond;
        }
        .form-control {
            border: none;
            border-radius: 20px;
            background-color: white;
            font-size: 22px;
            text-align: center;
        }
        .title {
            font-family: 'Berkshire Swash', cursive;
            color: #0717ff;
            font-size: 20px;
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
<form action="update.php" method="get">
    <center>
        <table>
            <tr style="display: none">
                <td><input type="text" name="id" value="<?php echo $index; ?>"></td>
            </tr>
            <tr>
                <td class="title">Name:</td>
                <td><input type="text" class="form-control" placeholder="input name" name="name"
                           value="<?php echo $name ?>"></td>
            </tr>
            <tr>
                <td class="title">Phone:</td>
                <td><input type="text" class="form-control" placeholder="input phone" name="phone"
                           value="<?php echo $phone ?>"></td>
            </tr>
            <tr>
                <td class="title">Adreess:</td>
                <td><input type="text" class="form-control" placeholder="input address" name="address"
                           value="<?php echo $address ?>"></td>
            </tr>
            <tr>
                <td class="title">class:</td>
                <td><input type="text" class="form-control" placeholder="input class" name="class"
                           value="<?php echo $class ?>"></td>
            </tr>
            <tr>
                <td><select name="role" class="title">
                        <option value="admin">ADMIN</option>
                        <option value="student" selected>STUDENT</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input class=" btn-danger" type="submit" value="UPPDATE"</td>

            </tr>
        </table>
    </center>
</form>
</body>
</html>
