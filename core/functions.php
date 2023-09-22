<?php

function checkRequestMethod($method)
{
    if ($_SERVER['REQUEST_METHOD'] == $method) {
        return true;
    } else {
        return false;
    }
};


function checkPostInput($input)
{

    if (isset($_POST[$input])) {
        return true;
    } else {
        return false;
    }
};

function sanitizeInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    return (htmlspecialchars(htmlentities($input)));
};


function redirect($path){
    header("Location: $path");
}