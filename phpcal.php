<?php 
//var_dump($_GET);
$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
$operator = $_GET['operator'];

$operatorok = false;
$error = false;
$fout = false;

if ($operator == '+'){
	$operatorok = true;
}
elseif ($operator == '-'){
$operatorok = true;
}
elseif ($operator == '*'){
$operatorok = true;
}
elseif ($operator == '/'){
$operatorok = true;
}


if ($operator == '+'){
$result =  $number1 + $number2;
}
if ($operator == '-'){
$result =  $number1 - $number2;
}
if ($operator == '*'){
$result =  $number1 * $number2;
}
if ($operator == '/'){
$result =  $number1 / $number2;
}

if ($operatorok == false){
$error = 'Operator is niet geldig voer een geldige operator in.'.$operator;
}
if (!is_numeric($number1)){
	$error = 'getal 1 is geen getal voer het in als cijfer bv (7 of 8). Wat u invulde -> '.$number1;
}


if (!is_numeric($number2)){
	$fout = 'getal 2 is geen getal, voer het in als cijfer bv (3 of 4). Wat u invulde ->  '.$number2;
}
$calculation = $number1 . $operator. $number2.'='.$result;




?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="frame">
<h1>Rekenmachine</h1>
<form action="phpcal.php" method="GET">
<label>Getal 1:  <input type="text" name="number1" value="0"  ></label><br>
<label>Getal 2:  <input type="text" name="number2" value="0"></label><br>
<label>Operator(+ - * /)<input type="text" name="operator" maxlength="1"></label><br>
<input type="submit" value="berekenen"name="submit">
</form>

<?php echo $calculation; ?><br>
<?php echo $error;   ?> <br>
<?php echo $fout;   ?> <br>
  </div>

</body>
</html>

