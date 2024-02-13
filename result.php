<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fullName = $_POST["fullName"];
    $registration = $_POST["regno"];
    $course = $_POST["course"];
    $phoneNumber = $_POST["phoneNumber"];
    $unit_1 = $_POST["JavaScript"];
    $unit_2 = $_POST["Algorithms"];
    $unit_3 = $_POST["SMT"];
    $unit_4 = $_POST["PHP"];

    $units = [$unit_1, $unit_2, $unit_3, $unit_4];
    $sum = array_sum($units);
    $average = $sum / count($units);

    echo "<h1><u>Welcome $fullName course: $course</u></h1>";
    echo"<h2>Dear, $fullName admission-Number: $registration </h2><br>";
    echo"<h3>sum of units done is: $sum </h3>";
    echo"<h3>average score therefore is: $average<h3>";
    echo"<h4>a copy of the info has been sent to your contact: <u>$phoneNumber</u> <i>Thankyou!</i><h4>";



    ?>  
</body>
</html>
