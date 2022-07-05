<?php


// This is how you check if there is a value set for each variable by
// Checking the submit button on line 26;
if(isset($_POST['submit'])) {
    echo $_POST['name'];
    echo(" is ");
    echo $_POST['age'];
    echo(" years old");
}

?>

<a href = "<?php echo $_SERVER['PHP_SELF'];?>?
name=John&age=30">Click</a>

<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" 
method="POST">
    <div>
        <label for = "name" > Name: </label>
        <input type = "text" name = "name">
    </div>
    <div>
        <label for = "age" > Age: </label>
        <input type = "text" name = "age">
    </div>
    <input type = "submit" value = "Submit" name = "submit">
</form>