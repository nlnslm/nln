<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       echo "this is index.php inside week10 folder. ";
       echo "<br>";
       $name = "Nalinee";
       echo "Hello, " . $name . "!<br>";
       echo "Hello, $name!<br>";
       echo 'Hello, ' . $name . '!';
       echo "Today is " . date("Y-m-d") . "<br>";
       //get the current time
       switch (date("l")) {
        case "Monday":
            echo "วันจันทร์";
            break;
        case "Tuesday":
            echo "วันอังคาร";
            break;
        case "Wednesday":
            echo "วันพุธ";
            break;
        case "Thursday":
            echo "วันพฤหัสบดี";
            break;
        case "Friday":
            echo "วันศุกร์";
            break;
        case "Saturday":
            echo "วันเสาร์";
            break;
        case "Sunday":
            echo "วันอาทิตย์";
            break;
       }
       //array of month names in Thai
       $thai_months = array(
        "01" => "มกราคม",
        "02" => "กุมภาพันธ์",
        "03" => "มีนาคม",
        "04" => "เมษายน",
        "05" => "พฤษภาคม",
        "06" => "มิถุนายน",
        "07" => "กรกฎาคม",
        "08" => "สิงหาคม",
        "09" => "กันยายน",
        "10" => "ตุลาคม",
        "11" => "พฤศจิกายน",
        "12" => "ธันวาคม"
       );
       //get output data in Thai format
       echo "ที่" . date("d") . "เดือน " . $thai_months[date("m")] . "พ.ศ. " . (date("Y") + 543) . ".";
    ?>
</body>
</html>
 