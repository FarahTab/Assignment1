<?php 
$num3=40;
$num4=60;
$num5=50;

if($num3 > $num4 && $num3 > $num5){
	echo "num3 is biggest";

}
else if($num4>$num3 && $num4>$num5){
echo "num4 is biggest";
}
else{
	echo "num5 is biggest";
}

echo "<br>";
echo "<br>";

$num1=10;
$num2=20;

if($num2 > $num1){
	echo "num2 is bigger";

}
else if($num1==$num2){
echo "both are equal";
}
else{
	echo "num1 is bigger";
}

echo "<br>";
echo "<br>";

$num6= 11;
$res= $num6 % 2;

if($res==0){
	echo "even";
}

else {
	echo "odd";
}

echo "<br>";
echo "<br>";

$num6= 11;

if($num6>0){
	echo "positive";
}

else if($num6<0){
	echo "negative";
}

else {
    echo "zero";
}

echo "<br>";
echo "<br>";



$name1= "Farah Tabira";
$name2= "Susan Steiner";
$name3= "Elizabeth March";

$var1=strlen($name1);

echo "the length of name1 is"." "."$var1";
echo "<br>";

$var2=strlen($name2);

echo "the length of name2 is"." "."$var2";
echo "<br>";

$var3=strlen($name3);

echo "the length of name3 is"." "."$var3";
echo "<br>";

    
    if(strlen($name1) < strlen($name2) && strlen($name1) < strlen($name3)){
	$nameSmall=strlen($name1);
        echo "the length of the shortest name is"." "."$nameSmall";
        echo "<br>";
        $nameNice=$name1;
        echo "the shortest name is"." "."$nameNice";

}
else if(strlen($name2) < strlen($name1) && strlen($name2) < strlen($name3)){
$nameSmall=strlen($name2);
    echo "the length of the shortest name is"." "."$nameSmall";
        echo "<br>";
        $nameNice=$name2;
        echo "the name is"." "."$nameNice";
}
else{
echo "the length of the shortest name is"." "."$nameSmall";
        echo "<br>";
        $nameNice=$name3;
        echo "the name is"." "."$nameNice";
}

echo "<br>";

if (strlen($nameNice) % 2 == 0){
    echo "$nameNice"." "."you are different";
}

else {
    echo "$nameNice"." "."you are genreal";
}

echo "<br>";
echo "<br>";
    

hello("Farah Tabira");
function hello($nameT){
echo "Welcome"." ".$nameT;
}

echo "<br>";
echo "<br>";

$t= sum(22, 30);
echo "the sum is"." ".$t;
echo "<br>";
echo "the sum is"." ".sum(50,90);
function sum($num1, $num2){
	$resultT= $num1 + $num2;
	return $resultT;
}

echo "<br>";
echo "<br>";

for($i=1; $i<=20; $i++){
	echo "Hello Dhaka <br>";
}

echo "<br>";
echo "<br>";

$sumIt= 0;
for($i=1; $i<=4; $i++){
    $sumIt= $sumIt + $i;
	
}

echo "The sum of these numbers is"." "."$sumIt <br>";
echo "<br>";
echo "<br>";

for($j=20; $j>=10; $j--){
	echo "$j <br>";
}

echo "<br>";
echo "<br>";

?>