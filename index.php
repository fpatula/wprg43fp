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
    for($i = 0, $j = 1; $i < $N; $i += 2, $j++){
        echo $j.": ".$ciag[$i]."\n";
    }
}
function zadanie4(){
    $tekst = explode(" ","\"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
    $ilosc = sizeof($tekst);
    for($i = 0; $i < $ilosc; $i++){
        $znak = false;
        $slowo = $tekst[$i];
        $dlugosc = strlen($slowo);
        for ($j = $dlugosc - 1; $j > -1; $j--) {
            if ($slowo[$j] == "," ||
                $slowo[$j] == "." ||
                $slowo[$j] == "'" ||
                $slowo[$j] == '"' ||
                $slowo[$j] == ";") {
                $znak = true;
                $ilosc -= 1;
                break;
            }
        }
        if ($znak){
            for ($j = $i + 1; $j < $ilosc; $j++){
                $tekst[$j-1] = $tekst[$j];
            }
            $tekst[$ilosc - 1] = "";
        }
    }
    $k = "";
    $tablica = [];
    foreach ($tekst as $klucz => $wartosc){
        if($wartosc === ""){
            continue;
        }
        if ($klucz%2 == 0){
            $k = $wartosc;
        } else {
            $tablica[$k] = $wartosc;
        }
    }
    foreach ($tablica as $klucz => $wartosc){
        echo $klucz.":".$wartosc."\n";
    }
}

zadanie1();
zadanie2(100);
zadanie3(3);
zadanie4();
?>