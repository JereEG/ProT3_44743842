<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Usuario_controller extends Controller {

	public function __construct() {
           helper(['form', 'url']);

	}
  public function create() {
        
   $dato['titulo']='Registro'; 
    echo view('front/head_view',$dato);
    echo view('front/nav_view');
    echo view('front/registro');
    echo view('front/footer_view');
  }

}

