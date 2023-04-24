<?php require_once "../php/_sessions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Juakali - Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<body class="text-center">
<form class="form-signin" method="post" action="../php/algorithm/login.php">
    <?php include "../php/_alerts.php"; ?>
    <h1 class="h3 mb-3 font-weight-normal">Juakali <label class="text-muted">Login</label></h1>
    <input type="text" id="username" class="form-control" name="username" placeholder="Username" required autofocus>
    <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember" value="true"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <a href="register.php" class="link">Create new account</a>
    <p class="mt-5 mb-3 text-muted">&copy; All rights reserved</p>
</form>
</body>
</html>
