<style>

    .resultado{
        color:#F00;
        font-weight: bold;
        font-size: medium;

    }
</style>



<?php


function calcular($calculo){
    global $numero1,$numero2;
    if (!strcmp("Suma", $calculo)) {
        $resultado = ($numero1 + $numero2);
        echo "<p class='resultado'> El resultado de la suma entre $numero1 y $numero2 es: $resultado </p> "  ;
    }
    if (!strcmp("Resta", $calculo)) {
        $resultado =($numero1 - $numero2);
        echo "<p class='resultado'> El resultado de la resta entre $numero1 y $numero2 es: $resultado </p> " ;
    }
    if (!strcmp("Multiplicación", $calculo)) {
        $resultado = ($numero1 * $numero2);
        echo "<p class='resultado'> El resultado de la multiplicación entre $numero1 y $numero2 es: $resultado </p> "  ;
    }
    if (!strcmp("División", $calculo)) {
        $resultado =($numero1 / $numero2);
        echo "<p class='resultado'> El resultado de la división entre $numero1 y $numero2 es: $resultado </p> "  ;
    }
    if (!strcmp("Módulo", $calculo)) {
        $resultado =($numero1 % $numero2);
        echo "<p class='resultado'> El resto al dividir $numero1 entre $numero2 es: $resultado </p> "  ;
    }
    if (!strcmp("Incremento", $calculo)) {
        $numero1++;
        $resultado=$numero1;
        echo "<p class='resultado'> El incremento  es: $resultado </p> "  ;
    }
    if (!strcmp("Decremento", $calculo)) {
        $numero1--;
        $resultado=$numero1;
        echo "<p class='resultado'> El decremento  es: $resultado </p> "  ;
    }

}
?>
