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
        //Processing Indexed Arrays using foreach
        $color = array("Red","Green","Blue");
        foreach ($color as $key => $value) {
            echo $value . '<br>';
        }
       
       
        for ($i=0; $i < count($color); $i++)
            echo $color[$i] . '<br>';
        // as much as possible please use foreach in arrays


        //Processing Assosiative Arrays using foreach
        $ages = array("Peter" => 22, "Clark" => 32, "John" => 28);
        foreach ($ages as $key => $value) {
            echo $key . ' is ' . $value . 'years old.<br>';
        }
        */

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
        
        // foreach ($contacts as $keyContact => $valueContact) {
        //     foreach ($valueContact as $key => $value) {
        //         echo '<b>' . strtoupper($key) . '</b>: ' . $value . '<br>';
                
        //     }
        //     echo '<br>';
        // }

        // foreach ($contacts as $keyContact => $valueContact) {
        //     foreach ($contacts[$keyContact] as $key => $value) {
        //         echo '<b>' . strtoupper($key) . '</b>: ' . $value . '<br>';
                
        //     }
        //     echo '<br>';
        // }

        foreach ($contacts as $keyContact => $valueContact) {
            print_r($contacts[$keyContact]);
            echo '<br>';
        }

        
    ?>
</body>
</html>