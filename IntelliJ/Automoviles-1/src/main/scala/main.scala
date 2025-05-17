import org.json4s.native.JsonMethods._
import org.json4s.Extraction
import org.json4s.JsonDSL._


case class Vehiculo(id: Int, marca: String, modelo: String, año: Int, precio: Double)
case class Venta(id: Int, vehiculo: Vehiculo, vendedor: String, cliente: String)

object Consesionario {

  implicit val formats = org.json4s.DefaultFormats

  def precio_30(ventas: List[Venta]): List[Vehiculo] = {
    ventas.filter(venta => venta.vehiculo.precio > 30000).map(_.vehiculo)
  }

  def mas_caro(ventas: List[Venta]): Vehiculo = {
    val ultimo_año = ventas.map(venta => venta.vehiculo.año).max
    val vehiculos_ultimo_ano = ventas.filter(venta => venta.vehiculo.año == ultimo_año).map(_.vehiculo)
    vehiculos_ultimo_ano.reduce((vehiculo1, vehiculo2) => if (vehiculo1.precio > vehiculo2.precio) vehiculo1 else vehiculo2)
  }

  def ordenar_ventas(ventas: List[Venta]): List[Vehiculo] = {
    ventas.sortBy(venta => venta.vehiculo.año).reverse.map(_.vehiculo)
  }

  def generar_reporte(ventas: List[Venta]): String = {
    val precio30 = precio_30(ventas)
    val vehiculoMasCaro = mas_caro(ventas)
    val vehiculosOrdenados = ordenar_ventas(ventas)

    val reporte = ("vehiculos_mayor_30k" -> Extraction.decompose(precio30)) ~
      ("vehiculo_mas_caro_ultimo_año" -> Extraction.decompose(vehiculoMasCaro)) ~
      ("vehiculos_ordenados_por_año" -> Extraction.decompose(vehiculosOrdenados))

    pretty(render(reporte))
  }

  def main(args: Array[String]): Unit = {
    val ventas = List(
      Venta(1, Vehiculo(101, "Toyota", "Corolla Cross", 2025, 7000), "Juan", "Gui"),
      Venta(2, Vehiculo(102, "Honda", "Civic", 2023, 25000), "Luis", "P"),
      Venta(3, Vehiculo(103, "Ford", "Mustang", 2021, 45000), "Sara", "Falta"),
      Venta(4, Vehiculo(104, "Tesla", "Model 3", 2022, 60000), "Sofí", "a"),
      Venta(5, Vehiculo(105, "Chevrolet", "Camaro", 2020, 38000), "Diego", "Roberto")
    )

    val reporteJson = generar_reporte(ventas)
    println("Reporte JSON:")
    println(reporteJson)
  }

}