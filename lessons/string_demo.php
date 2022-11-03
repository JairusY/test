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
    // Strings
        $myString1 = 'Hello \nWorld!\\'; // double backslash to put backslash
        $myString2 = "Hello \nWorld!\\";

        $myString3 = 'Hello \rWorld!';
        $myString4 = "Hello \rWorld!";

        $myString5 = 'Hello \tWorld!';
        $myString6 = "Hello \tWorld!";


        $myString5 = 'Hello \$World!';
        $myString6 = "Hello \$World!";


        echo '<pre>';
        echo $myString1 . '<hr>'; 
        echo $myString2 . '<hr>';
        echo $myString3 . '<hr>';
        echo $myString4 . '<hr>';
        echo $myString5 . '<hr>';
        echo $myString6 . '<hr>';

        echo '</pre>';

        echo "<h1 align=\"center\">Hello World!</h1>"; //denan meng backslash keng attribute na nung gagamit kang double quote keng parameter mu.
        echo '<h1 align="center">Hello World!</h1>'; // use single quote
        echo "<h1 align=\"center\">$myString1</h1>";
        // echo $myString1, ' I am Jairus<br>';
        // echo '<b>$myString2<b><br>';
        // echo "$myString2";

        //ESC characters
        // \n is replaced by the newline characters
        // \r is replaced bt the carriage -return character
        // \t is replaced by the tab character
        // \$ is replaced by the dolar sign itself ($)
        // \" is replaced by a single double-quote (")
        // \\ is replaced by a single backslash (\)

        // Manipulating php Strings
        // php provides build in functions for manipulating strings : calculating the length of the string, find the substring of a character, replacing part of a string with different characters, taking a string apart and many others.
        echo '<br>';
        echo '<hr>';

        $name = "Jairus Yanga";
        // character length
        // echo strlen($name); 
        // echo '<br>';
        
        // // number of words
        // echo str_word_count($name)

        // replace character/ string/ replacing text
        // echo str_replace("Yanga", "Pogi", $name);

        // Reverse String
        // echo strrev($name);

        echo str


    ?>
</body>
</html>