function es1(){
    let numeroInserito = window.prompt("inserisci un numero da 0 a 10");
    let numeroDaTrovare = Math.floor(Math.random() * 10); //math aiuta a randomizzare

    while(numeroInserito != numeroDaTrovare){
        numeroInserito = window.prompt("sbagliato, riprova!");
    }
document.getElementById("es1-numeroScelto").innerText = "Il numero era " + numeroInserito;
document.getElementById("es1-risultato").innerText = "Congratulazioni!";
}

function es2(){
    let numeroInserito = window.prompt("inserisci un numero da 0 a 10");
    
document.getElementById("es2").innerText = "il fattoriale e' " . numeroInserito;
}

function es3(){
    /** provo io
    let nome = window.prompt("inserisci nome");
    let cognome = window.prompt("inserisci cognome");
    let matricola = window.prompt("inserisci numero matricola");
    let voti = window.prompt("inserisci voti separati da virgola");
    
    var utente = {
    nome : "",
    cognome : "",
    matricola: "",
    media: ""
    };
    const numeri = voti.split(',');
    media = voti/voti;
    document.getElementById("es3").innerText = utente;
    */
   let studente = {
    nome: "",
    cognome: "",
    matricola: "",
    voti: []
   }
   for (chiave in studente){
    if (chiave != "voti"){
        studente[chiave] = window.prompt("inserire " + chiave);
    }else{
        let stringaVoti = window.prompt("inserire i voti separati da ','");
        studente[chiave] = stringaVoti.split(",");
    }
   }
   let mediaVoti = 0;
   for (voto of studente.voti){
    mediaVoti += parseInt(voto);
   }
   studente.mediaVoti = mediaVoti / studente.voti.length;

   let risultato = "";
   for(chiave in studente){
    if(chiave != studente.voti)
        risultato += chiave + ": " + studente[chiave] + "<br>";
   }
   document.getElementById("es3").innerHTML = risultato;
}