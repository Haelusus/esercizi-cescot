<?php

    //numeri
    echo 10;
    echo "\n"; //a capo del documento di output
    echo 1.15; //

    //numeri delle variabili
    $nomevariabile;
    $nomeVariabile;

    //array. si accede ai valori usando l'indice
    $array_1 = [1,2,3,4,5];
    $array_2 = array(1,2,3,4,5);
    //non ci sono differenze

    //array con chiavi per accedere ai valori
    $array_3=array(
        "nome" => "mario",
        "cognome" => "rossi",
        "eta" => 21
    ); //solitamente si vede l'array dichiarato così

    echo $array_3;//non posso stampare direttamente in array

    echo "<br/>";
    print_r($array_3);
    echo "<br/>";
    var_dump($array_3);

    //verifica se mario è maggiorenne o no
    if ($array_3["eta"] >= 18){ //per anonimi, usare numero dentro parentesi quadra
        echo "utente maggiorenne";
    }else{
        echo "utente minorenne";
    }

    //verifica se mario ha 18 anni
    if($array_3["eta"] == "18"){
        echo "utente diciottenne<br/>";
    }else{
        echo "utente non diciottenne<br/>";
    }

    //uguaglianza stretta, === controlla valore E tipo
    if($array_3["eta"] == 21) {}//questa condizione è VERA
    if($array_3["eta"] == "21") {}//questa condizione è VERA
    if($array_3["eta"] === 21) {}//questa condizione è VERA
    if($array_3["eta"] === "21") {}//questa condizione è FALSA

?>