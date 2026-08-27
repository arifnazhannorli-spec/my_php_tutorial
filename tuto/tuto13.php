<?php
// tuto13 done
// functions

// basic function with default values
function sayHello($name = 'shaun', $time = 'morning'){
    echo "good $time $name";
}

// try different name + time
// sayHello('mario');
sayHello('yoshi', 'night');


// function that takes in a product
function formatProduct($product){

    // can echo it straight away
    // echo "{$product['name']} costs £{$product['price']} to buy <br />";

    // return it so can use later
    return "{$product['name']} costs £{$product['price']} to buy <br />";
}


// testing the function
// $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
// echo $formatted;

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>