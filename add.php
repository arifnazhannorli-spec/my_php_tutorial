<?php

if(isset($_POST['submit'])){

    // check email
    if(empty($_POST['email'])){
        echo 'An email is required <br />';
    } else {
        echo htmlspecialchars($_POST['email']);
    }

    // check title
    if(empty($_POST['title'])){
        echo 'A title is required <br />';
    } else {
        echo htmlspecialchars($_POST['title']);
    }

    // check ingredients
    if(empty($_POST['ingredients'])){
        echo 'At least one ingredient is required <br />';
    } else {
        echo htmlspecialchars($_POST['ingredients']);
    }

} // end of POST check

?>