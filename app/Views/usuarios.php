<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Acción</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario['id_usuario'] ?></td>
                <td><?= $usuario['nombre'] ?></td>
                <td><?= $usuario['apellido'] ?></td>
                <td><?= $usuario['correo'] ?></td>
                <td><a href="<?= base_url('usuarios/eliminar/'.$usuario['id_usuario']) ?>">Eliminar</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
