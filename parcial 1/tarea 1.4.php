<html>
    <body>
        <h2>ESTRUCTURA DE CONTROL (IF)</h2>
        <?php
          $a=35;
          $b=30;
          if($a>$b)
          {
            echo "EL MAYOR ES: ",$a, "<BR>";
          }
          if($a>=$b)
          {
            echo "ENTONCES MAYOR ES A: ",$b, "<br>";
          }
          else
          {
            echo "EL MAYOR ES B: ",$b, "<br>";
          }
          echo "<hr>"
          $estacion="primavera";
          if($estacion=="invierno")
          {
            echo "invierni, 21-12 al 20-03";
          }
          elseif($estacion=="primavera")
          {
            echo "primavera, 21-03 al 20-06";
          }
          elseif($estacion=="verano")
          {
            echo "verano, 21-06 al 20-09";
          }
          elseif($estacion=="otoño")
          {
            echo "otoño, 21-09 al 20-012";
          }
          echo "<hr>"
          $a=65;
$b=7;
if($a==7 and $b==7)
{
    echo "HAY: 2 - DOS SIETES";
}
elseif($a==7 || $b==7)
{
    echo " HAY: 1 - UN SIETE";
}
else
{
    echo " HAY: 0 - CERO SIETES";
}
        ?>
    </body>
</html>
