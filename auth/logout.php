<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="icon" href="../assets/favicon.ico">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    h1 {
        color: #333;
    }

    p {
        display: inline-block;
        text-decoration: none;
        color: #007BFF;
    }
</style>

<body>
    <h1>Logout successful</h1>
    <p>You have been logged out. </p>
    <?php header("Refresh: 3; URL=login.php"); ?>
</body>

</html>