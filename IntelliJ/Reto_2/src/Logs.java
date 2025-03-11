import java.io.IOException;
import java.net.InetAddress;
import java.net.UnknownHostException;
import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.List;
import java.util.Random;

public class Logs {
    private static volatile boolean condicional = true; // Variable compartida entre hilos

    public static void main(String[] args) throws InterruptedException, IOException {
        int cont_GET = 0;
        int cont_POST = 0;
        int cont_ERROR = 0;

        System.out.println("Presiona Enter para finalizar");

        Thread inputThread = new Thread(() -> {
            try {
                System.in.read(); // Espera hasta que se presione Enter
                condicional = false;  // Cambia el estado para detener el bucle
            } catch (IOException e) {
                e.printStackTrace();
            }
        });

        inputThread.start(); // Iniciar el hilo de escucha

        while (condicional) { // Bucle principal, se ejecuta mientras condicional sea true
            List<String> logs = generateLog();

            String tipo = logs.get(1);
            if (tipo.equals("GET")) {
                cont_GET++;
            } else if (tipo.equals("POST")) {
                cont_POST++;
            } else {
                cont_ERROR++;
            }

            System.out.println("Fecha y hora: " + logs.get(0) +
                    " | Tipo: " + logs.get(1) +
                    " | Código: " + logs.get(2) +
                    " | IP: " + logs.get(3));

            Thread.sleep(1000); // Espera 1 segundo antes de la siguiente iteración
        }

        System.out.println("\nPrograma finalizado.");
        System.out.println("Cantidad de GET: " + cont_GET);
        System.out.println("Cantidad de POST: " + cont_POST);
        System.out.println("Cantidad de ERROR: " + cont_ERROR);
    }

    public static String get_IP() {
        try {
            return InetAddress.getLocalHost().getHostAddress();
        } catch (UnknownHostException e) {
            return "No se pudo obtener la IP local";
        }
    }

    private static List<String> generateLog() {
        List<String> tipos = List.of("GET", "POST", "ERROR");
        String fecha_hora = String.valueOf(LocalDateTime.now());
        String tipo = tipos.get(new Random().nextInt(tipos.size()));
        int codigo = switch (tipo) {
            case "GET" -> 200;
            case "POST" -> 201;
            default -> 404;
        };

        List<String> log = new ArrayList<>();
        log.add(fecha_hora);
        log.add(tipo);
        log.add(String.valueOf(codigo));
        log.add(get_IP());

        return log;
    }
}
