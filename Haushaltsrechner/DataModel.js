"use strict"
//Class besteht aus Daten (Variablen) hier: this.buchungen
class DataModel {
    constructor() { // intialsiert die Objektvariablen, hier: this.buchungen mit sinnvollen Werten
        this.buchungen = [];
        this.loadPersistent();
    }
    saveAccounting(_id, _titel, _typ, _datum, _betrag, _bilanz) { // Methode ist eine Funktion, die eine Aktion für das Objekt ausführt
        let eingabe = { // erzeuge ein JS-Objekt mit Daten (reiner Datenspeicher)
            id: _id, 
            titel: _titel,
            typ: _typ,
            datum: _datum,
            betrag: _betrag,
            bilanz: _bilanz,
        };  
        this.buchungen.push(eingabe); // Das Objekt eingabe wird dem Array buchungen hinzugefügt
        this.displaySingleAccounting(eingabe);
        console.log("vor savePersistent");
        this.savePersistent();
    }

    loadPersistent() {
      let haushaltData = localStorage.getItem("haushaltsrechner");
      this.buchungen = JSON.parse(haushaltData);
      console.log(this.buchungen)
      if (this.buchungen != null) {
        this.displayAccounting2();
      } else {
        this.buchungen = [];
      }
    }

    savePersistent() {
      console.log(this.buchungen)
      let jsonData = JSON.stringify(this.buchungen);
      localStorage.setItem("haushaltsrechner", jsonData);
    }

      addRow(table, element) {
        let row = table.insertRow(); // Neue Zeile in HTML erzeugen
        for (let key in element) {       // key= Attributname des Objekts   for in Schleife
          let cell = row.insertCell(); // Neue Zelle erzeugen
                                        // element[key] ist das Attribut
          let text = document.createTextNode(element[key]); // Textelement erzeugen
          cell.appendChild(text);    // Text an die Zelle hängen.
        }
      }
      
      generateTable(table, data) {
        for (let element of data) {    // Objekt für Objekt im array      for of Schleife
          this.addRow(table, element);
        }
      }

    displaySingleAccounting(singleData) {
      const table = document.getElementById("accountingTable");
      this.addRow(table, singleData);

    }  
    displayAccounting2() {
        const table = document.getElementById("accountingTable");
        this.generateTable(table, this.buchungen);
    }
  }