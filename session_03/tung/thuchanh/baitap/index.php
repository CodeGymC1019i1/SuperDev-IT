<?php
    include "QuadraticEquation.php";

    $a = null;
    $b = null;
    $c = null;
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        if(!empty($_POST["numberA"]))
        $a = $_POST["numberA"];

        if(!empty($_POST['numberB']))
        $b = $_POST['numberB'];

        if(!empty($_POST["numberC"]))
        $c = $_POST['numberC'];
    };
    
    $results = new QuadraaticEquation($a,$b,$c);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
     <div class="container ">
     <h2>giải phương trình</h2>
        <form method="POST">
            <div class="form-row">
                <div class="col-4">
                <input type="text" name="numberA" class="form-control" placeholder="nhập số a">
                </div>
                <div class="col-4">
                <input type="text" name="numberB" class="form-control" placeholder="nhập số b">
                </div>
                <div class="col-4">
                <input type="text" name="numberC" class="form-control" placeholder="nhâp số c">
                </div>
                <div class="col">
                <button type="submit" class="btn btn-danger"> kết quả</button>
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <?php echo $results->result();    ?>
    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>