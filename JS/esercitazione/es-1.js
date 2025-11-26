/**provo io 
var giorno = window.prompt("inserisci il giorno");
var mese = window.prompt("inserisci il mese");
var anno = window.prompt("inserisci l'anno");

if(giorno < 26){
    window.alert("il giorno è precedente a oggi");
} else{
    window.alert("il giorno è successivo a oggi");
}

if(mese < 11){
    window.alert("il mese è precedente a oggi");
} else{
    window.alert("il mese è successivo a oggi");
}

if(anno < 2025){
    window.alert("l'anno è precedente a oggi");
} else{
    window.alert("l'anno è successivo a oggi");
}
*/
function es1(){;
document.getElementById('es1-data').innerText = giorno + "/" + mese + "/" + anno;
let dataFutura;
let risultato;

if(anno == 2025){
    if(mese == 11){
        if(giorno == 26){
            document.getElementById("es1-risultato").innerText = "hai inserito la data di oggi";
        } else{
            dataFutura = (giorno > 26);
        }
    }else{
        dataFutura = (mese > 11);
    }
}else{
    dataFutura = (anno > 2025);
}
document.getElementById("es1-risultato").innerText = risultato;
}
es1();

function es2(){
    let giorno = window.prompt("inserisci il giorno:");
    let mese = window.prompt("inserisci mese:");
    let anno = window.prompt("inserisci anno:");

    let data = new Date(giorno + "/" + mese + "/" + anno);
    let giornoSettimana = data.getDay();
    let risultato;

    switch (giornoSettimana){
    case "1":
        window.alert("lunedì");
    break;
    case "2":
        window.alert("martedi");
    break;
    case "3":
        window.alert("mercoledi");
    break;
    case "4":
        window.alert("giovedi");
    break;
    case "5":
        window.alert("venerdi");
    break;
    case "6":
        window.alert("sabato");
    break;
    case "7":
        window.alert("domenica");
    break;  
    default:
        window.alert("non valido");
    }

    switch (mese){
    case "1":
        window.alert("gennaio");
    break;
    case "2":
        window.alert("febbraio");
    break;
    case "3":
        window.alert("marzo");
    break;
    case "4":
        window.alert("aprile");
    break;
    case "5":
        window.alert("maggio");
    break;
    case "6":
        window.alert("giugno");
    break;
    case "7":
        window.alert("luglio");
    break;
    case "8":
        window.alert("agosto");
    break;
    case "9":
        window.alert("settembre");
    break;
    case "10":
        window.alert("ottobre");
    break;
    case "11":
        window.alert("novembre");
    break;
    case "12":
        window.alert("dicembre");
    break;
    default:
        window.alert("non valido");
    }
}