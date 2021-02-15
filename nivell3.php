<?php
    /*
    Nivell 3
    - Exercici 1
    Ens han demanat un llistat amb tots els anys on es van produir jocs olímpics desde 1960(Roma) inclós fins al 2016(Río de Janeiro,també inclós). Programa un bucle que mostri per pantalla els anys olímpics dins de l'interval esmentat.
    
    - Exercici 2
    Imagina que som a una botiga on es ven:
    
    Xocolata: 1 euro
    Xiclets: 0.50 euros
    Carmels: 1.50 euros
    Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:
    
    2 xocolates, 1 de xiclets i 1 de carmels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així,
    
    funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2+0.5+1.5
    
    Sent per tant el total, 4.
    
    - Exercici 3
    La criba d'Eratóstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. 
    Basats en l'informació de l'enllaç adjunt, implementa la criba d'Eratóstenes dins d'una funció, de tal forma que poguem invocar la funció per a un número concret.
    */ 
    
    echo "<br/> <strong>NIVEL 3</strong>";
    echo "<br/>";
    echo "<br/> <strong>Exercici 1</strong>";
    echo "<br/>Jocs Ol&iacute;mpics";
    $jocs_inici = 1960; // Roma
    $jocs_final = 2016; // Rio 
    for ($jocs_inici; $jocs_inici <= $jocs_final; $jocs_inici += 4) {
        echo "<br> $jocs_inici";
    }
    echo "<br/>";

    echo "<br/> <strong>Exercici 2</strong>";
    echo "<br/>Botiga";
    // Definició de variable global de llista de preus com un array associatiu
    $GLOBALS['precios'] = ["xocolata" => 1.0, "xiclet" => 0.5, "carmel" => 1.5];
    // Definició de variable global de $subtotal;
    $GLOBALS['subtotal'] = 0.0;
    function afegir($producte, $cantitat) {
        $GLOBALS['subtotal'] += $cantitat * $GLOBALS['precios'][$producte];    
    }
    echo "<br/> <strong>Comanda</strong>";
    echo "<br/> 2 de Xocolata a 1.00€";
    afegir('xocolata',2);
    echo "<br/> 1 de Xiclets a 0.50€";
    afegir('xiclet',1);
    echo "<br/> 1 de Carmels a 1.50€";
    afegir('carmel',1);
    echo "<br/> TOTAL : ".number_format($GLOBALS['subtotal'],2). "€";
    echo "<br/>";

    echo "<br/> <strong>Exercici 3</strong>";
    echo "<br/> Criba d'Erat&oacute;stenes";
    function CribaEratosthenes($numero) {
       $todos = array();
       $primo = 1;
       echo "<br/>1 2";
       $i = 3;
       while($i <= $numero) {
            if(!in_array($i, $todos)) {
                echo " ",$i;
                $primo += 1;
                $j = $i;
                while($j <= ($numero/$i)) {
                   array_push($todos, $i*$j);
                   $j += 1;
                }
             }
            $i += 2;
       }
       echo "<br/>";
       return;
    }
    CribaEratosthenes(99);
?>