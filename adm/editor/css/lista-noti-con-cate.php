<?php
    //aqui se consulta por el ultimo codigo en bd y se le suma uno para guardar el codigo de noticia
    $mysqli->real_query("SELECT n.codigo, n.titulo, c.descripcion FROM noticia n INNER JOIN categoria_noticia c ON c.codigo = n.categoria ORDER BY c.codigo DESC");
    $resultado = $mysqli->use_result();
    $cont = 0;
    while ($fila = $resultado->fetch_assoc()) {
        $codigo = $fila['codigo'];
        $codigo = $fila['titulo'];
        $descripcion = $fila['descripcion'];
        $cont++;
?>
                <tr>
                    <td>
                        <strong><?php echo $cont; ?></strong>
                    </td>
                    <td>
                        <?php echo $codigo; ?>
                    </td>
                    <td>
                        <strong><?php echo $titulo; ?></strong>
                    </td>
                    <td>
                        <strong><?php echo $descripcion; ?></strong>
                    </td>
                    <td>
                        <a href="#">Borrar</a>
                    </td>
                </tr>
<?php
     }
?>