<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class CarrouselCervezasAdmin extends CI_Controller {



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



    public $name_model = 'carrousel_cervezas_model';

    

	public function index()

	{

        $this->load->model($this->name_model);

        

        $data = $this->carrousel_cervezas_model->getAll();



        $this->load->view('Web Master/helpers/header');

        $this->load->view('Web Master/cervezas',$data);

		$this->load->view('Web Master/helpers/footer');

    }

    

    public function add(){

        $data = array(

			'nombre_menu' => $_POST["nombre_menu"]

        );



        $this->load->model($this->name_model);



        $response = array();



        if($this->cervezas_model->add($data)){

                $response["status"] = "OK";

                $response["respuesta"] = "Registrado correctamente";

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al registrar";

        }

        echo json_encode($response);

    }



    public function update(){

        $data = array(

			'nombre_menu' => $_POST["nombre_menu"]

        );



        $this->load->model($this->name_model);



        $response = array();



        if($this->carrousel_cervezas_model->update($data,$_POST['id_imagen'])){

                $response["status"] = "OK";

                $response["respuesta"] = "Se ha actualizado correctamente";

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al intentar actualizar";

        }

        echo json_encode($response);

    }



    public function delete(){

        $response = array();

        $this->load->model($this->name_model);

        if($this->carrousel_cervezas_model->delete($_POST['id_imagen'])){

            $response["status"] = "OK";

            $response["respuesta"] = "Se elimino correctamente";

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al intentar eliminarlo";

        }

        echo json_encode($response);

    }



    public function getById(){

        $this->load->model($this->name_model);

        $myJSON = json_encode($this->carrousel_cervezas_model->getById($_POST['id_imagen']));

        echo $myJSON;

    }



    function cargar_archivo() {

        $nombreArchivo = $_FILES['mi_archivo']['name'];

        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/Cervezas/";



        //$this->db->insert($this->name_model, $data);



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

             echo "<p>Fallo subir el archivo<a href='".base_url("index.php/CervezasAdmin/index")."'>Regresar/a></p>";

             return;

        }

        $data['uploadSuccess'] = $this->upload->data();

        $nombreArchivo = $this->upload->data()["file_name"];



        $data = array(

            'nombre_imagen' => $nombreArchivo,

            'ruta' => 'recs/assets/images/Cervezas/',

            'tipo' => 'jpg'

        );



        $this->load->model($this->name_model);

        if($this->carrousel_cervezas_model->add($data)){

            //echo "se guardo";

            redirect('../index.php/CervezasAdmin/index'); 

        }else{

            echo "<p>Fallo subir el archivo<a href='".base_url("index.php/CervezasAdmin/index")."'>Regresar</a></p>";

        }

    }

}