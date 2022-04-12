<?php
$operator=$_GET['Operator'];
$operand1=$_GET['operand1'];
$operand2=$_GET['operand2'];
$result;
switch($operator){
case 'Addition':
                $result=$operand1+$operand2;
                break;
case 'Subtraction':
                $result=$operand1-$operand2;
                break;
case 'Multiplication':
                $result=round(($operand1*$operand2),2);
                break;
case 'Division':if($operand2==0||$operand2==0.0||$operand2==0.00){
                $result="Invalid operand 2";}
                else{
                $result=round(($operand1/$operand2),2);}
                break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" name="viewport" content="width-device-width"initital-scale="1.0"> 
<title>ass2</title>
<link rel="stylesheet" href="ass2css.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h1><center>Simple Arithmetic Calculator(2 OPERANDS)</center></h1>
<form action="ass2.html">
<input type="number"value="<?php echo $_GET['operand1'];?>"readonly/>
<input type="number"value="<?php echo $_GET['operand2'];?>"readonly/>
<label for="operator">Selected Operation</label>
<select name="Operator" id="operator">
<option value="Selection"><?php echo $_GET['Operator'];?></option>
</select>
<div class="backbtn">
<button type="submit"class="bb"><img src="keyboard_return_black_24dp.svg"/></button>
<input type="text"class="result"value="<?php echo $result;?>"readonly/>
</div>
</form>
</body>
</html>