<?php

$conexion=mysqli_connect('localhost','root','','pruebas');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostar datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="row mt-5">
    <div class="col">
    <table class="table table-hover" >
        <thead>
          <tr>
          <th scope="col">#</th>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">email</th>
            <th scope="col">telefono</th>
            
          </tr>
        </thead>

        <?php
        $sql="SELECT * from t_personas";
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){

        ?>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $mostrar['ID']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td><?php echo $mostrar['apellidos']?></td>
            <td><?php echo $mostrar['email']?></td>
            <td><?php echo $mostrar['telefono']?></td>
          </tr>
<?php
}
?>
      </table>
      </div>
      </div>
</body>
</html>