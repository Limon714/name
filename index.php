<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <h1> Please, Enter your Name  </h1><br>
        <input type="text" name="name" id="nw"> <br><br>
        <input type="submit" name="sub" id="btn"><br>
    </form>
    <?php

    if (isset($_POST['sub'])) {
        $name = $_POST['name'];
        echo "<h2>Your Name is  " . strtoupper($name). "</h2>";
        echo "<h3>Your Name is   " . ucwords($name) . "</h3>" ;
        echo "<h4> Your Name is   " . ucfirst($name) . "</h4>";
        echo "<h5>Your Name is " . strtolower($name) . "</h5>";
        echo "<h3>You are a Lucky Person.</h3> ";
    }

    ?>
</body>

</html>
