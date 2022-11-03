<?php
if(isset($_POST['$btnSubmit'])) {
    
if(isset($_POST['sodaCheck']) && isset($_POST['sizeSelect'])) {

    $quantity = $_POST['numQuantity'];
    $size = $_POST['sizeSelect'];
    $pop = $_POST['sodaCheck'];
    echo $quantity . $size . $pop;

    /*--------------singular and plural---------*/
     if ($quantity == 1){
        $term = "piece";
     }
     else{
        $term = "pieces";
     }

     /*----------------Add-ons------------------*/
     if ($size == 'Regular') {
        $addOn = 0;
     }
     elseif ($size == 'Up-size') {
        $addOn = 5;
     }
     elseif ($size == 'Jumbo') {
        $addOn = 10;
     }

     echo "<h3>Purchase Summary</h3>";

     foreach ($pop as $popKey => $popValue) {
     echo
        "
        <ul>
            <li>". $quantity . " " . $term . "of" . $size . " " . $popKey . "amounting to ₱". $totalVal = 
            intval($popValue) * intval($quantity) + ($addOn * intVal($quantity)) .
            "</li>
        </ul>";                  
     }
     $itemsTotal = ($quantity * sizeof($pop));
     $grandTotal = (array_sum($pop) + $addOn * $quantity) * $quantity;

     echo "<label><b>Total number of items: </label>". $itemsTotal . "<br>";
     echo "<label><b>Total amount: </label>" . $grandTotal;
     }
else{
     echo "absdkjbajkdbajdba";
}
}
?>