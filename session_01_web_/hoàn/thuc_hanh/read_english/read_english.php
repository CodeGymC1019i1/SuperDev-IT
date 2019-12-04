
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read english number..</title>
</head>
<body>
    <form method="post">
        <input type="text" name="number" placeholder="Enter number">
        <input type="submit" value="Read">
    </form>

    <!--xu ly method cua form voi PHP-->
    <?php
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $number = $_POST['number'];
            $number_length = strlen($number);
            //echo $number_length;
            //kiem tra do dai cua number trong input...
            if ($number_length > 3) {
                echo checkLengthNumber();
            } elseif ($number_length == 1) {
                readOneWord($number);
            } elseif ($number_length == 2) {

            }
        }

        function checkLengthNumber() {
            return "out of ability";
        }

        //readOneWord($number);
        function readOneWord($param) {
                switch ($param) {
                    case 0:
                        echo "Zezo";
                        break;
                    case 1:
                        echo "One";
                        break;
                    case 2:
                        echo "Two";
                        break;
                    case 3:
                        echo "Three";
                        break;
                    case 4:
                        echo "Four";
                        break;
                    case 5:
                        echo "Five";
                        break;
                    case 6:
                        echo "Six";
                        break;
                    case 7:
                        echo "Seven";
                        break;
                    case 8:
                        echo "Eight";
                        break;
                    default:
                        echo "Nine";
                }
        }

        //function readTwoWord
        function readTwoWord($param) {
            
        }
    ?>
</body>
</html>