<?php 
session_start();
include "../core/functions.php";
include "../core/validations.php";

$errors = [];

$email = 'admin';
$password = 'password';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

}
?>

