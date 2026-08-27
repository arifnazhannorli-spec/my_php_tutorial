<?php
// tuto14 done
// local = only inside function
// global = use outside variable inside function
// & = change the actual original variable



// variable scope stuff


// local variable
function myFunc(){

    $price = 10;

    // can use price inside this function
    echo $price;
}

// myFunc();

// price wont work outside the function
// echo $price;



// passing value into function
function myFuncTwo($age){

    echo $age;
}

// myFuncTwo(25);



// global variable

$name = 'mario';

// using global lets us use outside variable inside function
// function sayHello(){

//     global $name;

//     $name = 'yoshi';

//     echo "hello $name";
// }

// sayHello();

// echo $name;



// & means we are changing the original variable
function sayBye(&$name){

    $name = 'wario';

    echo "bye $name";
}

sayBye($name);

// name is now wario too
echo $name;

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>