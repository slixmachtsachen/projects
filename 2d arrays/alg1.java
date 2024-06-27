/******************************************************************************
Eine Forschungseinrichtung für neue Pflanzen benutzt Beete in rechteckiger Form.
Man kann sich das Beet wie ein rechteckiges Schachbrett vorstellen.
Die Felder haben eine eindeutige Nummer.
Das Feld oben links ist A1, das Feld unten recht ist z.B. G8

Ein Automat wertet ein Beet aus und liefert ein boolsches zweidimensionales array mit Werten.
True steht für Pflanze ist okay. False steht für Pflanze krank oder tot.
Theoretisch kann es beliebig viele Reihen und Spalten geben.

Sie haben die Aufgabe, verschiedene Auswertungen auf das gegebene Array durchzuführen.

a) Schreiben Sie eine Funktion "overviewBeet", die eine Liste in dieser Form ausgibt.
A O - O O O - 
B - O - - - -
Hinweise: O steht für Pflanze lebt = true. 
         - steht für Pflanze ist tot
         Die Zeile 0 im Array steht für die Feldreihe A. 
         Hinweis: Schauen Sie in die Ascii-Tabelle um von 0 auf A zu kommen.

b) Schreiben Sie eine Funktion "statBeet", die berechnet, wieviel 
  Prozent der Pflanzen am Leben sind und den Wert zurückliefert.
  
Wichtig: Verwenden Sie den Programmrumpf im Anhang dieser Aufgabe.  

Sie dürfen die length-Eigenschaft des Java Arrays verwenden.
System.out.println dürfen Sie immer verwenden.
Kopieren Sie die Aufgabenstellung als Kommentar oben in die Aufgabe.

Tipp: Nutzen Sie PythonTutor, um das Array zu visualisieren:
https://pythontutor.com/java.html#mode=edit

Hinweise:
Verwenden Sie keine For-Each Schleife
Funktionen aus der Java-Bibliothek, die hier nicht explizit genannt sind, 
dürfen Sie nicht verwenden.
 *******************************************************************************/
