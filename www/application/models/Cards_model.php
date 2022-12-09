<?

class Cards_model extends CI_Model{



    private $id_table = "id_card";

    private $name_table = "cards_inicio";



	public function __construct(){



		parent::__construct();

	}



	public function getAll(){

        
        $this->db->order_by('tipo_card', 'ASC');
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


        $this->db->where($this->id_table, $id);

        $result =  $this->db->get($this->name_table);
        
        foreach($result->result() as $column){
            $ruta =  $_SERVER['DOCUMENT_ROOT']."/recs/assets/images/";
            unlink($ruta.$column->nombre_imagen_fondo);
            unlink($ruta.$column->nombre_imagen_frontal);
            if($column->imagen_completa != ""){
                unlink($ruta.$column->imagen_completa);
            }
        }
        
        

        $this->db->where($this->id_table, $id);

        if($this->db->delete($this->name_table)){

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

            $response["id_card"] = $column->id_card;

            $response["titulo"] = $column->titulo;

            $response["contenido"] = $column->contenido;

            $response["nombre_imagen_fondo"] = $column->nombre_imagen_fondo;

            $response["nombre_imagen_frontal"] = $column->nombre_imagen_frontal;

            $response["imagen_completa"] = $column->imagen_completa;

		}

        return $response;

    }

}