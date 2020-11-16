<?php

$points = 0;

$yourans1 = $_POST["grade"];
$yourans2 = $_POST["area"];
$yourans3 = $_POST["taste"];
$yourans4 = $_POST["zero"];
$yourans5 = $_POST["number"];


echo "What is the best grade?<br>";
echo "Correct answer = 100  <br>"; 
echo "Your answer = $yourans1 <br> <br>";

echo "Where is KU? <br>";
echo "Correct answer = Lawrence <br>"; 
echo "Your answer = $yourans2 <br> <br>";


echo "what taste good? <br>";
echo "Correct answer = Food <br>"; 
echo "Your answer = $yourans3 <br> <br>";

echo "0 * any number <br>";
echo "Correct answer = 0 <br>"; 
echo "Your answer = $yourans4 <br> <br>";

echo "1+1 <br>";
echo "Correct answer =  2 <br>"; 
echo "Your answer = $yourans5 <br> <br>";

if($yourans1 == "100" )
{
    $points = $points + 20; 
}
else
{

}
if($yourans2 == "lawrence" )
{
    $points = $points + 20; 
}
else
{

}
if($yourans3 == "Food" )
{
    $points = $points + 20; 
}
else
{

}
if($yourans4 == "0" )
{
    $points = $points + 20; 
}
else
{

}
if($yourans5 == "2" )
{
    $points = $points + 20; 
}
else
{

}

echo "Total Score = " . $points . "/100";



?>

