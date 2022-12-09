<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Img_menusAdmin extends CI_Controller {



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



    public $name_model = 'img_menus_model';

    

	public function index()

	{

        $this->load->model($this->name_model);

        $data = $this->img_menus_model->getAll();

        $this->load->view('Web Master/helpers/header');

        $data['titulo'] = (!isset($_POST['id_menu'])? "-1" : $_POST['id_menu']);

        $this->load->view('Web Master/menu',$data);

		

		$this->load->view('Web Master/helpers/footer');

    }

    

    public function add(){

        $data = array(

			'nombre_menu' => $_POST["nombre_menu"]

        );



        $this->load->model($this->name_model);



        $response = array();



        if($this->img_menus_model->add($data)){

                $response["status"] = "OK";

                $response["respuesta"] = "Imagen registrada correctamente";

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al intentar guardar la imagen";

        }

        echo json_encode($response);

    }



    public function update(){

        $data = array(

			'nombre_menu' => $_POST["nombre_menu"]

        );



        $this->load->model($this->name_model);



        $response = array();



        if($this->img_menus_model->update($data,$_POST['id_menu'])){

                $response["status"] = "OK";

                $response["respuesta"] = "Imagen actualizada correctamente";

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al actualizar imagen";

        }

        echo json_encode($response);

    }



    public function delete(){

        $response = array();

        $this->load->model($this->name_model);

        if($this->img_menus_model->delete($_POST['id_imagen'],$_POST['id_menu'])){

            $response["status"] = "OK";

            $response["respuesta"] = "Imagen eliminada correctamente";

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al intentar eliminar la imagen";

        }

        echo json_encode($response);

    }



    public function getById(){

        $this->load->model($this->name_model);

        $myJSON = json_encode($this->img_menus_model->getById($_POST['id_menu']));

        echo $myJSON;

    }



    function cargar_archivo() {

        //$nombreArchivo = $_FILES['mi_archivo']['name'];

        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/Menu/";



        $this->db->insert($this->name_model, $data);        

        $mi_archivo = 'mi_archivo';

        $config['upload_path'] = $ruta;

        $config['file_name'] = $nombreArchivo;

        $config['allowed_types'] = "*";

        $config['max_size'] = "50000";

        $config['max_width'] = "2000";

        $config['max_height'] = "2000";



        $this->load->library('upload');

        $this->upload->initialize($config);

        

        if (!$this->upload->do_upload($mi_archivo)) {

            //*** ocurrio un error

            $data['uploadError'] = $this->upload->display_errors();

             //echo $this->upload->display_errors();

             echo "<p>Fallo subir el archivo<a href='".base_url("index.php/MenuAdmin/index")."'><Regresar/a></p>";

             return;

        }



        $data['uploadSuccess'] = $this->upload->data();

        //var_dump($this->upload->data()["file_name"]);

        //echo $this->upload->data()["file_name"];

        //var_dump($this->upload->data());



        $nombreArchivo = $this->upload->data()["file_name"];



        $data = array(

            'id_menu' => $_POST['id_menu'],

            'nombre_imagen' => $nombreArchivo,

            'ruta' => 'recs/assets/images/Menu/',

            'tipo' => 'jpg'

        );



        $this->load->model($this->name_model);

        if($this->img_menus_model->add($data)){

            //echo "se guardo";

            redirect('../index.php/MenuAdmin/index?id_menu='.$_POST['id_menu']); 

        }else{

            echo "<p>Fallo subir el archivo<a href='".base_url("index.php/MenuAdmin/index")."'>Regresar/a></p>";

        }



        }

}