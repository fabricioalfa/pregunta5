<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Usuarios extends Controller
{
    public function index()
    {
        $usuarioModel = new UsuarioModel();
        $data['usuarios'] = $usuarioModel->obtenerUsuarios();

        return view('usuarios', $data);
    }

    public function eliminar($id)
    {
        $usuarioModel = new UsuarioModel();
        $usuarioModel->eliminarUsuario($id);
        
        return redirect()->to(base_url('usuarios'));
    }
}
