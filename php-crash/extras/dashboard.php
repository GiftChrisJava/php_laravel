<?php
session_start();

if(isset($_SESSION["username"])) {
    echo '<h1> Welcome' . ''. $_SESSION['username'] .'</h1>';
} else {
    echo '<h1> Welcone Guest</h1>';
    echo '<a href="/extras/session.php">Home</a>';
}