<?php

$mp = Readline ("Welke operatie wil je uitvoeren? (+, -, %)");

if ($mp == '+' || $mp == '-' || $mp == '%');
    else echo "'$mp' is ongeldig", exit;

$n1 = Readline ("Eerste getal?");

$n2 = Readline ("Tweede getal?");

if (is_numeric ($n1) );
 else echo "'$n1' is geen getal", exit;

 if (is_numeric ($n2) );
 else echo "'$n2' is geen getal", exit;

    if ($mp == "+")
    echo ($n1 + $n2);

    if ($mp == "-")
    echo ($n1 - $n2);

    if ($mp == "%")
    echo ($n1 % $n2);

?>
