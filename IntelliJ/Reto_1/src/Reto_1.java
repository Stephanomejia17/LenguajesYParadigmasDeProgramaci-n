import java.util.Arrays;
import java.util.Comparator;
import java.util.List;
import java.util.stream.Collectors;

/**
 * Ejercicio:
 * Gestión de Pedidos de una Tienda Online
 * Tienes una lista de pedidos con información sobre el cliente, el total del
 * pedido y el estado del pedido. Debes procesar esta lista para:
 *
 * 1. Obtener los pedidos cuya cantidad total sea mayor a 200,000 COP.
 * 2. Obtener una lista de clientes que tengan pedidos con estado "PENDIENTE".
 * 3. Calcular el total de todos los pedidos que han sido ENTREGADOS.
 * 4. Generar una lista de nombres de clientes únicos que han hecho pedidos.
 * 5. Ordenar los pedidos por monto de mayor  a menor
 **/

public class Reto_1 {
    public static void main (String [] args){

        List<Pedido> pedidos = Arrays.asList(
                new Pedido("Michell", 150000, Estado.PENDIENTE),
                new Pedido("Ander", 210000, Estado.PENDIENTE),
                new Pedido("Son", 110000, Estado.ENTREGADO),
                new Pedido("Michell", 250000, Estado.ENTREGADO)
        );

        System.out.println("Lista de Pedidos: " + pedidos);

        // 1.

        List<Pedido> mayores_de_200 = pedidos.stream()
                .filter(cantidad -> cantidad.cantidad >= 200000)
                .toList();

        System.out.println("Pedidos mayores a 200: \n" + mayores_de_200);

        // 2.
        List<Pedido> pedidos_pendientes = pedidos.stream()
                .filter(estado -> estado.estado.equals(Estado.PENDIENTE))
                .toList();
        System.out.println("Pedidos pendientes: \n" + pedidos_pendientes);

        // 3.
        double suma_pedidos_entregados = pedidos.stream()
                .filter(estado -> estado.estado.equals(Estado.ENTREGADO))
                .mapToDouble(Pedido::getCantidad).sum();

        System.out.println("Suma de pedidos entregados: " + suma_pedidos_entregados);

        // 4.
        List<String> nombre_pedidos_unicos = pedidos.stream()
                .sorted(
                        Comparator.comparing(Pedido::getName)
                )
                .map(nombre -> nombre.name)
                .distinct()
                .toList();

        System.out.println("Pedidos únicos: " + nombre_pedidos_unicos);

        // 5.
        List<Pedido> pedidos_ordenados = pedidos.stream()
                .sorted(
                        Comparator.comparing(Pedido::getCantidad).reversed()
                )
                .toList();

        System.out.println("\nPedidos ordenados de mayor a menor: \n" + pedidos_ordenados);



    }

    static public  class Pedido {
        private final String name;
        private final float cantidad;
        private final Estado estado;

        public Pedido(String name, float cantidad, Estado estado) {
            this.name = name;
            this.cantidad = cantidad;
            this.estado = estado;
        }

        @Override
        public String toString() {
            return "\nname: " + name +
                    " cantidad: " + cantidad +
                    " estado: " + estado +"\n";
        }

        public String getName() {
            return name;
        }

        public float getCantidad() {
            return cantidad;
        }

        public Estado getEstado() {
            return estado;
        }
    }

    enum Estado {
        ENTREGADO, PENDIENTE;
    }
}