<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <style>
        img {
            width:50px;
            height:50px;
        }
        
    </style>
</head>
<body>
        <form>
        <div class="form-row">
            <div class="col-3">
            <input type="text" class="form-control" name="from" placeholder="yyyyy/mm/dd">
            </div>
            <div class="col-3">
            <input type="text" class="form-control" name="to" placeholder="yyyy/mm/dd">
            </div>
            <div class="col-3">
            <input type="submit" class="btn btn-primary" value="Tìm kiếm">
            </div>
        </div>
        </form>
        <?php
            $customer_list = array (
                "0" => array("name" => "Nguyễn Thanh Tùng 1", "birthday" => "1996/04/02", "address" => "Hà Nội" , "img" => "img/tung.jpg"),
                "1" => array("name" => "Nguyễn Thanh Tùng 2", "birthday" => "1997/08/23", "address" => "Hồ Chí Minh" , "img" => "img/long.jpg"),
                "2" => array("name" => "Nguyễn Thanh Tùng 3", "birthday" => "1998/02/26", "address" => "Bắc Giang" , "img" => "img/thang.jpg"),
                "3" => array("name" => "Nguyễn Thanh Tùng 4", "birthday" => "1999/09/16", "address" => "Đà Nẵng" , "img" => "img/hoan.jpg")
            );
            function searchByDate($customers, $from_date, $to_date) {
                if(empty($from_date) && empty($to_date)){
                    return $customers;  
                }
                $filtered_customers = [];
                foreach($customers as $customer){
                    if(!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
                        continue;
                    if(!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
                        continue;
                    $filtered_customers[] = $customer;
                }
                return $filtered_customers;
            }
                $from_date = NULL;
                $to_date = NULL;
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $from_date = $_POST["from"];
                    $to_date = $_POST["to"];
                }
                $filtered_customers = searchByDate($customer_list, $from_date, $to_date);

                ?>
            <h2>Danh sách khách hàng</h2>
            <table class="table table-dark">
            
            <thead>
            
                <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Ảnh</th>
                </tr>
            </thead>
            <?php if(count($filtered_customers) === 0) {?>
                <tr>
                    <td colspan="5" class="message">Không tìm thấy khách hàng nào</td>
                </tr>
            <?php } ?>
            <?php foreach ($filtered_customers as $index => $customer) { ?>
                <tbody>
                <tr>
               
                <td> <?php echo $index + 1; ?> </td>
                <td> <?php echo $customer['name'];  ?> </td>
                <td> <?php echo $customer['birthday']; ?> </td>
                <td> <?php echo $customer['address']; ?> </td>
                <td> <img class="img" src="<?php echo $customer['img'];?> " >   </td>
                </tr>
            </tbody>
            <?php } ?>
           
        </table>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>