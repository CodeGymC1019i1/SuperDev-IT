<?php
include_once "CLASS/StudentManage.php";
$pathFile = "DATA/data.json";
$listStudents = new StudentManage($pathFile);
//    $data = $listStudents->readFile();

$data = $listStudents->getData();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

</head>
<body>


<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div>

<div class="container">

    <a href="PROCESS/Add.php">
        <button type="button" class="btn btn-success mt-2 ml-2 mb-2">Create</button>
    </a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">NAME</th>
            <th scope="col">AGE</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">GROUP</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>
        </tr>
        </thead>
        <?php foreach ($data as $key => $student): ?>
            <tr>
                <th><?php echo $key + 1 ?> </th>
                <td><?php echo $student-> name ?> </td>
                <td><?php echo $student-> age ?> </td>
                <td><?php echo $student -> address ?> </td>
                <td><?php echo $student -> group ?> </td>
                <td><a href="PROCESS/Delete.php?index=<?php echo $key ?>" onclick="return confirm('Ban chac chan muon xoa khong')" class="btn btn-danger">Delete</a></td>
                <td></td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>

<script src="JS/bootstrap.min.js"></script>
</body>
</html>