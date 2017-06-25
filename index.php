<?php
    $input_number = $_GET["number"];
    $final_number = numberSquared($input_number);

    function numberSquared($number)
    {
      $sqaure = $number * $number;
      return $sqaure;
    }




<!DOCTYPE html>
<html>
<head>
    <title>Squared</title>
</head>
<body>
    <div class="container">
        <h1>Here's your number square!</h1>
        <h3>The number you gave me:<?php echo $input_number ?> </h3>
        <h3>Here's that number squared: <?php echo $final_number; ?> </h3>
    </div>
</body>
</html>
