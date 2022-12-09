<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class PromocionesAdmin extends CI_Controller {



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



    public $name_model = 'promociones_model';

    

	public function index()

	{

        $this->load->model($this->name_model);

        

        $data = $this->promociones_model->getAll();

        $this->load->view('Web Master/helpers/header');

        $this->load->view('Web Master/promociones',$data);

		$this->load->view('Web Master/helpers/footer');

    }

    

    public function add(){

        $data = array(

			'nombre_menu' => $_POST["nombre_menu"]

        );



        $this->load->model($this->name_model);



        $response = array();



        if($this->promociones_model->add($data)){

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

			'id_cerveza' => $_POST["id_cerveza"]

        );



        $this->load->model($this->name_model);



        $response = array();



        if($this->promociones_model->update($data,$_POST['id_cerveza'])){

                $response["status"] = "OK";

                $response["respuesta"] = "Promoción actualizada correctamente";

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Promoción al actualizar el menú";

        }

        echo json_encode($response);

    }



    public function delete(){

        $response = array();

        $this->load->model($this->name_model);

        if($this->promociones_model->delete($_POST['id_promocion'])){

            $response["status"] = "OK";

            $response["respuesta"] = "Promoción eliminada correctamente";

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al intentar eliminar la promoción";

        }

        echo json_encode($response);

    }



    public function getById(){

        $this->load->model($this->name_model);

        $myJSON = json_encode($this->promociones_model->getById($_POST['id_cerveza']));

        echo $myJSON;

    }



    function cargar_archivo() {

        $nombreArchivo = $_FILES['mi_archivo']['name'];

        $nombreArchivoPdf = $_FILES['mi_archivo_frontal']['name'];

        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/Promociones/";



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

             echo "<p>Fallo subir el archivo<a href='".base_url("index.php/PromocionesAdmin/index")."'>Regresar/a></p>";

             return;

        }

        $data['uploadSuccess'] = $this->upload->data();

        $nombreArchivo = $this->upload->data()["file_name"];





        $mi_archivoPDF = 'mi_archivo_pdf';



        $config['upload_path'] = $ruta;

        $config['file_name'] = $nombreArchivoPdf;

        $config['allowed_types'] = "*";

        $config['max_size'] = "50000";

        $config['max_width'] = "2000";

        $config['max_height'] = "2000";



        $this->load->library('upload');

        $this->upload->initialize($config);

        

        if (!$this->upload->do_upload($mi_archivoPDF)) {

            //*** ocurrio un error

            $data['uploadError'] = $this->upload->display_errors();

             //echo $this->upload->display_errors();

             echo "<p>Fallo subir el archivo pdf<a href='".base_url("index.php/PromocionesAdmin/index")."'>Regresar/a></p>";

             return;

        }

        $data['uploadSuccess'] = $this->upload->data();

        

        $nombreArchivoPdf = $this->upload->data()["file_name"];



        $data = array(

            'nombre_imagen' => $nombreArchivo,

            'nombre_pdf' => $nombreArchivoPdf,

            'tipo_imagen' => 'jpg',

            'tipo_archivo' => 'pdf',

            'url_imagen' => 'recs/assets/images/Promociones/',

            'url_pdf' => 'recs/assets/images/Promociones/'

        );



        $this->load->model($this->name_model);

        if($this->promociones_model->add($data)){

            //echo "se guardo";

            redirect('../index.php/PromocionesAdmin/index'); 

        }else{

            echo "<p>Fallo subir el archivo<a href='".base_url("index.php/PromocionesAdmin/index")."'>Regresar/a></p>";

        }



    }

}