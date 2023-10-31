<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1>Admin panel</h1>
    <h1>Welcome! <?php echo $_SESSION["username"] ?></h1>
    <h2>Role: <?php echo $_SESSION["role"];  ?></h1>
        <br>
        <br>
        <br>
        <?php
        $file_path = "info.txt";

        if (file_exists($file_path)) {
            $file_content = file_get_contents($file_path);
            echo $file_content;
        } else {
            echo "The file does not exist.";
        }
        ?>
        <br>

        <a href="logout.php">Logout</a>

</body>

</html>