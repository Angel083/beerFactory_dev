<?
class Calendario_model extends CI_Model{

	public function __construct(){

		parent::__construct();
	}

	public function consultaCalendario(){
        
        $result =  $this->db->get("calendario");
        $this->db->group_by("fecha");
        $resultGBY =  $this->db->get("calendario");

        $this->db->group_by("descripcion");
        $resultGBD =  $this->db->get("calendario");
        
        $data = array("consulta"=>$result,"consultaGroupBy"=>$resultGBY, "consultaGroupByDes"=>$resultGBD);
        return $data;
    }
    
    public function registraEvento($data){
        if($this->db->insert('calendario', $data)){
            return true;
        }else{
            return false;
        }
    }

    public function actualizaEvento($data, $id){
        $this->db->where('id_evento', $id);
        if($this->db->update('calendario', $data)){
            return true;
        }else{
            return false;
        }
    }

    public function eliminar($id){
        $this->db->where('id_evento', $id);
        if($this->db->delete('calendario')){
            return true;
        }else{
            return false;
        }
    }

    public function obtenerEvento($id_evento){
        $this->db->where('id_evento', $id_evento);
        $result =  $this->db->get("calendario");
        //$data = array("consulta"=>$result);
        $arrayRespuesta = array();
        foreach($result->result() as $fila){
			
            $arrayRespuesta["status"] = "OK";
            $arrayRespuesta["nombre_evento"] = $fila->nombre_evento;
			$arrayRespuesta["id_evento"] = $fila->id_evento;
            $arrayRespuesta["lugar"] =$fila->lugar;
            $arrayRespuesta["fecha"] =$fila->fecha;
            $arrayRespuesta["hora"] =$fila->hora;
            $arrayRespuesta["url_evento"] =$fila->url_evento;
            $arrayRespuesta["descripcion"] =$fila->descripcion;
            $arrayRespuesta["promocion"] =$fila->promocion;
			$myJSON = json_encode($arrayRespuesta);
		}

        return $arrayRespuesta;
    }
}