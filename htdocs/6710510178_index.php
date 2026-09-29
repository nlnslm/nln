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
        default:
            echo "วันอื่นๆ";
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

       if (date("H") < 12) {
            echo "<br>Good morning!";
        } elseif (date("H") < 18) {
            echo "<br>Good afternoon!";
        } else {
            echo "<br>Good evening!";
        }

       function calculateBMI($weight, $height) {
            if (!is_numeric($weight) || !is_numeric($height) || $weight <= 0 || $height <= 0) {
                return null;
            }
            return $weight / ($height * $height);
        }

        echo "<br>";
        $weight = 60; // weight in kilograms
        $height = 1.65; // height in meters
        $bmi = calculateBMI($weight, $height);
        if ($bmi === null) {
            echo "Your BMI is invalid.";
        } else {
            echo "Your BMI is: " . $bmi;
            if ($bmi < 18.5) {
                echo " (Underweight)";
            } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                echo " (Normal weight)";
            } elseif ($bmi >= 25 && $bmi < 29.9) {
                echo " (Overweight)";
            } else {
                echo " (Obesity)";
            }
        }

        $student = [[
                "name" => "Nalinee",
                "age" => 20,
                "major" => "Computer Science"
            ],
            [
                "name" => "John",
                "age" => 22,
                "major" => "Mathematics"
            ],
            [
                "name" => "Jane",
                "age" => 21,
                "major" => "Physics"
            ]];
            
        echo "<br>";
        echo $student[0]["name"] . " is " . $student[0]["age"] . " years old and majors in " . $student[0]["major"] . ".<br>";
        echo $student[1]["name"] . " is " . $student[1]["age"] . " years old and majors in " . $student[1]["major"] . ".<br>";
        echo $student[2]["name"] . " is " . $student[2]["age"] . " years old and majors in " . $student[2]["major"] . ".<br>";

    ?>

    <!-- ใช้ method=get กับข้อมูลที่ไม่ sensitive -->
       <form action="search.php" method="get">
            <label for="query">Search:</label>
            <input type="text" id="query" name="query">
            <input type="submit" value="Search">
       </form>
</body>
</html>
 