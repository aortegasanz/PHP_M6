<?php
    /*
    Nivell 2
    - Exercici 1
    Per jugar a "l'amagatall"  se'ns ha demanat un programa que compti fins a 10. Però la persona que comptarà és una mica tramposa y ho farà comptant de dos en dos. Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.

    - Exercici 2
    Imagina't que volem que conti fins a un número diferent de 10. Programa la funció per a que el final del compte estigui parametritzat.
    
    - Exercici 3
    Per a prevenir oblits al utilitzar la nostra meravellosa funció "amagatall" establirem un paràmetre per defecte a 10 en la funció que s'encarrega de fer aquest compte.
    */
    echo "<br/> <strong>NIVEL 2</strong>";
    echo "<br/>";
    echo "<br/> <strong>Exercici 1</strong>";
    echo "<br/>Comptador amb trampes";
    function compte_trampes() {
        for ($x = 0; $x <= 10; $x+=2) {
            echo "<br/> $x";
        }
    }
    compte_trampes();
    echo "<br/>";

    echo "<br/> <strong>Exercici 2</strong>";
    echo "<br/>Comptador fins a X";
    function compte_fins($fins) {
        for ($x = 0; $x <= $fins; $x++) {
            echo "<br/> $x";
        }
    }
    compte_fins(33);
    echo "<br/>";

    echo "<br/> <strong>Exercici 3</strong>";
    function compte_trampes_fins_default($fins = 10) {
        for ($x = 0; $x <= $fins; $x++) {
            echo "<br/> $x";
        }
    }
    echo "<br/>Comptador amb default = 10";
    compte_trampes_fins_default();
    echo "<br/>";
    echo "<br/>Comptador amb x = 33";
    compte_trampes_fins_default(33);
    echo "<br/>";
?>