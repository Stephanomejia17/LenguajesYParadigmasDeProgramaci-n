public class Imperativa {

    public static void main(String[] args) {
        int[] numbers = {1, 2, 3, 4, 5};
        int sum = 0;

        //Iterar sobre los elementos del arreglo y sumarlos
        for (int i = 0; i < numbers.length; i++) {
            sum += numbers[i];
        }

        System.out.println("La suma es: " + sum);
    }
}