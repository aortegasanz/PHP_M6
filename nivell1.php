<?php
    /*
    NIVELL 1 
    - Exercici 1
    Programa la funció "resta" que, donats dos paràmetres ens retorni la resta dels dos números.

    - Exercici 2
    Programa una lògica que, donat un número qualsevol(per exemple,la teva edat) ens digui si és parell o imparell mitjançant un missatge per pantalla.

    - Exercici 3
    Agafa la lògica de l'exercici 2 i encapsulala en una funció de nom parell_o_imparell. Invoca aquesta funció per a comprovar que funciona correctament.
    
    - Exercici 4
    Programa un bucle que compti fins a 10, mostrant cada  número per pantalla.
    */
    echo "<br/> <strong>NIVELL 1</strong>";
    echo "<br/>";
    echo "<br/> <strong>Exercici 1</strong>";
    function resta($num_1, $num_2) {
        return $num_1 - $num_2;
    }
    echo "<br/> Resta ".resta(3,2);
    echo "<br/>";

    echo "<br/> <strong>Exercici 2</strong>";
    $edat = 40;
    echo "<br/> La teva edat (".$edat.") es un nombre ".($edat % 2 == 0 ? "Parell" : "Senar");
    echo "<br/>";

    echo "<br/> <strong>Exercici 3</strong>";
    function parell_o_imparell($numero) {
        //global $edat;
        return ($GLOBALS['edat'] % 2 == 0 ? "Parell" : "Senar");
    }
    echo "<br/> La teva edat (".$edat.") es un nombre ".parell_o_imparell($edat);
    echo "<br/>";

    echo "<br/> <strong>Exercici 4</strong>";
    echo "<br/>Números del 1 al 10";
    for ($x = 1; $x <= 10; $x++) {
        echo "<br/> $x";
    }
    echo "<br/>";
?>