let submit = document.getElementById('submit');


submit.onclick=functie;
function functie()

{
let achternaam = document.getElementById('achternaam').value;
let voornaam = document.getElementById('voornaam').value;
let onderwerp = "inschrijfformulier van "+ voornaam+" "+achternaam;
    //checken verplichte invoervelden
    if (achternaam!="" && voornaam!=""){
    let straat =     document.getElementById('straat').value;
    let huisnummer =   document.getElementById('huisnr').value;
    let woonplaats=     document.getElementById('woonplaats').value;
    let postcode=     document.getElementById('postcode').value;
    let telefoon =   document.getElementById('telefoon').value;
    let email =   document.getElementById('email').value;
    let locatie =   document.getElementById('locatie').value;
    let type = document.getElementById('type').value;
    let opmerking = document.getElementById('opmerking').value;

    let bericht = voornaam +" "+ achternaam+" "+ straat +" "+huisnummer+" "+postcode+" "+woonplaats+" "+telefoon+" "+email+" "+locatie+" "+type+" "+opmerking;
    window.location.href =  "inschrijven.php?onderwerp=inschrijfformulier "+voornaam +" "+ achternaam+"&bericht=" + bericht ;
    }
    else{let melding = document.getElementById('melding');
        melding.removeAttribute("hidden");}
}