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
    // Indexed array - an array with an numeric key.
    // Assiociative array - an array where each key has its own specific value.
    // Multidimensional array - an array containing one or more arrays within itself.



        //----------Index Arrays are arrays that uses numbers as index-------------
        /*
        $color = array("Red","Green","Blue");
        echo $color[0];

        $pet = ["Dog", "Cat", "Rat", "Bird"];


        Assiociative Array
        $ages = array("Peter" => 22, "Clark" => 32, "John" => 28);
        echo $ages['Peter'];

        $size = ['small' => 10, 'md' => 14, 'lg' => 20];
        echo $sizes['sm'];

        $student['name'] = "Jairus";
        $student['grade'] = 99;
        $student['age'] = 16;
        echo $student['name'] . ' is ' . $student['age'] . ' years old.';
        */
        
        
        
        
        // -------------Multidimentional Array----------------
       /* 
       $contacts = array(
            array(
                'name' => 'Peter Parker', 
                'email' => 'peterparker@yahoo.com',
                'sex' => 'Male'
            ), 
            
            array(
                'name' => 'Jessica Tamayo', 
                'email' => 'jessicatamayo@yahoo.com',
                'sex' => 'medyoFemale'
            ),

            array(
                'name' => 'Jairus Yanga', 
                'email' => 'jairusyanga@yahoo.com',
                'sex' => 'Male'
            ),

            array(
                'name' => 'Buloy Yanga', 
                'email' => 'buloyyanga@yahoo.com',
                'sex' => 'Male'
            ), 
        );
        echo $contacts[1]['email']; 
        */
        
             
        
        /*
        $ages = array("Peter" => 22, "Clark" => 32, "John" => 28);
        print_r($ages);
        echo '<br><br>';
        var_dump($ages);

        $student['name'] = "Jairus";
        $student['grade'] = 99;
        $student['age'] = 16;
        print_r($student);
        echo '<br><br>';
        var_dump($student);
        */



        /*
        $contacts = array(
            array(
                'name' => 'Peter Parker', 
                'email' => 'peterparker@yahoo.com',
                'sex' => 'Male'
            ), 
            
            array(
                'name' => 'Jessica Tamayo', 
                'email' => 'jessicatamayo@yahoo.com',
                'sex' => 'medyoFemale'
            ),

            array(
                'name' => 'Jairus Yanga', 
                'email' => 'jairusyanga@yahoo.com',
                'sex' => 'Male'
            ),

            array(
                'name' => 'Buloy Yanga', 
                'email' => 'buloyyanga@yahoo.com',
                'sex' => 'Male'
            ), 
        );
        var_dump($contacts);
        print_r($contacts);
        */

        $color = array("Red","Green","Blue");

        foreach ($color as $key => $value) {
            echo $value . '<br>';
        }

        
    ?>
</body>
</html>