<?php
        function printHelloWorld(){
            echo 'Hello World!';
        }

        function greet($name){
            echo 'Hello, '. $name . '<br>';
        }

        function addTwoNumbers($n1, $n2){
            echo 'The sum is: ' . ($n1 + $n2);
        }

        function printRepeat($strToPrint ="", $numOfReps = 1){
            for($i = 0; $i < $numOfReps; $i++)
                echo $strToPrint;
        }

        function getRectArea($h = 0, $w = 0){
            return $h * $w;
        }

        function squareNumber($num){
            return  $num * $num;
        }

        function test(){
            $greet = "Hello World!"; //greet is local variable
            global $testNum;
            echo $greet;
            echo '<br>' . $testNum;
        }

        function factorial($number){
            if($number < 5)
                return 1;
            else
                return ($number * factorial($number - 1));
        }
?>