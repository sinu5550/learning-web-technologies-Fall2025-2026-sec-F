<?php 
// 1.-----------------
$length = 10;
$width = 5;

$area = $length* $width;
$perimeter = 2*($length+$width);

echo "The Area of Rectangle = {$area} <br> ";
echo "The Perimeter of Rectangle = {$perimeter}<br>";

// 2.-------------------

$amount = 150;
$vat = $amount * (15/100) ; 

echo "Value Added Tax = {$vat} <br>";



// 3.---------------------
$num1=11;
if($num1%2 == 0 ){
    echo "The number is EVEN <br>";
}else{
    echo "The number is ODD <br>";
}

// 4.------------------------
$num2 = 15;
$num3= 20;

if($num1 > $num2 && $num1>$num3){
    echo "The largest number is: $num1<br>";
}
elseif($num2 > $num1 && $num2>$num3){
    echo "The largest number is: $num2<br>";
}
else{
    echo "The largest number is: $num3<br>";
}



// 5.--------------------------
for($i=10 ; $i<=100 ; $i++){
    if($i%2 != 0){
        echo $i." ";
    }  
}

// 7.------------------------------
echo"<br>";
for ($i=0 ; $i <3 ; $i++){
    for($j=0; $j<=$i; $j++){
        echo "* ";
    }
    echo "<br>";
}




?>