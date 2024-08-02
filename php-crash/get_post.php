<?php

// getting and posting data

// check if submit button on ourform is set
if(isset($_POST["submit"])) {
   echo $_POST['name'];
echo $_POST['age']; 
} else {
    echo "No data available";
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
        <label for="name">Name : </label>
        <input type="text" name="name"></input>
    </div>

    <div>
        <label for="age">Age : </label>
        <input type="text" name="age"></input>
    </div>

    <input type="submit" value="submit" name="submit">
</form>
