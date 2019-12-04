<?php
$customerlist = array ( 
    "1" => array ("ten" => "nguyen thanh tung",
                  "ngaysinh" => "02/04/1996",
                  "diachi" => "Ha Noi",
                  "anh" => "../img/tung.jpg"),
    "2" => array ("ten" => "hoan",
                  "ngaysinh" => "02/04/1994",
                  "diachi" => "Ha Noi",
                  "anh" => "../img/hoan.jpg"),
    "3" => array ("ten" => "Do Quang Thang",
                  "ngaysinh" => "02/04/1992",
                  "diachi" => "Ha Noi",
                  "anh" => "../img/thang.jpg"),
    "4" => array ("ten" => "Bach Long",
                  "ngaysinh" => "02/04/1996",
                  "diachi" => "Ha Noi",
                  "anh" => "../img/long.jpg"),
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
</head>
<body>
    <table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php
            foreach($customerlist as $key => $item){
            echo "<tr>";
            echo "<td>".$key."</td>";
            echo "<td>".$item['ten']."</td>";
            echo "<td>".$item['ngaysinh']."</td>";
            echo "<td>".$item['diachi']."</td>";
            echo "<td><image src ='".$item['anh']."' width = '60px' height ='60px'/></td>";
            echo "</tr>";
            }
        ?>
    </table>
</body>
</html>