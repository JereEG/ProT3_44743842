<?php
namespace App\Controllers;
use CodeIgniter\Controller;
Use App\Models\Usuarios_model;

class Login_controller extends Controller{


    /** Login */
    public function ingreso() {
        helper(['form', 'url']);

         $dato['titulo']='Ingreso'; 
         echo view('front/head_view',$dato);
         echo view('front/nav_view');
         echo view('back/usuario/login');
         echo view('front/footer_view');
    }
    public function auth() {
        
        $session = session();
        $model = new Usuarios_model();
        //traemos los datos del formulario 
        $email = $this->request->getVar('email');
        $contrasena = $this->request->getVar('pass');
        
        $data = $model->where('email', $email)->first();
        if($data) {
            $pass = $data['pass'];
            $ba = $data['baja'];
            if($ba == 'SI') {
                $session->setFlashdata('success', 'Usuario dado de baja');
                return redirect()->to('ingreso');
            }
            //se verifica los datos ingresados para iniciar, si cumple la verificación inicia la sesión
            $verify_pass = password_verify($contrasena, $pass);
            //var_dump($verify_pass);
            //exit();
            //password_verify determina los requisitos de configuración de la contraseña
            if($verify_pass) {
                $ses_data = [ //array de la sesión 
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'email' => $data['email'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                //Si se cumple la verificación inicia la sesión
                $session->set($ses_data);

                session()->setFlashdata('success', 'Bienvenido!');
                return redirect()->to('panel');
            } else {
                //no paso la validación de la password 
                $session->setFlashdata('success', 'Contraseña Incorrecta');
                return redirect()->to('ingreso');
                //puede ir base_url();
            }
        } else {
            $session->setFlashdata('success', 'No Existe el Email o es Incorrecto');
            return redirect()->to('ingreso');
        }
        
    }
    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
