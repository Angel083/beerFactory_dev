<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class HistoriaAdmin extends CI_Controller {



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

        $this->load->model('historia_model');

        $data = $this->historia_model->getAll();



		$this->load->view('Web Master/helpers/header');

        $this->load->view('Web Master/historia',$data);

        $this->load->view('Web Master/helpers/footer');

    }



    public function getById(){

        $this->load->model("cards_model");

        $myJSON = json_encode($this->cards_model->getById($_POST['id_card']));

        echo $myJSON;

    }



    public function update(){

        $nombreArchivo = $_FILES['imagen_historia']['name'];

        //$ruta =  $_SERVER['DOCUMENT_ROOT']."/beer_factory/recs/assets/images/";
        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/Nosotros/";

        

        $this->load->model("historia_model");

        $dataCard = $this->historia_model->getById("1");



            $mi_archivo = 'imagen_historia';

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

                 echo $this->upload->display_errors();

                 echo "<p>Fallo subir el archivo<a href='".base_url("index.php/HistoriaAdmin/index")."'>Regresar</a></p>";

                 return;

            }else{
                unlink($ruta.$dataCard['nombre_imagen']);
            }

            $data['uploadSuccess'] = $this->upload->data();

                    



            $nombreArchivo = $this->upload->data()["file_name"];

            $data = array(

                'nombre_imagen' => $nombreArchivo,

                'ruta' => '/recs/assets/images/Nosotros'

            );

        


        $response = array();

        if($this->historia_model->update($data,"1")){

                $response["status"] = "OK";

                $response["respuesta"] = "Menú actualizado correctamente";

                redirect('HistoriaAdmin/index','refresh');

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al actualizar el menú";

        }
        echo json_encode($response);
    }

}