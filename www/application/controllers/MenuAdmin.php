<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuAdmin extends CI_Controller {

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

    public $name_model = 'menu_model';
    
	public function index()
	{
        $this->load->model($this->name_model);
        $this->load->model('img_menus_model');
        
        $data = $this->menu_model->getAll();
        //$data['images'] = $this->img_menus_model->getById("1");
        $data['images'] = $this->img_menus_model->getById((!isset($_GET['id_menu'])? "1" : $_GET['id_menu']));

        $this->load->view('Web Master/helpers/header');

        $data['titulo'] = (!isset($_GET['id_menu'])? "1" : $_GET['id_menu']);

        $this->load->view('Web Master/menu',$data);
		
		$this->load->view('Web Master/helpers/footer');
    }
    
    public function add(){
        $data = array(
			'nombre_menu' => $_POST["nombre_menu"]
        );

        $this->load->model($this->name_model);

        $response = array();

        if($this->menu_model->add($data)){
                $response["status"] = "OK";
                $response["respuesta"] = "Menú registrado correctamente";
        }else{
            $response["status"] = "ERROR";
            $response["respuesta"] = "Error al registrar el menú";
        }
        echo json_encode($response);
    }

    public function update(){
        $data = array(
			'nombre_menu' => $_POST["nombre_menu"]
        );

        $this->load->model($this->name_model);

        $response = array();

        if($this->menu_model->update($data,$_POST['id_menu'])){
                $response["status"] = "OK";
                $response["respuesta"] = "Menú actualizado correctamente";
        }else{
            $response["status"] = "ERROR";
            $response["respuesta"] = "Error al actualizar el menú";
        }
        echo json_encode($response);
    }

    public function delete(){
        $response = array();
        $this->load->model($this->name_model);
        if($this->menu_model->delete($_POST['id_menu'])){
            $response["status"] = "OK";
            $response["respuesta"] = "Menú eliminada correctamente";
        }else{
            $response["status"] = "ERROR";
            $response["respuesta"] = "Error al intentar eliminar el menú";
        }
        echo json_encode($response);
    }

    public function getById(){
        $this->load->model($this->name_model);
        $myJSON = json_encode($this->menu_model->getById($_POST['id_menu']));
        echo $myJSON;
    }
}