<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>

    <!-- Main content -->
    <h1>Signup Section</h1>
    <form action="process-signup.php" method="POST">
        <div class="form-output">
            <input type="text" name="username" placeholder="Enter your username">
        </div>
        <div class="form-output">
            <input type="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-output">
            <input type="password" name="password" placeholder="Enter your password">
        </div>
        <div class="form-output">
            <input type="submit" name="signup" value="Signup">
        </div>
    </form>

</body>
</html>
