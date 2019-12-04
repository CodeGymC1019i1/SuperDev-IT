<?php
    include_once "function.php";
    var_dump(readFileJson("listUser.json"));
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $passwordd = $_POST['password'];
    $user = [
            'username' => $username,
            'password' => $passwordd
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
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td> username </td>
            <td> passsword</td>
        </tr>
    </table>
</body>
</html>

