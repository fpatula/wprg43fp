<?php
function zadanie1(){
    $owoce = array("jablko", "pomarancz", "pomidor", "cytryna");
    foreach ($owoce as $owoc){
        $cowo = "";
        for ($i = strlen($owoc) - 1; $i > -1; $i--){
            $cowo .= $owoc[$i];
        }
        if ($owoc[0]=="p"){
            echo "Owoc zaczyna się na p\n";
        }
        echo $cowo."\n";
    }
}
zadanie1();
?>