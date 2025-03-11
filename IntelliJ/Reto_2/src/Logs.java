import java.net.InetAddress;
import java.net.UnknownHostException;
import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.List;
import java.util.Random;
import java.util.stream.Collectors;

public class Logs {
    public static void main(String[] args) throws InterruptedException {
        while (true) {
            List<String> logs = generateLogs(10);

            List<String> uniqueIPs = logs.stream()
                    .map(log -> log.split(" ")[0])
                    .distinct()
                    .collect(Collectors.toList());

            System.out.println("Fecha y hora: " + uniqueIPs.get(0)
                    + "| Tipo: " + uniqueIPs.get(1)
                    + "| Código: " + uniqueIPs.get(2)
                    + "| IP: " + uniqueIPs.get(3));
            Thread.sleep(1000);
        }
    }

    public static String get_IP() {
        try {
            return InetAddress.getLocalHost().getHostAddress();
        } catch (UnknownHostException e) {
            return "No se pudo obtener la IP local";
        }
    }


    private static List<String> generateLogs(int  count) {
        List<String> tipos = List.of("GET", "POST", "ERROR");
        String fecha_hora = String.valueOf(LocalDateTime.now());
        String tipo = tipos.get(new Random().nextInt(tipos.size()));
        int codigo = 0;
        List<String> respuesta = new ArrayList<>();
        if (tipo.equals("GET")){
            codigo = 200;
        }
        if (tipo.equals("POST")) {
            codigo = 201;
        }
        if (tipo.equals("ERROR")) {
            codigo = 404;
        }
        respuesta.add(fecha_hora);
        respuesta.add(tipo);
        respuesta.add(String.valueOf(codigo));
        respuesta.add(get_IP());

        return respuesta;
    }
}

