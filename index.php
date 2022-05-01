<?php
    function SequenciaCrescente($array){

        $newArray = [];

        for($i = 0; $i < count($array); $i++){
            
            $newArray = $array;
            unset($newArray[$i]);
            $newArray = array_values($newArray);

            $a = array_unique($newArray);
            asort($a);
            $arrayCrescente = array_values($a);

            if($newArray == $arrayCrescente){
                echo "True";
                exit;
            }
        }
        echo "False";
    }

    $array = [123, -17, -5, 1, 2, 3, 12, 43, 45];
    SequenciaCrescente($array);

    
?>