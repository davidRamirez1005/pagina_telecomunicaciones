
<!doctype html>
<html lang="en">

<head>
  <title>procesos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <tr>
    <th>nombres:</th>
    <th>apellidos: </th>
    <th>correo: </th>
    <th>telefono: </th>
    <th>comentarios:</th>
  </tr>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

<div class="resultados">
<?php
      // Conexión a la base de datos
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "formularioteleco2";

      $conn = mysqli_connect($servername,$username,$password,$dbname);

      // Verificar la conexión
      if (!$conn) {
          die("Conexión fallida: ".mysqli_connect_error());
      }

      // Consulta SQL para seleccionar los datos que deseas mostrar
      $sql = "SELECT * FROM telecomunicaciones2";

      $result = mysqli_query($conn,$sql);

      // Recorrer los registros y mostrarlos en la tabla
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["apellido"] . "</td>";
        echo "<td>" . $row["correo"] . "</td>";
        echo "<td>" . $row["telefono"] . "</td>";
        echo "<td>" . $row["comentarios"] . "</td>";

        echo "</tr>";
      }

      // Cerrar la conexión
      mysqli_close($conn);
    ?>
    </div>