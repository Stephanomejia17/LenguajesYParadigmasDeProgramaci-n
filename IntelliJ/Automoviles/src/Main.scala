case class Vehiculo(id: Int, marca: String, modelo: String, año: Int, precio: Double)

case class Venta(id: Int, vehiculo: Vehiculo, vendedor: String, cliente: String)

object Consesionario {
  def ventas_marca(ventas: List[Vehiculo]): Float = {
    ventas.groupBy(vehiculo => vehiculo.marca)
  }

  def precio_30(ventas: List[Vehiculo]): List[Vehiculo] = {
    ventas.filter(vehiculo => vehiculo.precio > 30000)
  }

  def mas_caro(ventas: List[Vehiculo]): List[Vehiculo] = {
    val ultimo_año = ventas.map(vehiculo => vehiculo.año).max
    ventas.filter(vehiculo => vehiculo.año == ultimo_año).reduce((vehiculo1, vehiculo2) => if (vehiculo1.precio > vehiculo2.precio) vehiculo1 else vehiculo)
  }

  def ordenar_ventas(ventas: List[Vehiculo]): List[Vehiculo] = {
    ventas.sortBy(vehiculo => vehiculo.año).reverse
  }

  def generar_reporte(ventas: List[Vehiculo]):Int = {
  }

  def main(args: Array[String]): Unit = {
    val ventas = List( Venta(1, Vehiculo(101, "Toyota", "Corolla Cross", 2025, 7000), "Juan", "Gui"),
    Venta(2, Vehiculo(102, "Honda", "Civic", 2023, 25000), "Luis", "P"),
    Venta(3, Vehiculo(103, "Ford", "Mustang", 2021, 45000), "Sara", "Falta"),
    Venta(4, Vehiculo(104, "Tesla", "Model 3", 2022, 60000), "Sofí", "a"),
    Venta(5, Vehiculo(105, "Chevrolet", "Camaro", 2020, 38000), "Diego", "Roberto"))

    println(generar_reporte(ventas))
  }
}

