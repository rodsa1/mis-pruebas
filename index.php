<?php

$conexion=mysqli_connect('localhost','root','','pruebas');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostar datos</title>
</head>
<body>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Last</th>
            
          </tr>
        </thead>
        <?php
        $sql="SELECT * from t_persona";
        $result=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($result)){

        ?>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $mostrar['id']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td><?php echo $mostrar['apellido']?></td>
            <td><?php echo $mostrar['email']?></td>
            <td><?php echo $mostrar['telefono']?></td>
          </tr>
<?php
}
?>
      </table>
    
</body>
</html>