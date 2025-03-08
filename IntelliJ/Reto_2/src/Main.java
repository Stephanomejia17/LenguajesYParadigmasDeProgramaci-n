import java.util.List;

public class Main {

    /**
     * Ejercicio: Análisis Concurrente de Logs de Servidor
     * Objetivo del progama en Java: Implementar un programa que procese y analice
     * logs de servidor de manera concurrente utilizando programación funcional e
     * hilos en Java como lo hemos visto en clase.
     *
     * Descripción:
     *
     * Generar Logs de Servidor:
     * Por favor gente, Simular la generación de logs de servidor (Linux o Win) con información como:
     *  - la dirección IP,
     *  - la fecha y hora de la solicitud,
     *  - el tipo de solicitud (GET, POST...)
     *  - Y el código de respuesta (200, 404, entre otros).
     * Usar: Procesamiento Concurrente: Utiliza Stream y ExecutorService para procesar
     * los logs de manera concurrente.
     * Análisis de Datos: Aplica los métodos filter(), map(), flatMap(), distinct(),
     * sorted(), limit(), skip(), reduce(), y collect() para analizar los datos.
     *
     * **/
    public static void main(String[] args) {
        List<String> logs = generateLogs(1000);
        List<String> uniqueIPs = logs.stream().toList();
    }
}