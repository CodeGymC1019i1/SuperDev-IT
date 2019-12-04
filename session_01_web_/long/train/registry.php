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

    <h2>Register</h2>
    <form method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" name="btn_submit" value="Register">
    </form>

<!--    --><?php
//    include "process.php";
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        $username = $_POST["username"];
//        $password = $_POST["password"];
//
//        $data = [
//            "username" => $username,
//            "password" => $password
//        ];
//        $links = "data.json";
//        $arrUser = readFileJSON($links);
//        array_push($arrUser, $data);
//        saveDatatoFile($links,$arrUser);
//    }
//    ?>

<?php
    include "process.php" ;// Gọi hàm
    if ($_SERVER["REQUEST_METHOD" == "POST"]) {
        $username = $_GET['user'];
        $password = $_GET['password'];


    $data = ["username" => $username,
            "password" => $password
            ];

    $links = "data.json";
    $arrUser = readFileJSON($links);
    array_push($arrUser, $data);
    saveDatatoFile($links, $arrUser);
    }
?>

</body>
</html>