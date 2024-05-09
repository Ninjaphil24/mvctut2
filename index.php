<?php
$con = new mysqli('localhost', 'mphil', '', 'mvctut');

echo "<pre>";
// var_dump($con);
// var_dump($_POST);
echo "</pre>";
if (isset($_POST['submit'])) {
    $first_name =  $_POST['first_name'];
    $last_name =  $_POST['last_name'];
    $email =  $_POST['email'];
    $query = "INSERT INTO users (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
    $con->query($query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Vanilla Form</title>
</head>

<body>
    <div class="box">
        <form action="index.php" method="post">
            <div class="inputBox">
                <input type="text" id="first_name" name="first_name" required>
                <label for="first_name">First Name</label>
            </div>
            <div class="inputBox">
                <input type="text" id="last_name" name="last_name" required>
                <label for="last_name">Last Name</label>
            </div>
            <div class="inputBox">
                <input type="text" id="email" name="email" required>
                <label for="email">Email</label>
            </div>
            <div class="inputBox">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>