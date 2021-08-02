let submit = document.getElementById('submit');


submit.onclick=functie;
function functie()

{
let achternaam = document.getElementById('achternaam').value;
let voornaam = document.getElementById('voornaam').value;
let onderwerp = "afspraak van "+ voornaam+" "+achternaam;
    //checken verplichte invoervelden
    if (achternaam!="" && voornaam!=""){
    
    let telefoon =   document.getElementById('telefoon').value;
    let email =   document.getElementById('email').value;
    let locatie =   document.getElementById('locatie').value;
  
    let opmerking = document.getElementById('opmerking').value;

    let bericht = voornaam +" "+ achternaam+" "+telefoon+" "+email+" "+locatie+" "+opmerking;
    window.location.href =  "afspraak.php?onderwerp=inschrijfformulier "+voornaam +" "+ achternaam+"&bericht=" + bericht ;
    }
    else{let melding = document.getElementById('melding');
        melding.removeAttribute("hidden");}
}