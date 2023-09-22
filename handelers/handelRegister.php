<?php
session_start();
include "../core/functions.php";
include "../core/validations.php";

$errors = [];

if (checkRequestMethod("POST") && checkPostInput("name")) {
    foreach ($_POST as $key => $value) {

        $$key = sanitizeInput($value);
    };

    if (!requiredVal($name)) {
        $errors[] = "Name is required";
    } elseif (!minVal($name, 3)) {
        $errors[] = "name must be greater then 3 characters";
    } elseif (!maxVal($name, 25)) {
        $errors[] = "name must be at smaller then 25 characters";
    }

    if (!requiredVal($email)) {
        $errors[] = "Email is required";
    } elseif (!emailVal($email)) {
        $errors[] = "Please enter a valid email";
    };

    if (!requiredVal($password)) {
        $errors[] = "Password is required";
    } elseif (!minVal($password, 6)) {
        $errors[] = "name must be greater then 6 characters";
    } elseif (!maxVal($password, 20)) {
        $errors[] = "name must be at smaller then 20 characters";
    };

    if (empty($errors)) {
        $users_file = fopen("../data/users.csv", "a+");
        $data = [$name, $email, sha1($password)];
        fputcsv($users_file, $data);

        $_SESSION["auth"] = [$name, $email];
        redirect("../index.php");
        die();
    } else {
        $_SESSION["errors"] = $errors;
        redirect("../register.php");
        die();
    };

    // var_dump($errors);
} else {
    echo "Not Supported Method";
}
