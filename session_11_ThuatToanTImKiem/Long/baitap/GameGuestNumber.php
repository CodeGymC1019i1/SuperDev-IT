<?php
    $guess = 30;
    $number = range(1,100,1);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Số máy đoán: 30 </p>
<form method="post">
    <select >
        <option value="lower">lower</option>
        <option value="taller">taller</option>
        <option value="equal">equal</option>

    </select>
    <input type="submit" value="submit">
</form>


</body>
</html>