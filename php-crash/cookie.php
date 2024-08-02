<?php

// setting a cookie
setcookie("name", "GCR", time() + 86400 * 30);

if(isset($_COOKIE["name"])) {
    echo $_COOKIE["name"];
}

// unsettign a cookie
setcookie('name', '', time() - 86400);