"use strict"
//import DataModel from './DataModel.js';

let myDatamodel = null;
let count = 0;
let bilanz = 0;

  function betrag_hinzufuegen(event) {
        let titel = document.getElementById("titel"); // gibt das Objekt titel zurück
        let betrag = document.getElementById("betrag");
        let einnahme_ausgabe = document.getElementById("einnahme_ausgabe");
        let datum = document.getElementById("datum");
        let gesamtbilanz = document.getElementById("bilanz");
        
        const titelValue = titel.value; // hole den Wert aus dem Inputfeld und speicher es in einer Variable
        const einnahme_ausgabeValue = einnahme_ausgabe.value;
        const datumValue = datum.value;
        let betragValue = betrag.value;

        if (einnahme_ausgabeValue == "Einnahme") {
            bilanz += parseInt(betragValue); 
        } else {
            bilanz -= parseInt(betragValue)
        }

        gesamtbilanz.innerHTML += "Gesamtbilanz beträgt: " + bilanz + "<br>\n";
        
        console.log("vor saveAccounting");
        myDatamodel.saveAccounting(count++, titelValue, einnahme_ausgabeValue, datumValue, betragValue, bilanz);
        titel.value = "";
        betrag.value = "";
        einnahme_ausgabe.value = "";
        datum.value = "";
        
        


        myDatamodel.displaySingleAccounting();

        //event.preventDefault(); //Refresh wird verhindert, welcher durch den Button erzeugt wird
    };

  function init() {
        console.log("init");
        let saveButton = document.getElementById("button"); // gibt das Objekt butto zurück
        myDatamodel = new DataModel();
        saveButton.addEventListener("click", betrag_hinzufuegen); // sobald der Button geklickt wird, führe die Funktion aus 
    }

  // Hauptprogramm
  // document = DOM
  document.addEventListener("DOMContentLoaded", init); //wenn mein HTML komplett geladen ist dann führe init-Funktion aus
  

