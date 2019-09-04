<form action="#" method="post">
   <p>Escribe aquí el número: <input type="text" name="num" maxlength="2" size="2" /></p>
   <p><input type="submit" value="Calcular." /></p>
  
</form>

<?php  
function factorial(){
	$n=$_POST['num'];
	$acu=1;
	
	for ($i=1; $i <=$n ; $i++){ 
		$acu *=$i;
	}
	echo "el factorial " .$acu."";
}    

function manejoArreglos(){


}  
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  

factorial();

?>
</body>
</html>