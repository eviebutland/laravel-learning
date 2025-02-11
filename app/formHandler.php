<!-- This should be in a private file so that it cannot be a security risk -->
<?php

var_dump("This is a console log");

// This checks if there has been a post using the super global
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // htmlspecialchars() sanitises the response data to stop cross script injection 
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastName = htmlspecialchars($_POST["lastname"]);
    $pet = htmlspecialchars($_POST["favouritePet"]);

    // Check if the field has been filled out
    if(empty($firstName)){
        exit(); // same as a return
    };

    echo "User submitted data";
    echo $firstName;
    echo $lastName;
    echo $pet;

    header('Location: ./index.php');
} else {
    // Send the user back to the original page
    header('Location: ./index.php');

}


// Note: No FE security will be sufficient - we should always rely on server side validation. 