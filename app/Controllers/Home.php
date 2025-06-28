<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {   
        $data['titulo'] = 'Principal';
        return view('front/head_view', $data) .
           view('front/nav_view') .
           view('front/principal') .
           view('front/footer_view');
    }
    public function f_quienes_somos()
    {
        $data['titulo'] = '¿Quienes Somos?';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }

    public function f_acerca_de()
    {
        $data['titulo'] = 'Contacto';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }
    public function f_sitio_en_construccion()
    {
        $data['titulo'] = 'Sitio en Contruccion';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/sitio_en_construccion');
        echo view('front/footer_view');

    }
    public function f_terminos_y_condiciones()
    {
        $data['titulo'] = 'Términos y condiciones';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/terminos_y_condiciones');
        echo view('front/footer_view');
    }
    public function f_catalogo()
    {
        $data['titulo'] = 'Catalogo';
        echo view('front/head_view', $data);
        echo view('front/nav_view');
        echo view('front/catalogo');
        echo view('front/footer_view');
    }
}
