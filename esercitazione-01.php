<?php

//dati due numeri, stampa nell'ordine: somma, differenza, moltiplicazione, divisione
$a = 12;
$n = 24;

//data una parola, verifica se è uguale a "casa"
$parola="albero";

//es 3. dato due valori numerici verificarne l'uguaglianza
$c="145";
$d = 145;

//es4 converti il voto in un giudizio. 
// da 0 a 5 insufficiente
// 6 sufficiente
// 7 0 8 buono
// 9 ottimo
// 10 eccellente

//es1
$somma= $a+$n;
$differenza=$a-$n;
$moltiplicazione=$a*$n;
$divisione=$a/$n;
echo "la somma è $somma, la differenza è $differenza, la moltiplicazione è $moltiplicazione, la divisione è $divisione <br>";

//es2
if($parola == "casa"){
    echo "la parola è uguale";
}else{
    echo "la parola non è uguale";
}

echo "<br>";
//es3
if($c === $d){
    echo "i valori sono uguali";
}else{
    echo "i valori non sono uguali";
}

/** operatori logici
 * and-> and o &&
 * or -> or o ||
 * xor -> xor 
 * not -> !
**/

echo "<br>";

//es4
$voto = 10;
if($voto <= 5){
    echo "il voto è insufficiente";
}
if($voto == 6){
    echo "il voto è sufficiente";
}
if($voto == 7 or $voto == 8){
    echo "il voto è buono";
}
if($voto == 9){
    echo "il voto è ottimo";
}
if($voto == 10){
    echo "il voto è eccellente" . $voto; //il punto è un echo
}


?>