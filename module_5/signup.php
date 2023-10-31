<?php

$username = $_POST["username"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";
$a = "user";
$errorMessage = "";

if ($email != "" && $password != "") {
    $fp = fopen("./info.txt", "a");

    fwrite($fp, "\n{$username}, {$email}, {$password}, {$a}");
    fclose($fp);
    header("Location: login.php");
} else {
    $errorMessage = "Please enter you email and password!";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-5">
        <h2>Form</h2>
        <form action="signup.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

            <div class="align-self-center">
                <p class="mb-0">Already have an account? <a href="./login.php" class="fw-bold">Log In</a>
                </p>
            </div>
            <p class="text-warning">
                <?php echo $errorMessage; ?>
            </p>
        </form>
    </div>

</body>

</html>