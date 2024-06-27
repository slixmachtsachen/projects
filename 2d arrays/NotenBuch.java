public class NotenBuch {
    //private String _schueler;
    //private String _fach;
    public int[][] noten;

    

    public NotenBuch (int anzahl_schueler, int anzahl_faecher) {
        this.noten = new int[anzahl_schueler][anzahl_faecher];
    }
    /*
    void set_schueler(String schueler) {
    _schueler = schueler;
    }
    
    String get_schueler() {
        return _schueler;
    }

    void set_fach(String fach) {
        _fach = fach;
    }

    String get_fach() {
        return _fach;
    }
    */
    public void setNote(int schuelerNr, int fachNr, int note) {
        noten[schuelerNr][fachNr] = note;
    }
    
    public int getNote(int schuelerNr, int fachNr, int note) {
        noten[schuelerNr][fachNr] = note;
        return note;
    }

    public double avgSchueler(int schuelerNr) {
        int sum = 0;
        for (int i = 0; i < noten[schuelerNr].length; i++) {
            sum += noten[schuelerNr][i];
        } double avg = sum / noten[schuelerNr].length;
        return avg;
    }

    public double avgNote(int fachNr) {
        int sum = 0;
        for (int i = 0; i < noten.length; i++) {
            sum += noten[i][fachNr];
        } double avg = sum / noten.length;
        return avg;
    }   
}

