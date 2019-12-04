<?php
    include_once "function.php";
    include_once "delete.php";
    $user = readFileJSON("listUser.json");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Home</title>
</head>
<body>
        <div class="w3-container">
            <table class="w3-table-all w3-centered">
                <tr>
                    <th> ID </th>
                    <th> username </th>
                    <th> passsword</th>
                </tr>
                 <?php foreach ($user as $key => $value) { ?> 
                        <tr> 
                            <th> <?php echo $key; ?> </th>
                            <th> <?php echo $user[$key]['username']; ?> </th>
                            <th> <?php echo $user[$key]['password']; ?> </th>
                            <th> <a href="" onclick="<?php deleteUser($user, $key, "listUser.json");?>"> Xoá </a></th>
                            <th> <a href=""> Sửa </a></th>
                        </tr>
                <?php } ?>
            </table>
        </div>

    <?php 
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $passwordd = $_POST['password'];
            $user = [
                    "username" => $username,
                    "password" => $passwordd
            ];
            $fileData = "listUser.json";
            $arrUser = readFileJson($fileData);
            array_push($arrUser, $user);
            saveDataToFile($fileData, $arrUser);
            
        }
    ?>
</body>
</html>

