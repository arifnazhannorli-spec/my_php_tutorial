<?php
// tuto12 done
// break & continue stuff

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

    // kalau jumpa lightning bolt terus stop loop
    if ($product['name'] === 'lightning bolt') {
        break;
    }

    // kalau price more than 15 just skip this one
    if ($product['price'] > 15) {
        continue;
    }

    // show yang tak kena skip
    echo $product['name'] . '<br />';

}

?>