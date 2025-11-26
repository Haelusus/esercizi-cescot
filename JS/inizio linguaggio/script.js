console.log("ciao, mondo!"); //stampa in console
window.alert("benvenuto"); //pop up sullo schermo
window.confirm("sei sicuro?") //pop up di conferma (ok o annulla). che ritorna true/false
window.prompt("inserisci un numero") //chiede un'informazione

//dichiarazione di variabili
var stringa1 = "ciao mondo"; //var globale, vibile sempre
let stringa2 = "ciao mondo"; //var locale. esiste solo dentrp quella struttura. si usa piu let.
const costante = "ciao mondo"; //costante. si usa in lettura, serve a gestire elementi che non devo cambiare valore, ma stato
costante = "nuova stringa";

//stringhe
var stringa = "insieme di caratteri"; //insieme di caratteri
console.log(stringa[2]); //si inizia da 0: nel testo il 2 è S
console.log(typeof stringa);

//interi = int
var intero = 1;
console.log(typeof intero); //vi ritorna il tipo di dato (ad esempio numero)

//decimali = float
var decimale = 1.2;
console.log(typeof decimale);

//boolean
var boot = true;
console.log(typeof boot);

//array
var array = [1, 2, 3, 4, 5, 6];
console.log(typeof array); //risulta object

//oggetto
var object = {
    "nome" : "mario",
    "eta" : 30
};
console.log(typeof object);

//operatori
var a = 1;
var b = 2;

console.log(a + b);
console.log(a - b);
console.log(a * b);
console.log(a / b);
console.log(a % b); //resto della divisione

a = 1;
console.log(a++); //legge e poi incrementa
console.log(++a); //incrementa e poi legge

//operatori logici
console.log(a < b);
console.log(a <= b);
console.log(a == 3); //uguaglianza
console.log(a == "3"); //uguaglianza per valore
console.log(a === "3"); // uguaglianza per valore e tipo
console.log(!(a < b)); //NOT
console.log(a == 3 && b == 1); //AND
console.log(a == 3 || b == 1); //OR

//concatenazione
console.log(stringa1 + stringa2);

a = 2;
b = 3;
c = "1";
var somma = a + c;

console.log(a + b); //somma
console.log(a + c); //concatenazione: 2 attaccato a 1, diventa 21
console.log(somma + b); //213
console.log(somma.lenght > 212); //false perchè la stringa deve essere lunga almeno 213 caratteri
console.log(somma > 20); // true perchè la somma viene convertita in numero
console.log (a + b + c); //51

//undefined: non definito. definitivamente indefinito. false
var d;
console.log(d); 
//undefined: nullo. momentaneamente è indefinito. false
var e = null; 
console.log(e);

var oggetto = {
    "nullo": null,
    "undefined": undefined
};
console.log(oggetto);
console.log(d == true); //false
console.log(e == true); //false
console.log(d == e); //entrambi falsi quindi true
console.log(d === e); //false perchè null è diverso da undefined