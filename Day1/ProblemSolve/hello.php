<?php 
echo ".................print hello............................<br>";

echo "<br>";

$name="alaa <br>";

echo "hello, $name <br>";



echo ".....................mul & sub & sum........................<br>";

echo "<br>";

$num1=12;
$num2=4;
$sum=$num1 +$num2;
$mul=$num1 * $num2;
$sub=$num1 -$num2;

echo "sum is $sum <br>";
echo "mul is $mul <br>";
echo "sub is $sub <br>";


echo "........................equation.....................<br>";

echo "<br>";

$num1=1;
$num2=2;
$num3=3;
$num4=4;

$x=($num1*$num2)-($num3*$num4);

echo "result of equation is = $x <br>";

echo "<br>";

echo "........................summation last digit.....................<br>";

echo "<br>";

$num1=13;
$num2=12;
$x=($num1%10) + ($num2%10);

echo "result of equation is = $x <br>";


echo "<br>";

echo "........................odd or even.....................<br>";
// $num1=2;
// $num2=4;

// if ($num1%2==0 && $num2%2==0)
// {
// echo "even <br>";
// }
// else{
//     echo "oddd";
// }
$num1=3562;
$fst=(int) strval($num1)[0];

if ($fst%2==0)
{
echo "even <br>";
}
else{
    echo "odd<br>";
}

echo "........................memo or mono.....................<br>";
$num1=22;
$num2=10;
$num3=2;
if ($num1%$num3 ==0 && $num2%$num3==0 ){
    echo "both <br>";
}
elseif ($num1%$num3 ==0 ) {
    echo "memo <br>";
    
}
elseif ($num2%$num3 ==0 ) {
    echo "m0mo <br>";
    
}
else {
    echo "none <br>";
}

echo "........................luck.....................<br>";

$num1=39;
$d1=intval($num1/10);//3
$d2=$num1%10; //9
echo "$d1 <br>";
echo "$d2 <br>";


if ($d1!=0 && $d2 !=0 &&($d1%$d2==0 || $d2%$d1==0))
 {
    echo "yes <br>";
}
else {
    echo "no <br>";
}

?>