<?

class Procesos_model extends CI_Model{



    private $id_table = "id_imagen";

    private $name_table = "procesos";



	public function __construct(){



		parent::__construct();

	}



	public function getAll(){

        

        $result =  $this->db->get($this->name_table);

        

        $data = array("query"=>$result);

        return $data;

    }

    

    public function add($data){

        if($this->db->insert($this->name_table, $data)){

            return true;

        }else{

            return false;

        }

    }



    public function update($data, $id){

        $this->db->where($this->id_table, $id);

        if($this->db->update($this->name_table, $data)){

            return true;

        }else{

            return false;

        }

    }



    public function delete($id){

        $this->db->where($this->id_table, $id);

        $result = $this->db->get($this->name_table);

        $data = array("consulta"=>$result);



        $path_to_file = "";



        foreach($result->result() as $column){

            $path_to_file = $_SERVER['DOCUMENT_ROOT']."/beer_factory"."/".$column->ruta_img_fondo.$column->nombre_imagen_fondo;

            $path_to_file_front = $_SERVER['DOCUMENT_ROOT']."/beer_factory"."/".$column->ruta_img_frontal.$column->nombre_imagen_frontal;

        }



        $this->db->where($this->id_table, $id);

        if($this->db->delete($this->name_table)){

            if(is_readable($path_to_file) && unlink($path_to_file) && unlink($path_to_file_front)) {

                //echo 'deleted successfully';

           } else {

                //echo 'errors occured';

           }

            return true;

        }else{

            return false;

        }

    }



    public function getById($id){

        $this->db->where($this->id_table, $id);

        $result =  $this->db->get($this->name_table);

        $response = array();

        foreach($result->result() as $column){

            $response["status"] = "OK";

            $response["id_menu"] = $column->id_menu;

			$response["nombre_menu"] = $column->nombre_menu;

		}

        return $response;

    }

}