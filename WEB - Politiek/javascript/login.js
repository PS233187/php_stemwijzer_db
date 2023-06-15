
function Inloggen() {
    var username = document.getElementById("login").value;
    var password = document.getElementById("password").value;


    if (username == "Gebruiker" && password == "politiek") {
        
    }  
    else {
        alert("Voer een geldig wachtwoord en gebruikersnaam in")
    }
}

function buttonText()   //nog fiksen? 
{
    var a = document.getElementById('textA').innerHTML;
    var b = document.getElementById('textB').innerHTML;
    var c = document.getElementById('textC').innerHTML;

    a.innerHTML = "Partij";
    b.innerHTML = "Standpunt";
    c.innerHTML = "";



}