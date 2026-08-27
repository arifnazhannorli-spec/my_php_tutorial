<?php

// conditional stuff

$price = 20;

// just testing if else
// if ($price < 10) {
//     echo 'the condition is met';
// } elseif ($price < 20) {
//     echo 'elseif condition met';
// } else {
//     echo 'condition not met';
// }


// list of products
$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];


// loop semua product
foreach ($products as $product) {

    // both condition need to be true
    // if ($product['price'] < 15 && $product['price'] > 2) {
    //     echo $product['name'] . '<br />';
    // }

    // either one can be true
    // if ($product['price'] > 20 || $product['price'] < 10) {
    //     echo $product['name'] . '<br />';
    // }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials</title>
</head>

<body>

    <div>
        <ul>

            <!-- loop all product -->
            <?php foreach ($products as $product) { ?>

                <!-- only show price above 15 -->
                <?php if ($product['price'] > 15) { ?>

                    <li><?php echo $product['name']; ?></li>

                <?php } ?>

            <?php } ?>

        </ul>
    </div>

</body>
</html>