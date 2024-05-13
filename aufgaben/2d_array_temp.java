/******************************************************************************
 Für die Prüfungsaufgaben zum Thema Algorithmen ist das Verständnis von zweidimensionalen Arrays sehr wichtig. Dazu eine erste Aufgabe:

 Gegeben ist ein 2D-Array. In jeder Zeile sind Tagestemperaturen gespeichert. Zu jeder vollen Stunde wird gemessen.  Jeder Tag ist eine Zeile.

 public static double tagTemp(int[][] values) {
 …
 }

 Die Java-Funktion berechnet den Maximalwert und den Minimalwert aller Temperaturen und berechnet die Differenz double diff = maxVal - minVal;

 Die Funktion erstellt ein Array “duList”, welches für jeden Tag den Durchschnittswert berechnet.
 duList[0] ist also der Durchschnittswert für den ersten Tag von “values”, usw.

 Von jedem Wert in “duList” soll noch diff abgezogen werden.

 Die Methode tagTemp() gibt das array duList zurück.

 In der Java Mainfunktion werden alle Werte der zurückgegebenen Liste aufgelistet.

 Hinweis:
 Ein zweidimensionales array ist ein array, welches weitere Arrays als seine Elemente enthält.
 *******************************************************************************/
public class Main
{
    public static void main(String[] args) {
        int [][] temperaturen = {
                {20, 21, 22, 20, 19, 18, 18, 17, 17, 17, 16, 16, 16, 16, 16, 16, 16, 16, 17, 17, 18, 18, 19, 19},
                {22, 22, 22, 21, 21, 21, 21, 20, 20, 20, 20, 19, 19, 19, 19, 19, 19, 19, 20, 20, 21, 21, 22, 22},
                {18, 18, 18, 18, 18, 19, 19, 19, 20, 20, 20, 20, 20, 21, 21, 21, 21, 21, 22, 22, 22, 22, 23, 23},
                {23, 23, 23, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 21, 21}
        };
        double[] result = tagTemp(temperaturen);

        for (int i = 0; i < result.length; i++) {
            System.out.println(result[i]);
        }
    }

    public static double[] tagTemp(int[][] values) {
        int max = values[0][0];
        int min = values[0][0];

        for (int i = 0; i < values.length; i++) {
            for (int j = 0; j < values[i].length; j++) {
                if (values[i][j] < min) {
                    min = values[i][j];
                } else if (max < values[i][j]) {
                    max = values[i][j];
                }
            }
        }
        int diff = 0;
        diff = max - min;

        double[] duList = new double[values.length];

        int sum = 0;

        for (int i = 0; i < values.length; i++) {
            for (int j = 0; j < values[i].length; j++) {
                sum += values[i][j];
            }
            duList[i] = sum / values[i].length;
            sum = 0;
        }

        for (int i = 0; i < duList.length; i++) {
            duList[i] -= diff;
        }
        System.out.println("Max: " + max + "" + "Min:" + min);

        return duList;
    }
}
