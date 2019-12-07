<?php
include_once "function.php";
var_dump(readFileJson("listUser.json"));

?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user = [
        'username' => $username,
        'password' => $password
    ];
    $fileData = "listUser.json";
    $arrUser = readFileJson($fileData);
    array_push($arrUser, $user);
    saveDataToFile($fileData, $arrUser);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <script type="text/javascript" src="js/product.js"></script>
    <title>Document</title>
</head>
<body>
    <form class="box"  method="POST">
        <h1>Login</h1>
        <input type="text" name="username" id="username" placeholder="Username" maxlength="30">
        <input type="password" name="password" id="password" placeholder="Password" maxlength="30">
        <input type="submit" name="" value="Login">
    </form>
</body>
</html>