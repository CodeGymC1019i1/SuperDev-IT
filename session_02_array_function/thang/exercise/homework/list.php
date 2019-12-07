<?php
$listStudent = file_get_contents('data.json');
$arr = json_decode($listStudent, true);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        tr, td {
            border: solid 1px #000000;
        }
        body{
            background: hotpink;
        }
    </style>
    <title>Document</title>
</head>
<body>
<a href="index.php" style="color: black">Bach To Add</a>
<center>
    <table class="table table-hover table-dark">
        <?php
        for ($i = 0; $i < count($arr); $i++) {
            ?>
            <tr>
                <td><?php echo $arr[$i]["name"] ?></td>
                <td><?php echo $arr[$i]["phone"] ?></td>
                <td><?php echo $arr[$i]["address"] ?></td>
                <td><?php echo $arr[$i]["class"] ?></td>
                <td><?php echo $arr[$i]["role"] ?></td>
                <td><a href='delete.php?id=<?php echo $i ?> ' onclick="return confirm('You want to delete')">Delete</a></td>
                <td><a href='edit.php?id=<?php echo $i ?>' onclick="return confirm('You want to edit')">Edit</a></td>
            </tr>
        <?php } ?>
    </table>
</center>
</body>
</html>
