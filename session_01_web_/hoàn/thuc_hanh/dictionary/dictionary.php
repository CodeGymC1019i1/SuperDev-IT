
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dictionary..</title>
</head>
<body>
<form method="post">
    <input type="text" name="search" placeholder="Enter word english">
    <input type="submit" value="Search" id="submit">
</form>

<?php
$dictionary = [
    "book" => "sach",
    "how" => "the nao",
    "student" => "hoc sinh",
    "teacher" => "co giao"
];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $flag = 0;
    $word_search = $_POST['search'];
    //echo $word_search;

    //duyet qua cac phan tu trong mang
    foreach ($dictionary as $key => $value) {
        if ($word_search == $key) {
            echo "Từ " . $key . " có nghĩa là: " . $value;
            echo "<br>";
            $flag = 1;
        }
    }
    if ($flag == 0) {
        echo "Khong tim thay tu trong tu dien";
    }
}
?>

</body>
</html>