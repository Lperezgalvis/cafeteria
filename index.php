<!DOCTYPE html>
<html>
    <head>
        <title>CAFETERIA</title>
    </head>
    <body>
        <?php
            include ("conexion.php"); /*trabajar con los datos*/
            $con=conectar();
           
            $sql="select * from productos";  /*var para almecenar la consulta sql*/
            $resul=mysqli_query($con,$sql);  /*ejecucion consulta (en var)*/
        ?>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Producto</th>
                        <th>Referencia</th>
                        <th>Precio</th>
                        <th>Peso</th>
                        <th>Categoria</th>
                        <th>Stock</th>
                        <th>Fecha Creacion</th>
                        <th>ACCION</th>

                    </tr>
                </thead>
                <tbody>
                    <?php while($filas=mysqli_fetch_assoc($resul)) { /*Acciones de mi tabla.(Mientras haya datos en $resul, siga include*/
                        ?>  
                    <tr>
                        <td><?php echo $filas['Id']?></td>
                        <td><?php echo $filas['Producto']?></td>
                        <td><?php echo $filas['Referencia']?></td>
                        <td><?php echo $filas['Precio']?></td>
                        <td><?php echo $filas['Peso']?></td>
                        <td><?php echo $filas['Categoria']?></td>
                        <td><?php echo $filas['Stock']?></td>
                        <td><?php echo $filas['Fecha_Creacion']?></td> 
                        <td>
                            <a href="">Editar </a>
                            <a href="">Eliminar </a>
                        </td>   

                    </tr>
                   
                    <?php } ?>
                </tbody>
                
            </table>
            <br>
            <tr>
                        <td>
                            <form method = "post" action = "index.php"></form>
                            Ingrese nuevo producto:
                            <br>
                            <input type = "text" name = "nproducto" >
                            <br>
                            Referencia:
                            <br>
                            <input type = "text" name = "nreferencia" >
                            <br>
                            Precio:
                            <br>
                            <input type = "text" name = "nprecio" >
                            <br>
                            Peso:
                            <br>
                            <input type = "text" name = "npeso" >
                            <br>
                            Categoria:
                            <br>
                            <input type = "text" name = "ncategoria" >
                            <br>
                            Stock:
                            <br>
                            <input type = "text" name = "nstock" >
                            <br>
                            Fecha:
                            <br>
                            <input type = "text" name = "nfecha" >
                            <br>
                            <br>
                            <input type = "submit" value = "CREAR">
                        </td>
                    </tr>
                    <?php
                   
                        $sql = "insert into productos(Producto, Referencia, Precio, Peso, Categoria, Stock, Fecha_Creacion)";
                        if (mysqli_query($con, $sql)) {
                            echo "New record created successfully";
                        }
                            else {
                              echo "Error: " . $sql . "<br>" . mysqli_error($con);
                        }
                        mysqli_close($con);
                
                    ?>
        </div>
    </body>
</html>