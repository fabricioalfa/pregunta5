<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'persona';
    protected $primaryKey = 'id_persona';
    protected $allowedFields = ['nombre', 'apellido', 'edad', 'rol', 'direccion', 'contraseña' ];

    public function obtenerUsuarios()
    {
        return $this->findAll();
    }

    public function eliminarUsuario($id)
    {
        return $this->delete($id);
    }

}
