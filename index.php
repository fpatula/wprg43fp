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
function zadanie2($zakres){
    if ($zakres < 2){
        return;
    }
    for($i = 2; $i <= $zakres; $i++){
        $pierwsza = true;
        $pierwiastek = round(sqrt($i));
        for ($j = 2; $j <= $pierwiastek; $j++){
            if ($i%$j==0){
                $pierwsza = false;
                break;
            }
        }
        if ($pierwsza){
            echo $i."\n";
        }
    }
}
function zadanie3($N){
    $ciag = [0,0,1];
    if ($N > 3){
        for($i = 3; $i < $N; $i++){
            $ciag[$i]=$ciag[$i-1]+$ciag[$i-2];
        }
    }
    for($i = 1, $j = 1; $i < $N; $i += 2, $j++){
        echo $j.": ".$ciag[$i]."\n";
    }
}
zadanie1();
zadanie2(100);
zadanie3(3);
?>