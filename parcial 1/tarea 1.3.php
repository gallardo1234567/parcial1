<html>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>5630. COLEGIATURA</h1>

<h2>Descripción</h2>
La mamá de Esteban lo quiere incribir a la mejor preparatoria de Cuernavaca, pero se preocupa por 
desconocer el costo, así que nos pide ayuda para que realicemos un programa que la ayude a calcular su gasto.
<h2 class="pg">Plan de pagos: </h2>
La colegiatura se determina según las materias que vaya a cursar, cada una cuesta $1600.
Existe un programa que estimula a los estudiantes: si su promedio es mayor o igual a 9, se le hace un descuento 
del 30% a la colegiatura sin cobrarle el IVA; si el promedio es menor a 9 se deberá pagar la colegiatura completa, 
más el IVA.

<h2>Entrada y Salida</h2>
Número de mataerias "A" que va a cursar, un número con decimales "B" que es igual al promedio de Esteban; y un número
entero "C" con el total de la colegiatura.  

<h2>Ejemplo :</h2>


<table border="3" cellspacing="2" cellspadding="2"  class="tabla">
    <tr>
        <th>Entrada</th> 
        <th>salida</th>
    </tr>
    <tr >
        <td> 5 <br> 9.6</td>
        <td> $5600 </td>
    </tr>
    <tr>
        <td> 8 <br> 7.8</td>
        <td> $14848 </td>
    </tr>
    <tr>
        <td> 2 <br> 8</td>
        <td> $3712 </td>
    </tr>
     </table>

<?php
  echo " <hr> <br>";
$j=8;
$o=7.8;
$a=($A*1600);
if($o>=9)
{
    
    $a1=($a*30)/100;
    $total=$a-$a1;
}
else
{

    $total=$a+(($a*16)/100);
}
echo "La colegiatura final que pagará la mamá de Esteban es igual a : $", $total;
echo "<hr> <br>";

?>
</body>
</html>