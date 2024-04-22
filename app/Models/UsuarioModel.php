<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'ci', 'correo', 'contrasena', 'celular'];

    public function obtenerUsuarios()
    {
        return $this->findAll();
    }

    public function eliminarUsuario($id)
    {
        return $this->delete($id);
    }
}
