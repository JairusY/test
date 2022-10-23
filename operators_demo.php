<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- 
    true is equivalent to 1
    false is NULL 
    -->


    <?php
    $x = 10;
    $y = 4;

    //Arithmetic Operators
    /*
    echo $x + $y, '<br>';
    echo $x - $y, '<br>';
    echo $x * $y, '<br>';
    echo $x / $y, '<br>';
    echo $x % $y, '<br>';
    echo $x ** $y, '<br>';
    */

    /*
    //Assignment Operetors
    echo $x = $x + 5; // long method (infix)
    echo $x += 5;
    */

    //Comparison Operator
    $z = "10";
    echo $x == $z, ' kiwkiw<br>';
    echo $x === $z, 'kiwkiw<br>';

    ?>
</body>
</html>


<!-- PHP Arithmetic Operators
PHP Assignment OperatorsPHP comparison Operators
PHP Incrementing and Decrementing Operators
PHP Logical Operators
Conditional Operatpors
Precedence of PHP Operators -->

<!--
Operator------------Description------------Example------------Result--------------------
+                   Addition               $x + $y            sum of $x and $y
-                   Subtraction            $x - $y            Difference of $x and $y
*                   Multiplication         $x * $y            Product of $x and $y
/                   Division               $x / $y            Quotient of $x and $y
%                   Modulus                $x % $y            Remainder of $x divided $y
**                  Exponentiation         $x ** $y           $x raise to the $y power

Operator------------Description------------------------Example------------Is The Same As--------------------
=                   Assign                             $x = $y            $x = $y
+=                  Add and assign                     $x += $y           $x = $y + $y
-=                  Subtract and assign                $x -= $y           $x = $y - $y
*=                  Multiply and assign                $x *= $y           $x = $y * $y
/=                  Divide and assign quotient         $x /= $y           $x = $y / $y
%=                  divide and assign modulus          $x %= $y           $x = $y % $y


Operator------------Description----------------------Example------------Result--------------------
==                  Equal                            $x == $y           True if $x is equal to $y
===                 Identical                        $x ==== $y         True if $x is equal to $y, and they are of the same type
!=                  Not Equal                        $x != $y           true of $x is not equal to $y
<>                  Not Equal                        $x <> $y           true of $x is not equal to $y
!==                 Not Identical                    $x !== $y          true if $x is not equal to $y, or they are not the same type
<                   Less Than                        $x < $y            true if $x is less than $y
>                   Greater Than                     $x > $y            true if $x is greater than $y
>=                  Greater Than or equal to         $x =< $y           true if $x is greater than or equal to $y
<=                  Less than or equal to            $x <= $y           true if $x is less than or equal to $y

-->