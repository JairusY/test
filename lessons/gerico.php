<?php
        if(isset($_POST['btnSubmit'])){

            if(isset($_POST['sodaCheck']) && isset($_POST['sizeSelect'])){

                $quantity = $_POST['numQuantity'];
                $size = $_POST['sizeSelect'];
                $soda = $_POST['sodaCheck'];

                //Quantity
                if($quantity == 1){
                    $term = "piece";
                }
                else{
                    $term = "pieces";
                }

                //Sizes
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
                foreach ($soda as $sodaKey => $sodaValue){
                    echo
                    '<ul>
                        <li>'. $quantity .' '. $term . ' of ' . $size .' '. $sodaKey .' amounting ₱'. $totalVal = 
                        intval($sodaValue) * intval($quantity) + ($addOn * intval($quantity)) .
                        '</li>
                    </ul>';
                }

                $itemsTotal = ($quantity *sizeof($soda));
                $grandTotal = (array_sum($soda) + $addOn * $quantity) * $quantity;

                echo '<label><b>Total Number of Items:</b></label>'. $itemsTotal .'<br>';
                echo '<label><b>Total Amount:</b></label>'. $grandTotal;
            }      
            else{
                echo '<hr>No Selected Product. Try Again.';
            }
        }
        ?>