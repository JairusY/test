<?php
    $sodasArr = array('Coke' => 15, 'Sprite' => 20, 'Royal' => 20, 'Pepsi' => 15, 'Mountain Dew' => 20);
    $sizesArr = array('Regular' => 'Regular', 'Up-size (add ₱5' => 'Up-size', 'Jumbo (add ₱10)' => 'Jumpo');
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
    <h3>Vendo Machine</h3>
    <form method="post">

        <!--Products-->
        <fieldset style="width: 465px;">
            <legend>Products:</legend>

            <?php
                if(isset($sodasArr)){
                    foreach ($sodasArr as $sodasKey => $sodasValue) {
                        echo "<input type='checkbox' name='sodaCheck[" . $sodasKey . "]' value='" . $sodasValue . "'>
                        <label>" . $sodasKey." - ₱". $sodasValue ."</label><br>";
                    }
                }
            ?>

        </fieldset>

        <fieldset style="display: inline-block;">
    
           <legend>Options: </legend>
           <label for="sizeSelect">Size</label>
           <select name="sizeSelect" id="sizeSelect">

            <?php
                if (isset($sizesArr)){
                    foreach ($sizesArr as $sizesKey => $sizesValue) {
                        echo "<option value='". $sizesValue ."'>". $sizesKey . "</option>";
                    }
                }
            ?>

           </select>
           
           <label for="numQuantity">Quantity</label>
           <input type="number" name="numQuantity" id="numQuantity" min="0" max="100" value="0">
            
           <button type="submit" name="btnSubmit">Check Out</button>
           <!-- <input type="submit" name="btnSubmit"> -->
        </fieldset>

    </form>
    <?php
        if(isset($_POST['btnSubmit'])){
            if(isset($_POST['sodaCheck']) && isset($_POST['sizeSelect'])) {
                $quantity = $_POST['numQuantity'];
                $size = $_POST['sizeSelect'];
                $soda = $_POST['sodaCheck'];

                if($quantity == 1){
                    $term = 'piece ';
                }
                else{
                    $term = 'pieces';
                }


                if($size == 'Regular'){
                    $addOn = 0;
                }
                elseif($size == 'Up-size'){
                    $addOn = 5;
                }
                elseif($size == 'Jumbo'){
                    $addOn = 10;
                }

                echo '<hr><h3>Purchase Summary</h3>';
                foreach ($soda as $key => $value) {
                    echo
                    '<ul>
                    <li>'. $quantity . '  ' . $term . ' of ' . $size . '  ' . $key . ' amounting ₱'. $totalVal =
                    intval($value) * intval($quantity) + ($addOn * intval($quantity)) . 
                    '</li>
                    </ul>';
                }
                $itemsTotal = ($quantity *sizeof($soda));
                $grandTotal = (array_sum($soda) + $addOn * $quantity) * $quantity;

                echo "<label><b>Total number of items: </label>". $itemsTotal . "<br>";
                echo "<label><b>Total amount: </label>" . $grandTotal;
            }
            else{
                echo '<hr>No selected Product. Try Again.';
            }
        }
    ?>
</body>
</html>