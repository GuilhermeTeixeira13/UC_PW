<form method='POST'> 
<h2>num1:</h2> 
<input type="number" name="num1"> 
<h2>num2:</h2> 
<input type="number" name="num2"> 
<input type="submit" value="Get result"> 
</form> 
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
echo  $num1 + $num2;
?>