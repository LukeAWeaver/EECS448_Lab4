<?php
function calculate()
{
$correct =0;
    $q1= $_POST["q1"];
    $q2= $_POST["q2"];
    $q3= $_POST["q3"];
    $q4= $_POST["q4"];
    $q5 = $_POST["q5"];
if($q1=="a")
{
	$correct= $correct+1;
}
if($q2=="b")
{
$correct++;
}
if($q3=="d")
{
$correct++;
}
if($q4=="d")
{
$correct++;
}
if($q5=="a")
{
$correct++;
}
$answer = $correct/5*100;
    echo $answer . '%';
}
if(isset($_POST['submit']))
{
   calculate();
} 
?>
