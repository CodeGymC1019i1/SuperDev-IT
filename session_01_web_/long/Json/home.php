<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <h2>Home</h2>


    <?php
        $link ="data.json";
        include "process.php";
        $array = readFileJSON($link);
        //echo $array[1]['username']; //username
        //echo $array[1]['password']; //password
    ?>
    <script>
        function deleteUser(id)
        {
            alert('ABC');
            //$.get(url:/detete/id);
        }
    </script>

    <div class="w3-container">
        <table class="w3-table-all w3-centered">
            <tr>
                <th>STT</th>
                <th>username</th>
                <th>password</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            <?php
                foreach($array as $key => $value) {
                    echo '<tr>';
                    echo '<th>'.$key.'</th>';
                    echo '<th>'.$array[$key]['username'].'</th>';
                    echo '<th>'.$array[$key]['password'].'</th>';
                    echo "<th><button onclick='deleteUser($key)'>Del</button></th>";
                    echo '<th>Edit</th>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div>
</body>
</html>