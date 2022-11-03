<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data (Receive)</title>
</head>
<body>
    <?php
        $firstname = $_GET ['txtFirstname'];
        $lastname = $_GET ['txtLastname'];
        $sex = $_GET ['radSex'];

        if($sex == 'Male')
            echo "Hello, Sir  $firstname $lastname";
        else 
            echo "Hello, Ma'am $firstname $lastname;"

    ?>
</body>
</html>