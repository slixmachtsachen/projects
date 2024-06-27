/******************************************************************************
 Es soll ein einfaches Spiel entwickelt werden. In dieser Aufgabe soll lediglich die Spielfigur auf dem Brett bewegt werden können. Das Spielfeld wird in einem Feld gespeichert.

 Die Aufgabenstellung:
 •	Das Feld hat eine Größe von 8 x 8
 •	Die Startposition der Figur ist oben links
 •	In einer Schleife werden die Bewegungsbefehle entgegengenommen
 •	Mit den Tasten w, a, s, d kann man die Figur auf dem Feld bewegen
 •	w hoch, a links, s runter, d rechts
 •	Wird die Spielfeldgrenze überschritten, landet die Figur auf der gegenüberliegenden Seite
 •	Das Programm lässt sich mit x beenden

 *******************************************************************************/
import java.util.Scanner; // importieren der Klasse Scanner

public class td_array_game
{
    public static void main(String[] args) {
        // anlegen eines 2d arrays 8x8
        int[][] feld = {
                {1, 0, 0, 0, 0, 0, 0, 0},
                {0, 0, 0, 0, 0, 0, 0, 0},
                {0, 0, 0, 0, 0, 0, 0, 0},
                {0, 0, 0, 0, 0, 0, 0, 0},
                {0, 0, 0, 0, 0, 0, 0, 0},
                {0, 0, 0, 0, 0, 0, 0, 0},
                {0, 0, 0, 0, 0, 0, 0, 0},
                {0, 0, 0, 0, 0, 0, 0, 0}
        };

        // erstellen einer Instanz einer der Klasse Scanner
        // System.in repräsentiert Benutzereingaben
        Scanner myObj = new Scanner(System.in);

        String bewegung;
        int row = 0;
        int column = 0;

        do {
            for (int i = 0; i < feld.length; i++) {
                for (int j = 0; j < feld[i].length; j++) {
                    System.out.print(feld[i][j]);
                }
                System.out.println();
            }

            System.out.println("Bewegungsbefehl eingeben: w,a,s,d");
            System.out.println("Drücke x um das Program zu beenden");
            // liest die Eingabe vom Scanner-Objekt
            bewegung = myObj.nextLine();

            System.out.println(bewegung);

            switch(bewegung) {
                case "s":
                    System.out.println(row + "" + feld.length);
                    if ((row + 1) < feld.length)
                    {
                        feld[row][column] = 0;
                        row += 1;
                        feld[row][column] = 1;
                    }
                    else {
                        feld[row][column] = 0;
                        row = 0;
                        feld[row][column] = 1;
                    }
                    break;
                case "w":
                    System.out.println(row + "" + feld.length);
                    if ((row - 1) > 0)
                    {
                        feld[row][column] = 0;
                        row -= 1;
                        feld[row][column] = 1;
                    } else {
                        feld[row][column] = 0;
                        row = feld.length - 1;
                        feld[row][column] = 1;
                    }
                    break;
                case "a":
                    System.out.println(row + "" + feld.length);
                    if ((column - 1) > 0)
                    {
                        feld[row][column] = 0;
                        column -= 1;
                        feld[row][column] = 1;
                    } else {
                        feld[row][column] = 0;
                        column = feld.length -1;
                        feld[row][column] = 1;
                    }
                    break;
                case "d":
                    System.out.println(row + "" + feld.length);
                    if ((column + 1) < feld.length)
                    {
                        feld[row][column] = 0;
                        column += 1;
                        feld[row][column] = 1;
                    } else {
                        feld[row][column] = 0;
                        column = 0;
                        feld[row][column] = 1;
                    }
            }
        }
          
        while (!bewegung.equals("x"));

    }
}
