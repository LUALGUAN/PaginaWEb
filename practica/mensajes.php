<form action="#" method="post">
   <p>Escribe aquí el número: <input type="text" name="num" maxlength="2" size="2" /></p>
   <p><input type="submit" value="Calcular operaciones." /></p>
  
</form>

<?php  
function operaciones(){

echo "TABLAS DE SUMAR ";
echo "Escribe un número del 1 al 20 para ver la tabla de SUMAR";

        $n=$_POST['num'];
        if ($n<1 or $n>20) {
            echo "no has escrito un nůmero entre el 1 y el 20.";
            }
        else {
             echo "<h4>TABLA DEL $n:</h4>";
             $i=1;
             while ($i<=12) {
                   echo "$n + $i = ".($n+$i)."<br/>";
                   $i++;
                   } 
             }
            

echo "TABLAS DE MULTIPLICAR ";
echo "Escribe un número del 1 al 20 para ver la tabla de multiplicar";

        $n=$_POST['num'];
        if ($n<1 or $n>20) {
            echo "no has escrito un nůmero entre el 1 y el 20.";
            }
        else {
             echo "<h4>TABLA DEL $n:</h4>";
             $i=1;
             while ($i<=12) {
                   echo "$n * $i = ".$n*$i."<br/>";
                   $i++;
                   } 
             }
    }        
?>

  

</body>
</html>