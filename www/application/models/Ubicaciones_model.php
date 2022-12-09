<?
class Ubicaciones_model extends CI_Model{

	public function __construct(){

		parent::__construct();
	}

	public function consultaUbicaciones(){
        
        $result =  $this->db->get("ubicaciones");
        
        $data = array("consulta"=>$result);
        return $data;
    }
    
    public function registraUbicacion($data){
        if($this->db->insert('ubicaciones', $data)){
            return true;
        }else{
            return false;
        }
    }

    public function actualizaUbicacion($data, $id){
        $this->db->where('id_ubicacion', $id);
        if($this->db->update('ubicaciones', $data)){
            return true;
        }else{
            return false;
        }
    }

    public function eliminar($id){
        $this->db->where('id_ubicacion', $id);
        if($this->db->delete('ubicaciones')){
            return true;
        }else{
            return false;
        }
    }

    public function obtenerUbicacion($id_ubicacion){
        $this->db->where('id_ubicacion', $id_ubicacion);
        $result =  $this->db->get("ubicaciones");
        //$data = array("consulta"=>$result);
        $arrayRespuesta = array();
        foreach($result->result() as $fila){
			
            $arrayRespuesta["status"] = "OK";
            $arrayRespuesta["nombre_ubicacion"] = $fila->nombre_ubicacion;
			$arrayRespuesta["direccion"] = $fila->direccion;
            $arrayRespuesta["telefono"] =$fila->telefono;
            $arrayRespuesta["dias"] =$fila->dias;
            $arrayRespuesta["latitud"] =$fila->latitud;
            $arrayRespuesta["longitud"] =$fila->longitud;
			$myJSON = json_encode($arrayRespuesta);
		}

        return $arrayRespuesta;
    }
}