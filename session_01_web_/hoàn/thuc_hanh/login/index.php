<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin") {
        echo $username;
    } else{
        echo 'not correct';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>admin-login</title>
</head>
<body>

</body>
</html>