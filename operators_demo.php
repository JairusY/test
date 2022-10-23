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
    <!-- 
PHP Arithmetic Operators
PHP Assignment Operators
PHP comparison Operators
PHP Incrementing and Decrementing Operators
PHP Logical Operators
Conditional Operatpors
Precedence of PHP Operators -->

<!--
Arithmetic Operators
Operator------------Description------------Example------------Result--------------------
+                   Addition               $x + $y            sum of $x and $y
-                   Subtraction            $x - $y            Difference of $x and $y
*                   Multiplication         $x * $y            Product of $x and $y
/                   Division               $x / $y            Quotient of $x and $y
%                   Modulus                $x % $y            Remainder of $x divided $y
**                  Exponentiation         $x ** $y           $x raise to the $y power

----------------------------------------------------------------------------------------------
Assignment Operators
Operator------------Description------------------------Example------------Is The Same As--------------------
=                   Assign                             $x = $y            $x = $y
+=                  Add and assign                     $x += $y           $x = $y + $y
-=                  Subtract and assign                $x -= $y           $x = $y - $y
*=                  Multiply and assign                $x *= $y           $x = $y * $y
/=                  Divide and assign quotient         $x /= $y           $x = $y / $y
%=                  divide and assign modulus          $x %= $y           $x = $y % $y


------------------------------------------------------------------------------------------------
Comparison Operators
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


----------------------------------------------------------------------------------------------------------
Incrementing and Decrementing Operators
Operator------------Name-----------------------------Effect------------------------------------------------
++$x                Pre-increment                    Increments $x by one, then return $x
$x++                Post-increment                   Returns $x, then increments $x by one
--$x                Pre-decrement                    Decrements $x by one, then returns $x
$x--                Post-decrement                   Return $x, then decrements $x by one


Logical Operators
Operator------------Name-----------------------------Example-------------Result-----------------------------------
and                 And                              $x and $y           true if both $x and $y are true
or                  Or                               $x or $y            true of either $x or $y is true
xor                 Xor                              $x xor $y           true if either $x or $y is true, but not both
&&                  And                              $x && $y            true if both $x and $y are true
||                  Or                               $x || $y            true if either $$x or $y is true
!                   Not                              !$x                 true if $x is not true  


Category------------Operator-------------------------Associativity---------------
Unary               !++--                            Right to Left
Multiplicative      */%                              Left to Right
Additive            +-                               Left to Right
Relational          <<=>>=                           Left to Right
Equality            == !=                            Left to Right
Logical AND         &&                               Left to Right
Logical OR          ||                               Left to Right
Conditional         ?:                               Right to Left
Assignment          =+=-=*=/=%=                      Right to Left

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

    
    //Assignment Operetors
    /*
    echo $x = $x + 5; // long method (infix)
    echo $x += 5;
    */

    //Comparison Operator
    /*
    $z = "10";
    echo $x == $z, ' kiwkiw<br>'; // true
    echo $x === $z, 'kiwkiw<br>'; // false null
    echo $x != $y, 'kiwkiw<br>'; // true
    echo $x <> $z, 'kiwkiw<br>';    // false null
    echo $x !== $z, 'kiwkiw<br>'; // true
    echo $x < $y, 'kiwkiw<br>'; // false
    echo $x > $y, 'kiwkiw<br>'; // true
    */


    //Incrementing and Decrementing Operators
    /*
    echo $x++, '<br>';
    echo ++$y, '<br>';

    echo $x--, '<br>';
    echo --$y, '<br>';
    */


    //Logical Operators
    /*
    $w = 10;
    echo ($x == $w) and ($x > $y), '<br>'; // true
    echo ($x == $w) && ($x < $y), '<br>';  // false
    echo ($x == $w) or ($x > $y), '<br>';  // true
    echo ($x == $w) || ($x < $y),'<br>';   // true
    echo ($x == $w) xor ($x > $y), '<br>'; // false kapag parehas true
    echo ($x == $w) xor ($x < $y), '<br>'; // true kapag isa lang sa dlawa ang may true
    */


    //Conditional Operators
    /*
    echo ($x < $y ? 'Same Value' : 'Different Value');
    */

    // Operator Categories
    /*
    CLASSIFICATIONS OF OPERATOR

    All the operators we have discussed above can be categorized into following categories -
    *   Unary prefix operators, which precede a single operand. 
        ++$x; --> Unary Operator

    *   Binary Operators, which tkae two operands and perform a variety of arithmetic and logical operations.
        $x = $y + $z;

    *   The conditional Operator (a ternary operator (Conditional Operators)), which takes three operands  and evaluates either the second or third expression, depending on the evaluation of the first espression.

    *   Assignment operators, which assign a value to a variable.
    *
    */

    //Precedence (Hierarchy or Rank) Operators or PEMDAS
    /*
    4 + 6 * 2 = 16


    */
    echo 4 + 6 * 1;
    ?>
</body>
</html>