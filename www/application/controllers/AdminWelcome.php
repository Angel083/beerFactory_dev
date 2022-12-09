<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class AdminWelcome extends CI_Controller {



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

        $this->load->model('cards_model');

        $data = $this->cards_model->getAll();



		$this->load->view('Web Master/helpers/header');

        $this->load->view('Web Master/inicio',$data);

        $this->load->view('Web Master/helpers/footer');

    }



    public function getById(){

        $this->load->model("cards_model");

        $myJSON = json_encode($this->cards_model->getById($_POST['id_card']));

        echo $myJSON;

    }



    public function update(){

        

        $nombreArchivo = (isset($_FILES['imagen_fondo']['name'])) ? $_FILES['imagen_fondo']['name'] :  "";

        $img_front = $_FILES['imagen_front']['name'];

        $img_vista = $_FILES['imagen_vista']['name'];

        //$ruta =  $_SERVER['DOCUMENT_ROOT']."/beer_factory/recs/assets/images/";
        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/";

        $data = array(

            'titulo' => $_POST["titulo_e"],

            'contenido' => $_POST["contenido_e"]

        );

        $this->load->model("cards_model");

        $dataCard = $this->cards_model->getById($_POST['id_card']);

        //var_dump($_FILES[]);

        if($nombreArchivo != ""){

            $mi_archivo = 'imagen_fondo';

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

                 echo "<p>Fallo subir el archivo<a href='".base_url("index.php/AdminWelcome/index")."'>Regresar</a></p>";

                 return;

            }

    

            $data['uploadSuccess'] = $this->upload->data();
            
            if($dataCard['nombre_imagen_fondo'] != ""){
                unlink($ruta.$dataCard['nombre_imagen_fondo']);
            }



            $nombreArchivo = $this->upload->data()["file_name"];

            $data = array(

                'titulo' => $_POST["titulo_e"],

                'contenido' => $_POST["contenido_e"],

                'nombre_imagen_fondo' => $nombreArchivo

            );

        }

        

        if($img_front != ""){

            $imagen_front = 'imagen_front';

            $config['upload_path'] = $ruta;

            $config['file_name'] = $img_front;

            $config['allowed_types'] = "*";

            $config['max_size'] = "50000";

            $config['max_width'] = "2000";

            $config['max_height'] = "2000";

    

            $this->load->library('upload');

            $this->upload->initialize($config);

            

            if (!$this->upload->do_upload($imagen_front)) {

                //*** ocurrio un error

                $data['uploadError'] = $this->upload->display_errors();

                 echo $this->upload->display_errors();

                 echo "<p>Fallo subir el archivo<a href='".base_url("index.php/AdminWelcome/index")."'>Regresar</a></p>";

                 return;

            }

    

            $data['uploadSuccess'] = $this->upload->data();

            unlink($ruta.$dataCard['nombre_imagen_frontal']);



            $img_front = $this->upload->data()["file_name"];

            if($nombreArchivo != "" && $imagen_front !=""){

                $data = array(

                    'titulo' => $_POST["titulo_e"],

                    'contenido' => $_POST["contenido_e"],

                    'nombre_imagen_fondo' => $nombreArchivo,

                    'nombre_imagen_frontal' => $img_front

                );

            }else{

                $data = array(

                    'titulo' => $_POST["titulo_e"],

                    'contenido' => $_POST["contenido_e"],

                    'nombre_imagen_frontal' => $img_front

                );

            }

        }



        if($img_vista != ""){

            $imagen_vista = 'imagen_vista';

            $config['upload_path'] = $ruta;

            $config['file_name'] = $img_vista;

            $config['allowed_types'] = "*";

            $config['max_size'] = "50000";

            $config['max_width'] = "2000";

            $config['max_height'] = "2000";

    

            $this->load->library('upload');

            $this->upload->initialize($config);

            

            if (!$this->upload->do_upload($imagen_vista)) {

                //*** ocurrio un error

                $data['uploadError'] = $this->upload->display_errors();

                 echo $this->upload->display_errors();

                 echo "<p>Fallo subir el archivo<a href='".base_url("index.php/AdminWelcome/index")."'>Regresar</a></p>";

                 return;

            }

    

            $data['uploadSuccess'] = $this->upload->data();

            unlink($ruta.$dataCard['imagen_completa']);



            $img_vista = $this->upload->data()["file_name"];

            if($nombreArchivo != "" && $img_front !="" && $img_vista !=""){

                $data = array(

                    'titulo' => $_POST["titulo_e"],

                    'contenido' => $_POST["contenido_e"],

                    'nombre_imagen_fondo' => $nombreArchivo,

                    'nombre_imagen_frontal' => $img_front,

                    'imagen_completa' => $img_vista

                );

            }else{

                if($imagen_vista !="" && $nombreArchivo != ""){

                    $data = array(

                        'titulo' => $_POST["titulo_e"],

                        'contenido' => $_POST["contenido_e"],

                        'nombre_imagen_fondo' => $nombreArchivo,

                        'imagen_completa' => $img_vista

                    );

                }else{

                    if($img_vista !="" && $img_front != ""){

                        $data = array(

                            'titulo' => $_POST["titulo_e"],

                            'contenido' => $_POST["contenido_e"],

                            'nombre_imagen_frontal' => $img_front,

                            'imagen_completa' => $img_vista

                        );

                    }else{

                        $data = array(

                            'titulo' => $_POST["titulo_e"],

                            'contenido' => $_POST["contenido_e"],

                            'imagen_completa' => $img_vista

                        );

                    }

                }

            }

        }

        

        $response = array();



        if($this->cards_model->update($data,$_POST['id_card'])){

                $response["status"] = "OK";

                $response["respuesta"] = "Menú actualizado correctamente";

                redirect('AdminWelcome/index','refresh');

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al actualizar el menú";

        }
        echo json_encode($response);

    }
    
    public function delete(){

        $response = array();

        $this->load->model('cards_model');

        if($this->cards_model->delete($_POST['id_card'])){

            $response["status"] = "OK";

            $response["respuesta"] = "Promoción eliminada correctamente";

        }else{

            $response["status"] = "ERROR";

            $response["respuesta"] = "Error al intentar eliminar la promoción";

        }

        echo json_encode($response);

    }

    public function eliminarImgGaleria(){

        $arrayRespuesta = array();



        $this->db->where('id_imagen', $_POST['id_imagen']);

        $result = $this->db->get("galeria_cervezas");

        $data = array("consulta"=>$result);



        $path_to_file = "";



        foreach($data["consulta"]->result() as $column){

            $path_to_file = $_SERVER['DOCUMENT_ROOT']."/".$column->ruta.$column->nombre;

            

        }



        $this->db->where('id_imagen', $_POST['id_imagen']);

        if($this->db->delete('galeria_cervezas') > 0){

            

            $arrayRespuesta["status"] = "OK";

            $arrayRespuesta["respuesta"] = "Operación exitosa";

            if(is_readable($path_to_file) && unlink($path_to_file)) {

                //echo 'deleted successfully';

           } else {

                //echo 'errors occured';

           }

            echo json_encode($arrayRespuesta);

        }else{

            $arrayRespuesta["status"] = "ERROR";

            $arrayRespuesta["respuesta"] = "Fallo la opereación";

        }

    }
    
    public function eliminarImgProceso(){

        $arrayRespuesta = array();



        $this->db->where('id_imagen', $_POST['id_imagen']);

        $result = $this->db->get("procesos");

        $data = array("consulta"=>$result);



        $path_to_file = "";



        foreach($data["consulta"]->result() as $column){

            $path_to_file = $_SERVER['DOCUMENT_ROOT']."/".$column->ruta.$column->nombre_imagen;

            

        }



        $this->db->where('id_imagen', $_POST['id_imagen']);

        if($this->db->delete('procesos') > 0){

            

            $arrayRespuesta["status"] = "OK";

            $arrayRespuesta["respuesta"] = "Operación exitosa";

            if(is_readable($path_to_file) && unlink($path_to_file)) {

                //echo 'deleted successfully';

           } else {

                //echo 'errors occured';

           }

            echo json_encode($arrayRespuesta);

        }else{

            $arrayRespuesta["status"] = "ERROR";

            $arrayRespuesta["respuesta"] = "Fallo la opereación";

        }

    }



    public function cerveceria()

	{

        $this->load->model('galeria_cervezas_model');
        $this->load->model('procesos_model');
        $this->load->model('botellas_model');

        $data = $this->galeria_cervezas_model->imagenes();
        $data['procesos'] = $this->procesos_model->getAll();
        $data['botellas'] = $this->botellas_model->getAll();

		$this->load->view('Web Master/helpers/header');

        $this->load->view('Web Master/cerveceria',$data);

        $this->load->view('Web Master/helpers/footer');

    }



    function cargar_archivo() {
        $arrayRespuesta = array();
        $nombreArchivo = $_FILES['mi_archivo']['name'];

        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/Cerveceria/";

        //$rutaProyect = 



        $data = array(

            'nombre' => $nombreArchivo,

            'ruta' => 'recs/assets/images/Cerveceria/',

            'tipo' => 'jpg'

        );

        

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
            echo "<p>Ocurrio un problema al intentar subir el archivo imagen de front <a href='".base_url("index.php/AdminWelcome/index")."'> Regresar</a></p>";

            return;

        }else{
            if($this->db->insert('galeria_cervezas', $data)){
                $arrayRespuesta["status"] = "OK";

                $arrayRespuesta["respuesta"] = "Operación exitosa";

                $data['uploadSuccess'] = $this->upload->data();

                redirect('AdminWelcome/cerveceria');    
            }else{
                $arrayRespuesta["status"] = "ERROR";

                $arrayRespuesta["respuesta"] = "Fallo la opereación";
            }
        }
    }
    
    function agregarModalLink() {
        $arrayRespuesta = array();
        //$imgBack = $_FILES['imgBackModalLink']['name'];
        $imgFront = $_FILES['imgFrontModalLink']['name'];
        $titulo = $_POST['tituloModalLink'];
        $contenido = $_POST['contenidoModalLink'];
        $redirecionarA = $_POST['redirecionarA'];

        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/";
        

        /*$imgBackM = 'imgBackModalLink';

        $config['upload_path'] = $ruta;

        $config['file_name'] = $imgBack;

        $config['allowed_types'] = "*";

        $config['max_size'] = "50000";

        $config['max_width'] = "2000";

        $config['max_height'] = "2000";



        $this->load->library('upload');

        $this->upload->initialize($config);

        

        if (!$this->upload->do_upload($imgBackM)) {

            //*** ocurrio un error

            $data['uploadError'] = $this->upload->display_errors();

            echo $this->upload->display_errors();
            echo "<p>Ocurrio un problema al intentar subir el archivo imgaen de fondo<a href='".base_url("index.php/AdminWelcome/index")."'> Regresar</a></p>";

            return;

        }
        
        $data['uploadSuccess'] = $this->upload->data();
        $imgBack = $this->upload->data()["file_name"];*/
        
        //-------img front
        $imgFrontM = 'imgFrontModalLink';

        $config['upload_path'] = $ruta;

        $config['file_name'] = $imgFront;

        $config['allowed_types'] = "*";

        $config['max_size'] = "50000";

        $config['max_width'] = "2000";

        $config['max_height'] = "2000";



        $this->load->library('upload');

        $this->upload->initialize($config);

        

        if (!$this->upload->do_upload($imgFrontM)) {

            //*** ocurrio un error

            $data['uploadError'] = $this->upload->display_errors();

            //echo $this->upload->display_errors();
            echo "<p>Ocurrio un problema al intentar subir el archivo  imgaen de frontal<a href='".base_url("index.php/AdminWelcome/index")."'> Regresar</a></p>";

            return;

        }
        
        $data['uploadSuccess'] = $this->upload->data();
        $imgFront = $this->upload->data()["file_name"];
        //echo $contenido." - ".$titulo;
        $data = array(

            'nombre_imagen_fondo' => '',
            'nombre_imagen_frontal' => $imgFront,
            'titulo' => $titulo,
            'contenido' => $contenido,
            'tipo_card' => 'card',
            'accion' => $redirecionarA,
            'ruta_imagen_fondo' => 'recs/assets/images/',
            'ruta_imagen_frontal' => 'recs/assets/images/'

        );
        
        
        
        if($this->db->insert('cards_inicio', $data)){
                $arrayRespuesta["status"] = "OK";

                $arrayRespuesta["respuesta"] = "Operación exitosa";

                

                redirect('AdminWelcome');    
            }else{
                $arrayRespuesta["status"] = "ERROR";

                $arrayRespuesta["respuesta"] = "Fallo la opereación";
            }
            ///var_dump($this->db->error());
            
    }
    
    function agregarModalAnuncio() {
        $arrayRespuesta = array();
        //$imgBack = $_FILES['imgBackModalAnuncio']['name'];
        $imgFront = $_FILES['imgFrontModalAnuncio']['name'];
        $imgCompleta = $_FILES['imgCompletaModalAnuncio']['name'];
        $titulo = $_POST['tituloModalAnuncio'];
        $contenido = $_POST['contenidoModalAnuncio'];

        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/";
        

        /*$imgBackM = 'imgBackModalAnuncio';

        $config['upload_path'] = $ruta;

        $config['file_name'] = $imgBack;

        $config['allowed_types'] = "*";

        $config['max_size'] = "50000";

        $config['max_width'] = "2000";

        $config['max_height'] = "2000";



        $this->load->library('upload');

        $this->upload->initialize($config);

        

        if (!$this->upload->do_upload($imgBackM)) {

            //*** ocurrio un error

            $data['uploadError'] = $this->upload->display_errors();

            echo $this->upload->display_errors();
            echo "<p>Ocurrio un problema al intentar subir el archivo imgaen de fondo<a href='".base_url("index.php/AdminWelcome/index")."'> Regresar</a></p>";

            return;

        }
        
        $data['uploadSuccess'] = $this->upload->data();
        $imgBack = $this->upload->data()["file_name"];*/
        
        //-------img front
        $imgFrontM = 'imgFrontModalAnuncio';

        $config['upload_path'] = $ruta;

        $config['file_name'] = $imgFront;

        $config['allowed_types'] = "*";

        $config['max_size'] = "50000";

        $config['max_width'] = "2000";

        $config['max_height'] = "2000";



        $this->load->library('upload');

        $this->upload->initialize($config);

        

        if (!$this->upload->do_upload($imgFrontM)) {

            //*** ocurrio un error

            $data['uploadError'] = $this->upload->display_errors();

            //echo $this->upload->display_errors();
            echo "<p>Ocurrio un problema al intentar subir el archivo  imgaen de frontal<a href='".base_url("index.php/AdminWelcome/index")."'> Regresar</a></p>";

            return;

        }
        
        $data['uploadSuccess'] = $this->upload->data();
        $imgFront = $this->upload->data()["file_name"];
        
        //-------img completa
        $imgCompletaM = 'imgCompletaModalAnuncio';

        $config['upload_path'] = $ruta;

        $config['file_name'] = $imgCompleta;

        $config['allowed_types'] = "*";

        $config['max_size'] = "50000";

        $config['max_width'] = "2000";

        $config['max_height'] = "2000";



        $this->load->library('upload');

        $this->upload->initialize($config);

        

        if (!$this->upload->do_upload($imgCompletaM)) {

            //*** ocurrio un error

            $data['uploadError'] = $this->upload->display_errors();

            //echo $this->upload->display_errors();
            echo "<p>Ocurrio un problema al intentar subir el archivo para la imagen completa<a href='".base_url("index.php/AdminWelcome/index")."'> Regresar</a></p>";

            return;

        }
        
        $data['uploadSuccess'] = $this->upload->data();
        $imgCompleta = $this->upload->data()["file_name"];
        
        $data = array(

            'nombre_imagen_fondo' => '',
            'nombre_imagen_frontal' => $imgFront,
            'imagen_completa' => $imgCompleta,
            'titulo' => $titulo,
            'contenido' => $contenido,
            'tipo_card' => 'card-custom',
            'accion' => '',
            'ruta_imagen_fondo' => 'recs/assets/images/',
            'ruta_imagen_frontal' => 'recs/assets/images/',
            'ruta_imagen_completa' => 'recs/assets/images/'

        );
        
        
        
        if($this->db->insert('cards_inicio', $data)){
                $arrayRespuesta["status"] = "OK";

                $arrayRespuesta["respuesta"] = "Operación exitosa";

                

                redirect('AdminWelcome');    
            }else{
                $arrayRespuesta["status"] = "ERROR";

                $arrayRespuesta["respuesta"] = "Fallo la opereación";
            }
            var_dump($this->db->error());
            
    }
    
    
    function agregarModalBaner() {
        $arrayRespuesta = array();
        //$imgBack = $_FILES['imgBackModalBaner']['name'];
        $imgFront = $_FILES['imgFrontModalBaner']['name'];
        $titulo = $_POST['tituloModalBaner'];
        $contenido = $_POST['contenidoModalBaner'];

        $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/";
        

        /*$imgBackM = 'imgBackModalBaner';

        $config['upload_path'] = $ruta;

        $config['file_name'] = $imgBack;

        $config['allowed_types'] = "*";

        $config['max_size'] = "50000";

        $config['max_width'] = "2000";

        $config['max_height'] = "2000";



        $this->load->library('upload');

        $this->upload->initialize($config);

        

        if (!$this->upload->do_upload($imgBackM)) {

            //*** ocurrio un error

            $data['uploadError'] = $this->upload->display_errors();

            echo $this->upload->display_errors();
            echo "<p>Ocurrio un problema al intentar subir el archivo imgaen de fondo<a href='".base_url("index.php/AdminWelcome/index")."'> Regresar</a></p>";

            return;

        }
        
        $data['uploadSuccess'] = $this->upload->data();
        $imgBack = $this->upload->data()["file_name"];*/
        
        //-------img front
        $imgFrontM = 'imgFrontModalBaner';

        $config['upload_path'] = $ruta;

        $config['file_name'] = $imgFront;

        $config['allowed_types'] = "*";

        $config['max_size'] = "50000";

        $config['max_width'] = "2000";

        $config['max_height'] = "2000";



        $this->load->library('upload');

        $this->upload->initialize($config);

        

        if (!$this->upload->do_upload($imgFrontM)) {

            //*** ocurrio un error

            $data['uploadError'] = $this->upload->display_errors();

            //echo $this->upload->display_errors();
            echo "<p>Ocurrio un problema al intentar subir el archivo  imgaen de frontal<a href='".base_url("index.php/AdminWelcome/index")."'> Regresar</a></p>";

            return;

        }
        
        $data['uploadSuccess'] = $this->upload->data();
        $imgFront = $this->upload->data()["file_name"];
        echo $contenido." - ".$titulo;
        $data = array(

            'nombre_imagen_fondo' => '',
            'nombre_imagen_frontal' => $imgFront,
            'titulo' => $titulo,
            'contenido' => $contenido,
            'tipo_card' => 'card-carrousel',
            'accion' => '',
            'ruta_imagen_fondo' => 'recs/assets/images/',
            'ruta_imagen_frontal' => 'recs/assets/images/'

        );
        
        
        
        if($this->db->insert('cards_inicio', $data)){
                $arrayRespuesta["status"] = "OK";

                $arrayRespuesta["respuesta"] = "Operación exitosa";

                

                redirect('AdminWelcome');    
            }else{
                $arrayRespuesta["status"] = "ERROR";

                $arrayRespuesta["respuesta"] = "Fallo la opereación";
            }
            var_dump($this->db->error());
            
    }
}