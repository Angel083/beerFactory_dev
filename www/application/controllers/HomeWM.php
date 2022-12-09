<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeWM extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $datos['login'] = "1";

		$this->load->view('Web Master/helpers/header',$datos);
        $this->load->view('Web Master/homeWM');
        $this->load->view('Web Master/helpers/footer');
    }
    
    public function validar_login(){
        $this->load->model('usuario_model');
            if($this->usuario_model->login($_POST['user'],$_POST['password'])){
                
                $arrayRespuesta = array();
                $arrayRespuesta["status"] = "OK";
                $arrayRespuesta["respuesta"] = "Usuario correcto";
                $myJSON = json_encode($arrayRespuesta);
                echo $myJSON;
            }else{
                $arrayRespuesta = array();
                $arrayRespuesta["status"] = "ERROR";
                $arrayRespuesta["respuesta"] = "Usuario o contraseña incorrecta";
                $myJSON = json_encode($arrayRespuesta);
                echo $myJSON;
            }
    }
}