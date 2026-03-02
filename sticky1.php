<!DOCTYPE html>
<html>
<head>
    <title>Sticky Form Example</title>
</head>
<body>

<?php

// Function with default value
function makeSticky($fieldName, $default = "")
{
    if (isset($_POST[$fieldName])) {
        echo "value=\"" . htmlspecialchars($_POST[$fieldName]) . "\"";
    } else {
        echo "value=\"$default\"";
    }
}

?>

<h2>Sticky Form Example</h2>

<form method="post" action="sticky1.php">
    Name:
    <input type="text" name="name" <?php makeSticky("name", "Enter your name"); ?>>
    <br><br>

    Email:
    <input type="text" name="email" <?php makeSticky("email", "example@email.com"); ?>>
    <br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>