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
