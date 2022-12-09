<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class CervezasAdmin extends CI_Controller {



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



    public $name_model = 'cervezas_model';

    

	public function index()

	{

        $this->load->model($this->name_model);

        $this->load->model('carrousel_cervezas_model');
        $this->load->model('maridaje_model');
         $this->load->model('botellas_model');

        

        $data = $this->cervezas_model->getAll();

        $data['images'] = $this->carrousel_cervezas_model->getAll();
        $data['maridaje'] = $this->maridaje_model->getAll();
        $data['botellas'] = $this->botellas_model->getAll();



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



        if($this->cervezas_model->update($data,$_POST['id_cerveza'])){

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

        if($this->cervezas_model->delete($_POST['id_cerveza'])){

            $response["status"] = "OK";

            $response["respuesta"] = "Se elimino correctamente";

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al intentar eliminarlo";

        }

        echo json_encode($response);

    }
    
    public function deleteBotella(){

        $response = array();

        $this->load->model('botellas_model');

        if($this->botellas_model->delete($_POST['id_imagen'])){

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

        $myJSON = json_encode($this->cervezas_model->getById($_POST['id_cerveza']));

        echo $myJSON;

    }
    
    public function getByIdBotellas(){

        $this->load->model('botellas_model');

        $myJSON = json_encode($this->botellas_model->getById($_POST['id_imagen']));

        echo $myJSON;

    }

    function actualizaBotella() {

        $nombreArchivo = $_FILES['img_botella_m']['name'];


        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/Cervezas/";

        $mi_archivo = 'img_botella_m';
        
        $this->load->model("botellas_model");
        $dataCard = $this->botellas_model->getById($_POST['id_imagen']);
        
        $data = array(
            'titulo' => $_POST["titulo_botella_m"],
            'descripcion' => $_POST['descripcion_botella_m'],
            'ruta' => 'recs/assets/images/Cerveceria/'

        );


        if($nombreArchivo != ""){
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
        
                 echo "<p>Fallo subir la imagen <a href='".base_url("index.php/CervezasAdmin/index")."'>Regresar</a></p>";
    
                 return;
    
            }else{
                unlink($ruta.$dataCard['nombre_imagen']);
            }
    
            $data['uploadSuccess'] = $this->upload->data();

            $nombreArchivo = $this->upload->data()["file_name"];
            
            $data = array(

                'nombre_imagen' => $nombreArchivo,
                'titulo' => $_POST["titulo_botella_m"],
                'descripcion' => $_POST['descripcion_botella_m'],
                'ruta' => 'recs/assets/images/Cerveceria/'

            );
        }

            
            

        

        $response = array();

        if($this->botellas_model->update($data,$_POST['id_imagen'])){

                $response["status"] = "OK";

                $response["respuesta"] = "Men®≤ actualizado correctamente";

                redirect('CervezasAdmin/index','refresh');

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al actualizar el informaci®Æn";

        }

    }

    function cargar_archivo() {

        $nombreArchivo = $_FILES['mi_archivo']['name'];

        $nombreArchivoPdf = $_FILES['mi_archivo_frontal']['name'];

        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/Cervezas/";

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

             echo "<p>Fallo subir <a href='".base_url("index.php/CervezasAdmin/index")."'>Regresar</a></p>";

             return;

        }

        $data['uploadSuccess'] = $this->upload->data();

        $nombreArchivo = $this->upload->data()["file_name"];





        $mi_archivoPDF = 'mi_archivo_frontal';



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

             echo "<p>Fallo subir el archivo pdf<a href='".base_url("index.php/CervezasAdmin/index")."'>Regresar</a></p>";

             return;

        }

        $data['uploadSuccess'] = $this->upload->data();

        

        $nombreArchivoPdf = $this->upload->data()["file_name"];



        $data = array(

            'nombre_imagen_fondo' => $nombreArchivo,

            'ruta_img_fondo' => 'recs/assets/images/Cervezas/',

            'tipo_img_fondo' => 'jpg',

            'nombre_imagen_frontal' => $nombreArchivoPdf,

            'ruta_img_frontal' => 'recs/assets/images/Cervezas/',

            'tipo_img_frontal' => 'jpg'

        );



        $this->load->model($this->name_model);

        if($this->cervezas_model->add($data)){

            //echo "se guardo";

            redirect('../index.php/CervezasAdmin/index'); 

        }else{

            echo "<p>Fallo subir el archivo<a href='".base_url("index.php/CervezasAdmin/index")."'>Regresar</a></p>";

        }

    }
    
    
    function actualizaImagenMaridaje() {

        $nombreArchivo = $_FILES['imagen_maridaje']['name'];


        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/Cervezas/";

        $mi_archivo = 'imagen_maridaje';
        
        $this->load->model("maridaje_model");
        $dataCard = $this->maridaje_model->getById("1");


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
    
             echo "<p>Fallo subir la imagen <a href='".base_url("index.php/CervezasAdmin/index")."'>Regresar</a></p>";

             return;

        }else{
            unlink($ruta.$dataCard['nombre_imagen']);
        }

        $data['uploadSuccess'] = $this->upload->data();

        $nombreArchivo = $this->upload->data()["file_name"];

            
            

        $data = array(

            'nombre_imagen' => $nombreArchivo,

            'ruta' => 'recs/assets/images/Cervezas/'

        );

        $response = array();

        if($this->maridaje_model->update($data,"1")){

                $response["status"] = "OK";

                $response["respuesta"] = "Men√∫ actualizado correctamente";

                redirect('CervezasAdmin/index','refresh');

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al actualizar el men√∫";

        }

    }
    
    function agregarBotella(){
        $arrayRespuesta = array();
        $nombreArchivo = $_FILES['img_botella']['name'];

        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/Cerveceria/";
        
        $mi_archivo = 'img_botella';

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
            echo "<p>Ocurrio un problema al intentar subir el archivo imagen <a href='".base_url("index.php/AdminWelcome/cervezas")."'> Regresar</a></p>";

            return;

        }else{
            $nombreArchivo = $this->upload->data()["file_name"];
            $data = array(

                'nombre_imagen' => $nombreArchivo,
                'titulo' => $_POST["titulo_botella"],
                'descripcion' => $_POST['descripcion_botella'],
    
                'ruta' => 'recs/assets/images/Cerveceria/'
    
            );
        
            if($this->db->insert('botellas', $data)){
                $arrayRespuesta["status"] = "OK";

                $arrayRespuesta["respuesta"] = "Operaci®Æn exitosa";

                $data['uploadSuccess'] = $this->upload->data();

                redirect('CervezasAdmin');    
            }else{
                $arrayRespuesta["status"] = "ERROR";

                $arrayRespuesta["respuesta"] = "Fallo la opereaci√≥n";
            }
        }
    }

}