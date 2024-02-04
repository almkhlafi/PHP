
<?php 
//include and require are the same but require will not run the remaining code if the file does not exist but include will do run the remaining code
include('CallUsingRequireOrInclude.php');
require('CallUsingRequireOrInclude.php');

 //Or 
 //include 'CallUsingRequireOrInclude.php';
//require 'CallUsingRequireOrInclude.php';


//Index Array 
$people=['Ali','Seead','Saleh'];
echo "<mark>Index Array </mark><br><br>Name:";
array_push($people,"Alseedi"); //push to the last
for($i=0;$i<=count($people);$i++)
{
    echo " $people[$i] ";
}


//Associative Mareged Array 
echo "<br><br><br>";

$Folk=array("1231",52,'Saleed');
$Folk[]='Almkhlafi';//push to the last
echo "<mark>Associative Mareged Array </mark><br><br>Name:";
$maregedArray=array_merge($people,$Folk);
print_r($maregedArray);

//Passing Arrays within Functions
echo "<br><br><mark>Passing Arrays within Functions</mark><br>";
function product($product){
    //echo "<br> Product : {$product['Product']} Color {$product['Color']} Cost {$product['Price']} <br>";
   return "<br> Product : {$product['Product']} Color {$product['Color']} Cost$ {$product['Price']} <br>";
}
$cart=product(array("Product"=>'T-shirt','Color'=>'Black','Price'=>'  50.0'));
echo "$cart";


echo "<br><br><br>";
?>

