<?php
    function powReturn($base,$expo){
        $result = 1;
        $i = 1;

        if($_POST["expo"] == 0){
            echo "1";
        }else{
            for($result=1, $i=1; $i<=$_POST["expo"]; $i++)
            $result *= $_POST["base"];

            echo $result;
        }
    }
?>