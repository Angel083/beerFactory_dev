<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UbicacionesAdmin extends CI_Controller {

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
		$this->load->model('ubicaciones_model');
		$data = $this->ubicaciones_model->consultaUbicaciones();
		$this->load->view('Web Master/helpers/header');
		$this->load->view('Web Master/ubicaciones',$data);
		$this->load->view('Web Master/helpers/footer');
	}
    
    public function agregaUbicacion(){
        $data = array(
			'nombre_ubicacion' => $_POST["nombre_ubicacion"],
			'direccion' => $_POST["direccion"],
			'telefono' => $_POST["telefono"],
			'dias' => $_POST["dias"],
			'latitud' => $_POST["latitud"],
			'longitud' => $_POST["longitud"]
    );
    
    $this->load->model('ubicaciones_model');
        
    if($this->ubicaciones_model->registraUbicacion($data)){
        $arrayRespuesta = array();
            $arrayRespuesta["status"] = "OK";
            $arrayRespuesta["respuesta"] = "Ubicación registrado correctamente";
            $myJSON = json_encode($arrayRespuesta);
            echo $myJSON;
    }else{
        $arrayRespuesta = array();
        $arrayRespuesta["status"] = "ERROR";
        $arrayRespuesta["respuesta"] = "Error al registrar la ubicación";
        $myJSON = json_encode($arrayRespuesta);
        echo $myJSON;
	}
}

public function actualizaUbicacion(){
	$data = array(
		'nombre_ubicacion' => $_POST["nombre_ubicacion"],
		'direccion' => $_POST["direccion"],
		'telefono' => $_POST["telefono"],
		'dias' => $_POST["dias"],
		'latitud' => $_POST["latitud"],
		'longitud' => $_POST["longitud"]
);

	$this->load->model('ubicaciones_model');
	
	if($this->ubicaciones_model->actualizaUbicacion($data,$_POST['id_ubicacion'])){
		$arrayRespuesta = array();
			$arrayRespuesta["status"] = "OK";
			$arrayRespuesta["respuesta"] = "Ubicación actualizada correctamente";
			$myJSON = json_encode($arrayRespuesta);
			echo $myJSON;
	}else{
		$arrayRespuesta = array();
		$arrayRespuesta["status"] = "ERROR";
		$arrayRespuesta["respuesta"] = "Error al actualizar la ubicación";
		$myJSON = json_encode($arrayRespuesta);
		echo $myJSON;
	}
}

public function consultaUbicacion(){
	$this->load->model('ubicaciones_model');
	$myJSON = json_encode($this->ubicaciones_model->obtenerUbicacion($_POST['id_ubicacion']));
	echo $myJSON;
}

public function eliminarUbicacion(){
	$arrayRespuesta = array();
	$this->load->model('ubicaciones_model');
	if($this->ubicaciones_model->eliminar($_POST['id_ubicacion'])){
		$arrayRespuesta["status"] = "OK";
		$arrayRespuesta["respuesta"] = "Ubicación eliminada correctamente";
		$myJSON = json_encode($arrayRespuesta);
		echo $myJSON;
	}else{
		$arrayRespuesta["status"] = "ERROR";
		$arrayRespuesta["respuesta"] = "Error al intentar eliminar la ubicación";
		$myJSON = json_encode($arrayRespuesta);
		echo $myJSON;
	}
}
}