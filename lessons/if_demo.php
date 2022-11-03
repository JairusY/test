<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // $grade = 70;
    // if($grade > 74.4 ){
    //     echo 'Passed';
    // }
    // else{
    //     echo 'Failed!';
    // }



    
    // $grade = 74.4;
    
    // if($grade > 100)
    //     echo 'Out of range';
    // elseif($grade > 74.4)
    //     echo 'Passed';
    // elseif($grade > 64.4)
    //     echo 'Failed';
    // else
    //     echo 'Out of range';
    

    
    // nested if
    // $sex = 'female';
    // $age = 21;
    
    // if($sex == 'female'){
    //     if($age == 18)
    //         echo 'debutant';
    //     else
    //         echo 'not debutant';
    // }
    // elseif($sex == 'male'){
    //     if($age == 21)
    //         echo 'debutant';
    //     else
    //         echo 'not debutant';
    // }
    // else
    //         echo 'invalid sex';
    

    // Laderize if with logical operator

    // $sex = 'male';
    // $age = 21;

    // if($sex == 'female' && $age == 18)
    //     echo 'Debutant';
    // elseif($sex == 'male' && $age == 21)
    //     echo 'Debutant';
    // else
    //     echo 'Not Debutant!';

    // R - Red
    // G - Green
    // B - Blue
    // Y - Yellow

    $colorCode = 'y';
    // if(strtoupper($colorCode) == 'R')
    //     echo 'Red';
    // elseif(strtoupper($colorCode) == 'G')
    //     echo 'Green';
    // elseif(strtoupper($colorCode) == 'B')
    //     echo 'Blue';
    // elseif(strtoupper($colorCode) == 'Y')
    //     echo 'Yellow';
    // else
    //     echo 'Unknown Color!';
    
    
    switch(strtoupper($colorCode)) {
        case 'B':
            echo 'Blue';
            break;
        case 'R':
            echo 'Red';
            break;
        case 'G':
            echo 'Green';
            break;
        case 'Y':
            echo 'Yellow';
            break;
        default:
            echo 'Unknown Color';
        }

    ?>
</body>
</html>