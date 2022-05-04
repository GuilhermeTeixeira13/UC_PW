<form method='POST'> 
<h2>Number 1:</h2> 
<input type="number" name="num1"> 
<h2>Number 2:</h2> 
<input type="number" name="num2"> 
<br><br>
<label for="html">Operation:</label><br>
<input type="radio" name="Operation" value="add" checked>
<label for="html">Addtion</label><br>
<input type="radio" name="Operation" value="sub">
<label for="html">Subtraction</label><br>
<input type="radio" name="Operation" value="mult">
<label for="html">Multiplication</label><br>
<input type="radio" name="Operation" value="div">
<label for="html">Division</label><br>

<input type="submit" name="Get result" value="Get result"> 
</form> 
<?php

  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $radioVal = $_POST["Operation"];
  if($radioVal == "add"){
    echo  $num1 + $num2;
  }
  else if ($radioVal == "sub"){
    echo  $num1 - $num2;
  }
  else if ($radioVal == "mult"){
    echo  $num1 * $num2;
  }
  else if ($radioVal == "div"){
    echo  $num1 / $num2;
  }

?>