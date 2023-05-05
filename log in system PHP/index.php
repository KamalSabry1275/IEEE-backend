<?php
    $signUp = "signup.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Login Form</title>
    <style></style>
</head>

<body>
    <div class="login-form">
        <h1>Login Form</h1>
        <form action="./Includes/login.inc.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="submit">Login</button>
            <label
                style="color:red;text-align:center;width:100%;"><?php if(isset($_GET["error"]) and $_GET["error"] !== "none") echo $_GET["error"];?></label>
            <p>Don't have an account? <a href="<?php echo $signUp ; ?>">Sign up</a></p>
        </form>
    </div>
</body>

</html>