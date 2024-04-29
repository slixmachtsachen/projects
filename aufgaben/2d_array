public class Main {
    public static double[] tagTemp(int[][] values) {
        // Maximalwert und Minimalwert initialisieren
        int maxVal = Integer.MIN_VALUE;
        int minVal = Integer.MAX_VALUE;

        // Array duList initialisieren, bei dem die Größe des Arrays festgelegt wird,
        // um auf die Anzahl der Tage zu kommen
        double[] duList = new double[values.length];

        // array day speichert Werte einer einzelnen Zeile (eines Tages)
        // aus dem zweidimensionalen array values
        // wird gemacht um auf einzelne Temperaturen innherhalb der Zeile zu zugreifen
        // values.length = 24
        for (int i = 0; i < values.length; i++) {
            int[] day = values[i];

            // Summe für den Durchschnitt initialisieren
            int sum = 0;

            // Schleife über alle Werte des Tages
            // aktuelle Temperaturwert der Zeile wird in temperature gespeichert
            // day.length = 3
            for (int j = 0; j < day.length; j++) {
                int temperature = day[j];

                // Math. verlgeicht zwei Werte und gibt den größeren
                // bzw. kleineren Wert zurück
                // wird gemacht um Bereich der Temperaturen für alle Tage zu kennen
                // und anschließend die Differenz zu berechnen
                maxVal = Math.max(maxVal, temperature);
                minVal = Math.min(minVal, temperature);

                // Summe der Temperaturen des Tages bestimmen
                sum += temperature;
            }
            // die durschnittliche Temperatur des Tages wird in das array duList eingefügt
            // (double) wird verwendet, um ein genaues Ergebnis zu erzielen
            duList[i] = (double) sum / day.length;

        }
        // Differenz zwischen aller maximalen und minimalen Temperaturwerte über alle Tage
        double diff = maxVal - minVal;

        // von dem array duList wird jeweils die Differnez aller max. und min. Temperaturwerte aller Tage
        // abgezogen, damit die Durchschnittstemperaturen die Gesamtdifferenz berücksichtigen
        for (int i = 0; i < duList.length; i++) {
            duList[i] -= diff;
        }
        // duList zurückgeben

        return duList;

    }

    public static void main(String[] args) {
        // 2D-Array mit Tagestemperaturen für 24 Tage
        int[][] temperaturen = {
                {20, 25, 30},
                {15, 18, 22},
                {10, 12, 14},
                {25, 28, 31},
                {18, 21, 25},
                {12, 15, 18},
                {28, 31, 34},
                {22, 25, 28},
                {15, 18, 21},
                {30, 32, 35},
                {24, 26, 29},
                {18, 20, 23},
                {32, 34, 37},
                {26, 29, 32},
                {20, 23, 26},
                {35, 37, 40},
                {28, 31, 34},
                {22, 25, 28},
                {38, 40, 42},
                {30, 33, 36},
                {24, 27, 30},
                {40, 42, 45},
                {32, 35, 38},
                {26, 29, 32}
        };

        // Aufrufen der tagTemp-Methode
        double[] ergebnis = tagTemp(temperaturen);

        // Ausgabe der Ergebnisse mit foreach-Schleife
        for (double wert : ergebnis) {
            System.out.println(wert);
        }
    }
}
