/*
 * Schreiben Sie ein Java-Programm, das eine Klasse namens "NotenBuch" implementiert. 
Diese Klasse soll ein zweidimensionales Array verwenden, um Noten für Schüler in verschiedenen Fächern zu speichern.
Das Programm soll die folgenden Funktionen bereitstellen:

Einen Konstruktor, der das zweidimensionale Array initialisiert.
Der Konstruktor soll die Anzahl der Schüler und die Anzahl der Fächer als Parameter erhalten und das Array entsprechend initialisieren.

Eine Methode namens "setNote", die die Note eines bestimmten Schülers in einem bestimmten Fach festlegt.
Diese Methode soll die Schüler- und Fachindizes sowie die Note als Parameter erhalten.

Eine Methode namens "getNote", die die Note eines bestimmten Schülers in einem bestimmten Fach zurückgibt. 
Diese Methode soll die Schüler- und Fachindizes als Parameter erhalten und die entsprechende Note aus dem Array zurückgeben.

Eine Methode für die Durchschnittsnote eines Schülers.

Eine Methode für die Durchschnittsnote pro Fach.

Schreiben Sie anschließend eine Hauptklasse (Main), die das NotenBuch-Objekt erstellt,
Noten festlegt und dann einige Noten abruft, um sicherzustellen, dass alles korrekt funktioniert.

Erzeugen Sie Testcode für alle Methoden.Schreiben Sie ein Java-Programm, das eine Klasse namens "NotenBuch" implementiert. 
Diese Klasse soll ein zweidimensionales Array verwenden, um Noten für Schüler in verschiedenen Fächern zu speichern.
Das Programm soll die folgenden Funktionen bereitstellen:

Einen Konstruktor, der das zweidimensionale Array initialisiert.
Der Konstruktor soll die Anzahl der Schüler und die Anzahl der Fächer als Parameter erhalten und das Array entsprechend initialisieren.

Eine Methode namens "setNote", die die Note eines bestimmten Schülers in einem bestimmten Fach festlegt.
Diese Methode soll die Schüler- und Fachindizes sowie die Note als Parameter erhalten.

Eine Methode namens "getNote", die die Note eines bestimmten Schülers in einem bestimmten Fach zurückgibt. 
Diese Methode soll die Schüler- und Fachindizes als Parameter erhalten und die entsprechende Note aus dem Array zurückgeben.

Eine Methode für die Durchschnittsnote eines Schülers.

Eine Methode für die Durchschnittsnote pro Fach.

Schreiben Sie anschließend eine Hauptklasse (Main), die das NotenBuch-Objekt erstellt,
Noten festlegt und dann einige Noten abruft, um sicherzustellen, dass alles korrekt funktioniert.

Erzeugen Sie Testcode für alle Methoden.
 */

import java.util.Arrays;

public class alg3 {
    public static void main(String[] args) {
        NotenBuch b1 = new NotenBuch(2, 3);

        b1.setNote(1, 0, 6);
        b1.setNote(1, 1, 3);
        b1.setNote(1, 2, 4);
        b1.setNote(0, 0, 3);
        b1.setNote(0, 1, 5);
        b1.setNote(0, 2, 6);


        System.out.println(Arrays.deepToString(b1.noten));


        double result = b1.avgSchueler(1);
        System.out.println(result);

        double result2 = b1.avgNote(1);
        System.out.println(result2);
    }
}
