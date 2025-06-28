<?php
namespace App\Controllers;
Use App\Models\Usuarios_model;
Use App\Models\Perfiles_model;
use CodeIgniter\Controller;

class Usuario_controller extends Controller {

	public function __construct() {
           helper(['form', 'url']);

	}
  public function create() {
        
   $dato['titulo']='Registro'; 
    echo view('front/head_view',$dato);
    echo view('front/nav_view');
    echo view('back/usuario/registro');
    // echo view('front/registro');
    echo view('front/footer_view');
  }
 
  public function formValidation() {           
     
    $input = $this->validate([
      'nombre' => [
          'rules' => 'required|min_length[3]',
          'errors' => [
              'required' => 'El campo nombre es obligatorio.',
              'min_length' => 'El nombre debe tener al menos 3 caracteres.'
          ]
      ],
      'apellido' => [
          'rules' => 'required|min_length[3]|max_length[25]',
          'errors' => [
              'required' => 'El campo apellido es obligatorio.',
              'min_length' => 'El apellido debe tener al menos 3 caracteres.',
              'max_length' => 'El apellido no puede superar los 25 caracteres.'
          ]
      ],
      'email' => [
          'rules' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
          'errors' => [
              'required' => 'El correo es obligatorio.',
              'min_length' => 'El correo debe tener al menos 4 caracteres.',
              'max_length' => 'El correo no puede superar los 100 caracteres.',
              'valid_email' => 'El correo debe ser válido.',
              'is_unique' => 'El correo ya está registrado.'
          ]
      ],
      'usuario' => [
          'rules' => 'required|min_length[3]',
          'errors' => [
              'required' => 'El nombre de usuario es obligatorio.',
              'min_length' => 'El nombre de usuario debe tener al menos 3 caracteres.'
          ]
      ],
      'pass' => [
          'rules' => 'required|min_length[3]|max_length[10]',
          'errors' => [
              'required' => 'La contraseña es obligatoria.',
              'min_length' => 'La contraseña debe tener al menos 3 caracteres.',
              'max_length' => 'La contraseña no puede superar los 10 caracteres.'
          ]
      ],
      'confirm-pass' => [
          'rules' => 'required|matches[pass]',
          'errors' => [
              'required' => 'Debes confirmar tu contraseña.',
              'matches' => 'Las contraseñas no coinciden.'
          ]
      ],
      'terms' => [
          'rules' => 'required',
          'errors' => [
              'required' => 'Debes aceptar los términos y condiciones.'
          ]
      ]
  ]);
  
  
        
     $formModel = new Usuarios_model();

     if (!$input) {
        $data['titulo']='Registro'; 
        echo view('front/head_view',$data);
        echo view('front/nav_view');
        echo view('back/usuario/registro', ['validation' => $this->validator]);
        echo view('front/footer_view');

      } else {
          $formModel->save([
          'nombre' => $this->request->getVar('nombre'),
          'apellido'=> $this->request->getVar('apellido'),
          'usuario'=> $this->request->getVar('usuario'),
          'email'=> $this->request->getVar('email'),
          'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
          //  password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de único sentido.
          ]);  
          //return $this->response->redirect(site_url(''));

          // Flashdata funciona solo en redirigir la función en el controlador en la vista de carga.
          session()->setFlashdata('success', 'Usuario registrado con éxito');
          return $this->response->redirect(base_url('/ingreso'));
      
       }

    }
 
}

