<?php

session_start();
include "core/functions.php";

// session_unset();

session_destroy();

redirect("login.php");

die();