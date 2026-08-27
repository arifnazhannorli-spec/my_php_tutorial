<?php
// tuto15 done
// VIDEO 15 - INCLUDE & REQUIRE

// normally this will load another php file
// include('ninjas.php');
// require('ninjas.php');

// include = page can still continue if file got problem
// require = page stops if the file is missing


// ===== ninjas.php example =====

// <?php
// $ninjas = ['shaun', 'ryu', 'yoshi'];
// echo $ninjas[1] . '<br />';
// ? >


// ===== content.php example =====

// <div>
//     <h1><?php echo 'some content'; ?></h1>
// </div>


echo 'end of php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

    <!-- normally we include content.php here -->

    <!-- <?php include('content.php'); ?> -->

</body>

</html>