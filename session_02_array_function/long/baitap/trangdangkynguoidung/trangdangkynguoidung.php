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
<form method="post">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="phone" placeholder="phone">
    <input type="submit" value="Gửi">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    if (empty($name) || empty($email) || empty($phone)) {

        echo "Thiếu thông tin trong 3 ô name, email, phone";
    } else {
        $contact = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
        ];
    $link = "users.json";
    $arrUser = readFileJSON($link);
    array_push($arrUser, $contact);
    saveDataToFile($link, $arrUser);

    }
}
?>

<?php

function readFileJSON($url) {
    $dataJson = file_get_contents($url);
    return json_decode($dataJson, true);
}

function saveDataToFile($url, $data){
    $dataJson = json_encode($data);
    file_put_contents($url, $dataJson)
}
?>
</body>
</html>