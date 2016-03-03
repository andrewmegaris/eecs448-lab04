<?php

$itemOne = $_POST['feItemOneQuantity'];
$itemTwo = $_POST['feItemTwoQuantity'];
$itemThree = $_POST['feItemThreeQuantity'];
$subTotal = (($itemOneQuantity * 39.99) + ($itemTwoQuantity * 100.01) + ($itemThreeQuantity * 0.78));


 

if ($shippingCost == "free")
$shippingCost = 0.0;
if ($shippingCost == "overnight")
$shippingCost = 50.0;
if ($shippingCost == "threeDay")
$shippingCost = 5.0;




echo "<table>";

if($itemOne > 0){
    echo "<tr>";
    echo "Headphones Ordered: " . $itemOne . "<br>";
    echo "Price: '$'39.99 ";
    
    if($itemOneQuantity > 1)
    {echo "each";}
    echo "<br></tr>";
    
}

if($itemTwo > 0){
    echo "<tr>";
    echo "Bicycles Ordered: " . $itemTwo . "<br>";
    echo "Price: '$'100.01 ";
    
    if($itemTwo > 1)
    {echo "each";}
    echo "<br></tr>";
    
}

if($itemThree > 0){
    echo "<tr>";
    echo "Earasers Ordered: " . $itemThree . "<br>";
    echo "Price: '$'0.78 ";
    
    if($itemThree > 1)
    {echo "each";}
    echo "<br></tr>";
    
}
echo "<tr> Sub Total: $" . $subTotal . "<br>";
echo '</table>';
?>