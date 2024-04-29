<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_POST["lastName"]) && !empty($_POST["lastName"]) && isset($_POST["firstName"]) && !empty($_POST["firstName"]) && isset($_POST["mail"]) && !empty($_POST["mail"]) && isset($_POST["phone"]) && !empty($_POST["phone"]) && isset($_POST["pwd"]) && !empty($_POST["pwd"]) && isset($_POST["cPwd"]) && !empty($_POST["cPwd"])) {
        $lastName = htmlspecialchars($_POST["lastName"]);
        $firstName = htmlspecialchars($_POST["firstName"]);
        $mail = htmlspecialchars($_POST["mail"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $pwd = htmlspecialchars($_POST["pwd"]);
        $cPwd = htmlspecialchars($_POST["cPwd"]);
        echo $lastName . ' ' . $firstName . ' ' . $mail
    }
} else {
    echo 'fill all'
}
?>