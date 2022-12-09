
<?
class Usuario_model extends CI_Model{

	public function __construct(){

		parent::__construct();
	}

	public function login($usuario,$password){
        $this->db->where('usuario',$usuario);
        $this->db->where('password',$password);
        $q = $this->db->get("usuarios");
        if($q->num_rows() > 0){
            return true;
        }else{
            return false;
        }
		//$consulta = ' select usuario.usu_id,usuario.usu_nombres,usuario.usu_apellidop,usuario.usu_apellidom,usuario.usu_email,roles.rol_id,roles.rol_nombre from usuario,roles where usuario.rol_id=roles.rol_id and usuario.usu_email="'.$email.'" and usuario.usu_contrasena="'.$contrasena.'" ';
		//$resultado = $this->db->query($consulta);
		//return $resultado->result_array();
	}
}