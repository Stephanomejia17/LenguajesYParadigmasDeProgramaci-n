import java.util.List;

public class ClassPpal {
    public static void main(String[] args) {

        List<Integer> numeros = List.of(18, 6, 20, 15, 55, 78, 12, 9, 8);

        int contador = 0;
        for (int numero : numeros) {
            if(numero > 10) {
                contador ++;
            }
        }
        System.out.println("Los num > que 10 son: " + contador);

        Long result = numeros.stream().filter(num -> num > 10).count();
        System.out.println("Los num > que 10 son: " + result);
    }
}
