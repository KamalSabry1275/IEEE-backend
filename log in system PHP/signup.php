<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Sign-up Form</title>
    <style></style>
</head>

<body>
    <div class="signup-form">
        <h1>Sign-up Form</h1>
        <form action="Includes/signup.inc.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <label
                style="color:red;text-align:center;width:100%;"><?php if(isset($_GET["error"]) and $_GET["error"] !== "none") echo $_GET["error"];?></label>
            <button type="submit" name="submit">Sign up</button>
        </form>
        <p>Already have an account? <a href="index.php">Login</a></p>
    </div>
</body>

</html>