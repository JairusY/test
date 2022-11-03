<?php
    $arrMonths = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    // echo date('F d y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name="drpMonths">
        <?php
            if(isset($arrMonths)) {
                foreach ($arrMonths as $key => $value) {
                    
                    if($value == date('F'))
                        echo '<option value="' . $value . '" selected>' . $value . '</option>';
                    else
                    echo '<option value="' . $value . '" selected>' . $value . '</option>';
                }
            }
        ?>
    </select>

    <select name="drpDays">
        <?php
            for($i = 1; $i < 32; $i++)
                if($o == date('d'))
                echo '<option value="' . $i . '" selected>' . $i . '</option>';
            else
                echo '<option value="' . $i . '">' . $i . '</option>';
        ?>

    </select>
</body>
</html>