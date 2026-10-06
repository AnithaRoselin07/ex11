<?php

$password = $_POST["password"];
$creditcard = $_POST["creditcard"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$errors = array();


// Password Validation
if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9]).{8,}$/", $password)) {
    $errors[] = "Invalid Password";
}


// Credit Card Validation
if (!preg_match("/^[0-9]{16}$/", $creditcard)) {
    $errors[] = "Invalid Credit Card Number";
}


// Email Validation
if (!preg_match("/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,}$/", $email)) {
    $errors[] = "Invalid Email";
}


// Phone Number Validation
if (!preg_match("/^[0-9]{10}$/", $phone)) {
    $errors[] = "Invalid Phone Number";
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Validation Result</title>
</head>

<body>

<?php

if (empty($errors)) {

    echo "<h2>Validation Successful</h2>";

    echo "<p>Password: Valid</p>";
    echo "<p>Credit Card Number: Valid</p>";
    echo "<p>Email: Valid</p>";
    echo "<p>Phone Number: Valid</p>";

} else {

    echo "<h2>Validation Failed</h2>";

    echo "<ul>";

    foreach ($errors as $error) {
        echo "<li>$error</li>";
    }

    echo "</ul>";
}

?>

<br>

<a href="index.html">Go Back</a>

</body>
</html>