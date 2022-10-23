<!DOCTYPE html>
<?php $color = "green"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body bgcolor ="<?php echo $color; ?>">


    <!-- 
    true is equivalent to 1
    false is NULL 
    -->

    <?php
        // for($i = 0; $i < 10; $i++)
        //     echo '<b>Hello</b> <u>World!</u><br>'
        $name = "Jairus";
        // echo '<h1 align="center">Hello</h1> ' . $name . '<br>';
        // echo "Hello $name";
        echo 'Hello ', $name, ' How are you?';
    ?>
</body>
</html>