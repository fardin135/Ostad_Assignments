<?php
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

    $errorMessage = "";


    $fp = fopen("./info.txt", "r");

    $usernames = array();
    $emails = array();
    $passwords = array();
    $roles = array();


    while ($line = fgets($fp)) {
        $values = explode(",", $line);
        array_push($usernames, trim($values[0]));
        array_push($emails, trim($values[1]));
        array_push($passwords, trim($values[2]));
        array_push($roles, trim($values[3]));
    }

    for ($i = 0; $i < count($roles); $i++) {

        if ($email == $emails[$i]) {
            if ($password == $passwords[$i]) {
                $_SESSION['username'] = $usernames[$i];
                $_SESSION['email'] = $emails[$i];
                $_SESSION['password'] = $passwords[$i];
                $_SESSION['role'] = $roles[$i];
                header('Location: index1.php');
            } else {
                $error = "Password did not match";
            }
        } else {
            $error = "Email did not match";
        }
    }
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
        <h2>Stacked form</h2>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">


                <?php if (isset($error)) {
                ?>
                    <div class="alert-danger text-danger">
                        <p class="text-warning">
                            <?php echo $error; ?>
                        </p>
                    </div>

                <?php } ?>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>

            <div class="align-self-center">
                <p class="mb-0">Don't Have a Account? <a href="signup.php" class="fw-bold">Register Here</a>
                </p>
            </div>
        </form>
    </div>

</body>

</html>