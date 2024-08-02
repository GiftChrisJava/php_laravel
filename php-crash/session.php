<?php

// start a session
session_start();

// check if submit button on ourform is set
if(isset($_POST["submit"])) {
    $username = filter_input(
        INPUT_POST, 'username',
        FILTER_SANITIZE_SPECIAL_CHARS
    );

    // accessing the password from the form
    $password = $_POST['password'];

    if ($username == "john" && $password == 'password') {
        // store a session
        $_SESSION['$username'] = $username;

        // redirect user after successful login
        header('Location : /php-crash/extras/dashboard.php');
    } else {
        echo "Incorrect credentials";
    }
} 

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div>
        <label for="username">Username : </label>
        <input type="text" name="username"></input>
    </div>

    <div>
        <label for="password">Password : </label>
        <input type="password" name="password"></input>
    </div>

    <input type="submit" value="submit" name="submit">
</form>
