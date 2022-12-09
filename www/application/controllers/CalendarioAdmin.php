<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CalendarioAdmin extends CI_Controller {

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
		$this->load->model('calendario_model');
		$data = $this->calendario_model->consultaCalendario();
		$this->load->view('Web Master/helpers/header');
		$this->load->view('Web Master/calendario',$data);
		$this->load->view('Web Master/helpers/footer');
	}

	public function ingresaEvento(){
		$data = array(
			'nombre_evento' => $_POST["nombre_evento"],
			'lugar' => $_POST["lugar"],
			'fecha' => $_POST["fecha"],
			'hora' => $_POST["hora"],
			'url_evento' => $_POST["url_evento"],
			'descripcion' => $_POST["descripcion"],
			'promocion' => $_POST["promocion"]
	);
	
		$this->load->model('calendario_model');
		
		if($this->calendario_model->registraEvento($data)){
			$arrayRespuesta = array();
                $arrayRespuesta["status"] = "OK";
                $arrayRespuesta["respuesta"] = "Evento registrado correctamente";
                $myJSON = json_encode($arrayRespuesta);
                echo $myJSON;
		}else{
			$arrayRespuesta = array();
			$arrayRespuesta["status"] = "ERROR";
			$arrayRespuesta["respuesta"] = "Error al registrar el evento";
			$myJSON = json_encode($arrayRespuesta);
			echo $myJSON;
		}
	}

	public function actualizaEvento(){
		$data = array(
			'nombre_evento' => $_POST["nombre_evento"],
			'lugar' => $_POST["lugar"],
			'fecha' => $_POST["fecha"],
			'hora' => $_POST["hora"],
			'url_evento' => $_POST["url_evento"],
			'descripcion' => $_POST["descripcion"],
			'promocion' => $_POST["promocion"]
	);
	
		$this->load->model('calendario_model');
		
		if($this->calendario_model->actualizaEvento($data,$_POST['id_evento'])){
			$arrayRespuesta = array();
                $arrayRespuesta["status"] = "OK";
                $arrayRespuesta["respuesta"] = "Evento actualizado correctamente";
                $myJSON = json_encode($arrayRespuesta);
                echo $myJSON;
		}else{
			$arrayRespuesta = array();
			$arrayRespuesta["status"] = "ERROR";
			$arrayRespuesta["respuesta"] = "Error al actualizar el evento";
			$myJSON = json_encode($arrayRespuesta);
			echo $myJSON;
		}
	}

	public function consultaCalendario(){
		$this->load->model('calendario_model');
		return $this->calendario_model->consultaCalendariO();
	}
	
	public function consultaEvento(){
		$this->load->model('calendario_model');
		//$consulta = $this->calendario_model->obtenerEvento($_POST['id_evento']);
		/*foreach($consulta as $fila){
			$arrayRespuesta = array();
			$arrayRespuesta["status"] = "OK";
			$arrayRespuesta["id_evento"] = $fila->id_evento;
			$arrayRespuesta["nombre_evento"] =$fila->nombre_evento;
			$myJSON = json_encode($arrayRespuesta);
		}*/
		//var_dump($this->calendario_model->consultaCalendariO());
		
		$myJSON = json_encode($this->calendario_model->obtenerEvento($_POST['id_evento']));
		echo $myJSON;
		//var_dump($this->calendario_model->obtenerEvento($_POST['id_evento'])["consulta"]->conn_id);
    }
    
    public function eliminarEvento(){
        $arrayRespuesta = array();
        $this->load->model('calendario_model');
		if($this->calendario_model->eliminar($_POST['id_evento'])){
            $arrayRespuesta["status"] = "OK";
            $arrayRespuesta["respuesta"] = "Evento eliminado correctamente";
            $myJSON = json_encode($arrayRespuesta);
            echo $myJSON;
        }else{
            $arrayRespuesta["status"] = "ERROR";
			$arrayRespuesta["respuesta"] = "Error al intentar eliminar el evento";
			$myJSON = json_encode($arrayRespuesta);
			echo $myJSON;
        }
    }
}