<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Encoding Demo</title>
</head>
<body>
    <?php
        $firstname = urlencode("Raechel & Friends");
        $lastname = urlencode("Capiz");
        $sex = urlencode('Female');
    ?>
    <a href="url-encoding-page-2-demo.php?fname=<?php echo $firstname?>&lname=<?php echo $lastname?>&sex=<?php echo $sex?>">click Me Baby One More Time</a>
</body>
</html>