<?php
    function countReturn($txtIni,$txtEnd,$txtP,$count){
        if ($txtIni < $txtEnd) {
                    
            //contagem crescente:
            while ($count <= $txtEnd) {
                echo "$count \u{1F449}";
                $count += $txtP;
            }
            
        } else if ($txtIni > $txtEnd) {

            //contagem regressiva:
            while ($count >= $txtEnd) {
                echo "$count \u{1F449}";
                $count -= $txtP;
            }

        } 
        echo "\u{1F3C1}";
    }
?>