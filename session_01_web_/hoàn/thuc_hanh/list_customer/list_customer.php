<?php
    $myArray = [
        '01' => [
            'name' => 'Nguyen Hoan 1',
            'age' => 25,
            'picture' => 'images/anh_dep_01.jpg'
        ],
        '02' => [
            'name' => 'Nguyen Hoan 2',
            'age' => 26,
            'picture' => 'images/anh_dep_02.jpg'
        ],
        '03' => [
            'name' => 'Nguyen Hoan 3',
            'age' => 26,
            'picture' => 'images/anh_dep_03.jpg'
        ]
    ];
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="list_customer.css" type="text/css">
</head>
<body>
    <table border="1">
        <caption>
            <h1>Danh sách khách hàng</h1>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Ảnh</th>
        </tr>

        <?php
        foreach($myArray as $key => $value) {
            echo "<tr>";
            echo "<th>".$key."</th>";
            echo "<th>".$value['name']."</th>";
            echo "<th>".$value['age']."</th>";
            echo "<td><img src ='".$value['picture']."' width = '100px' height ='100px'/></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>