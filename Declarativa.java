import java.util.Arrays;

public class Declarativa {

    public static void main(String[] args) {
        int[] numbers = {1, 2, 3, 4, 5};
        int sum = Arrays.stream(numbers).sum();

        System.out.println("La suma es: " + sum);
    }
}
