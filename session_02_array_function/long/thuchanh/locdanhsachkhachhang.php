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
    Từ: <input id="from" type="text" name="from" placeholder="yyyy/mm/dd"/>
    Đến: <input id="to" type="text" name="to" placeholder="yyyy/mm/dd"/>
    <input type="submit" id="submit" value="Lọc" />
</form>
<?php
$customer_list = array(
    "0" => array("name"=> "Mai Văn Hoàn", "day_of_birth"=> "1983/08/20","image" => "images/img1.jpg" ),
    "1" => array("name"=>"Bạch Long", "day_of_birth"=> "1999/02/03", "image"=>"images/img2.jpg"),
    "2" => array("name"=>"Bạch Long", "day_of_birth"=> "1999/02/03", "image"=>"images/img3.jpg"),
)

function searchByDate ( $customers, $from_date, $to_date ) {
    if (empty($from_date) && empty($to_date)) {
        return $customers;
    }

    $filtered_customer = [];
    foreach ($customers as $customer) {
        if (!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date) ) )
            continue;
        if(!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
            continue;
        $filtered_customers[] = $customer;
    }
    return $filtered_customers;
}

?>
</body>
</html>