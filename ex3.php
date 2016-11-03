<?php
function calculate()
{
    $q1= $_POST["q1"];

if($q1=="a")
{
	$shipping= "free";
}
if($q1=="b")
{
$shipping=50;
}
if($q1=="c")
{
$shipping=5;
}
	if($shipping=="free")
	{
		echo 'Free 7-Day';
	}
	if($shipping == 50)
	{
		echo 'over night';
	}
		if($shipping == 5)
	{
		echo 'three day';
	}
}

function calculate2()
{
    $q1= $_POST["q1"];

if($q1=="a")
{
	$shipping= 0;
}
if($q1=="b")
{
$shipping=50;
}
if($q1=="c")
{
$shipping=5;
}
	return $shipping;
}

function calculate3()
{
    $q1= $_POST["q1"];

if($q1=="a")
{
	$shipping= 0;
}
if($q1=="b")
{
$shipping=50;
}
if($q1=="c")
{
$shipping=5;
}
	echo $shipping;
}

function welcome()
{
	$username = $_POST["un"];
	$pw = $_POST["pw"];
	echo 'Welcome ' .$username .'!<br>'. 'As a reminder, Password is: ' .$pw .'!';

}
function quant1()
{
	$ava = $_POST["aq"];
	$ban = $_POST["bq"];
	$par = $_POST["pq"];
	$ava = intval($ava);
	echo intval($ava);
}
function quant2()
{
	$ava = $_POST["aq"];
	$ban = $_POST["bq"];
	$par = $_POST["pq"];
	$ban = intval($ban);
	echo intval($ban);


}
function quant3()
{
	$ava = $_POST["aq"];
	$ban = $_POST["bq"];
	$par = $_POST["pq"];
	$par = intval($par);
	echo intval($par);
}
function fruits1()
{
	$ava = $_POST["aq"];
	$ban = $_POST["bq"];
	$par = $_POST["pq"];
	$ava = intval($ava)*3;
	$par = $par*5;
	echo intval($ava);
}
function fruits11()
{
	$ava = $_POST["aq"];
	$ban = $_POST["bq"];
	$par = $_POST["pq"];
	$ava = intval($ava)*3;
	$par = $par*5;
	return intval($ava);
}
function fruits2()
{
	$ava = $_POST["aq"];
	$ban = $_POST["bq"];
	$par = $_POST["pq"];
	$ava = intval($ban);
	$par = $par*5;
	echo intval($ban);
}
function fruits22()
{
	$ava = $_POST["aq"];
	$ban = $_POST["bq"];
	$par = $_POST["pq"];
	$ban = intval($ban);
	$par = $par*5;
	return intval($ban);
}
function fruits3()
{
	$ava = $_POST["aq"];
	$ban = $_POST["bq"];
	$par = $_POST["pq"];
	$par = intval($par);
	$par = $par*5;
	echo intval($par);
}
function fruits33()
{
	$ava = $_POST["aq"];
	$ban = $_POST["bq"];
	$par = $_POST["pq"];
	$par = intval($par) * 5;
	return intval($par);
}
function totalCost($fruit1, $fruit2, $fruit3, $shipping)
{
	$output = $fruit1 + $fruit2 + $fruit3 + $shipping;
	echo $output;
}
if(isset($_POST['submit']))
{
    welcome();
} 
?>
<html>

<body>

  <TABLE BORDER="1">
<TR>
    <TD> Product </TD>
    <TD>Quantity	</TD>
	<TD>Cost Per Item	</TD>
	<TD>Sub-Total	</TD>
</TR>
<TR>
	<TD> Avacado </TD>
	<TD> <?php quant1(); ?> </TD>
	<TD> 3$ </TD>
	<TD> <?php fruits1(); ?> </TD>
</TR>
	<TD> Banana   </TD>
	<TD> <?php quant2(); ?>  </TD>
	<TD> 1$ </TD>
	<TD>  <?php fruits2(); ?>  </TD>

</TR>
</TR>
	<TD> Pair   </TD>
	<TD> <?php quant3(); ?>  </TD>
	<TD> 5$ </TD>
	<TD>  <?php fruits3(); ?>  </TD>
</TR>
<TR>
	<TD> Shipping </TD>
	<TD> <?php calculate(); ?>  </TD>
	<TD> </TD>
	<TD> <?php calculate3(); ?>  $ </TD>
</TR>
<TR>
	<TD> Total Cost </TD>
	<TD>  <?php totalCost(fruits11(),fruits22(),fruits33(),calculate2()); ?> </TD>
</TR>
</TABLE>


</body>
</html>
<!-- http://stackoverflow.com/questions/5052932/how-to-get-int-instead-string-from-form -->