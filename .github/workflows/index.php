<?php
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión Mensajería</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">

<h1>Gestión de Envíos</h1>

<h2>Registrar Envío</h2>

<form action="index.php?accion=guardar" method="POST">

    <label>Destinatario</label>
    <input type="text" name="destinatario" required>

    <label>Dirección</label>
    <input type="text" name="direccion" required>

    <label>Descripción</label>
    <textarea name="descripcion" required></textarea>

    <button type="submit">Guardar</button>
</form>

<hr>

<h2>Lista de Envíos</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Destinatario</th>
        <th>Dirección</th>
        <th>Descripción</th>
        <th>Acciones</th>
    </tr>

<?php while($fila = $resultado->fetch_assoc()) { ?>

<tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['destinatario']; ?></td>
    <td><?php echo $fila['direccion']; ?></td>
    <td><?php echo $fila['descripcion']; ?></td>
    <td>

        <form action="index.php?accion=actualizar" method="POST">

            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

            <input type="text" name="destinatario" value="<?php echo $fila['destinatario']; ?>">

            <input type="text" name="direccion" value="<?php echo $fila['direccion']; ?>">

            <input type="text" name="descripcion" value="<?php echo $fila['descripcion']; ?>">

            <button type="submit">Actualizar</button>

        </form>

        <br>

        <a href="index.php?accion=eliminar&id=<?php echo $fila['id']; ?>">
            Eliminar
        </a>

    </td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>