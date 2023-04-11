<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-7-A-3</title>
</head>

<body>
    <form action="" method="POST">
        <input type="text" name="user">
        <input type="submit" name="submit" value="Send">
    </form>
</body>

</html>
<?php
$admins = ["Osama", "Ahmed", "Sayed"];
if(isset($_POST["submit"])){
    $user = $_POST["user"];
    foreach($admins as $admin){
        if($admin === $user)
            if($_SERVER["REQUEST_METHOD"] === "POST"){
                echo "The Request Method Is Post And Username Is ". $user;
                echo "<br>";
                echo "This Username ".$user." Is Admin";
            }
    }
}
?>