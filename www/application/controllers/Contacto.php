<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Contacto extends CI_Controller {



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
        $this->load->model('ubicaciones_model');

        $data = $this->ubicaciones_model->consultaUbicaciones();
        
		$this->load->view('helpers/headerRedes');

		$this->load->view('contacto',$data);

		$this->load->view('helpers/footer');

	}
	
	public function enviarCorreoReclutamiento(){
	    $nombre = $_POST["nombre"];
        $fecha_nacimiento =  $_POST["fecha_nacimiento"];
        $lugar_nacimiento =  $_POST["lugar_nacimiento"];
        $sexo = $_POST["sexo"];
        $estado_civil =  $_POST["estado_civil"];
        $telefono =  $_POST["telefono"];
        $email =  $_POST["email"];
        $ultimo_grado_estudio =  $_POST["ultimo_grado_estudio"];
        $tipo_empleo = $_POST["tipo_empleo"];
        $estudia_actualmente =  $_POST["estudia_actualmente"];
        $trabaja_actualmente =  $_POST["trabaja_actualmente"];
        $descripcion =  $_POST["descripcion"];
	    
	    
	    
	    
	    $this->load->library('email');
	    // Configure email library
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = "beerfactoryfood@gmail.com";
        $config['smtp_pass'] = "beerfactoryfood";
        
        
        $username = "Pagina Beer Factory & Food";
        $sender_email = "beerfactoryfood@gmail.com";
        //cmartinez@beerfactory.com.mx, beerfactorydemexico@gmail.com, comentarios@clientes.com.mx
        $receiver_email = "rrhh@beerfactory.com.mx";
        
        $subject = "Reclutamiento Beer Factory";
        $message = "<html><body style=''>";
        $message.= "<p style='color:#020202;font-size: 21px;'><label style='color:#020202;font-weight: bold;font-size: 23px;'>Nombre: </label>".$nombre."</p>";
        $message.= "<p  style='color:#020202;font-size: 21px;'><label style='color:#020202;font-weight: bold;font-size: 23px;'>Fecha de nacimiento: </label>".$fecha_nacimiento."</p>";
        $message.= "<p style='color:#020202;font-size: 21px;'><label style='color:#020202;font-weight: bold;font-size: 23px;'>Lugar de nacimiento: </label>".$lugar_nacimiento."</p>";
        $message.= "<p style='color:#020202;font-size: 21px;'><label style='color:#020202;font-weight: bold;font-size: 23px;'>Sexo: ".$sexo."</label></p>";
        $message.= "<p style='color:#020202;font-size: 21px;'><label style='color:#020202;font-weight: bold;font-size: 23px;'>Estado civil: </label>".$estado_civil."</p>";
        $message.= "<p style='color:#020202;font-size: 21px;'><label style='color:#020202;font-weight: bold;font-size: 23px;'>Telefono: </label>".$telefono."</p>";
        $message.= "<p style='color:#020202;font-size: 21px;'><label style='color:#020202;font-weight: bold;font-size: 23px;'>Email: </label>".$email."</p>";
        $message.= "<p style='color:#020202;font-size: 21px;'><label style='color:#020202;font-weight: bold;font-size: 23px;'>Ultimo grado de estudios: </label>".$ultimo_grado_estudio."</p>";
        if($tipo_empleo != "") {
            $message.= "<p style='color:#020202;font-size: 21px;'><label style='color:#020202;font-weight: bold;font-size: 23px;'>Tipo_empleo: </label>".$tipo_empleo."</p>";
        }
        $message.= "<p style='color:#020202;font-size: 21px;'><label style='color:#020202;font-weight: bold;font-size: 23px;'>Actualmente estudia: </label>".$estudia_actualmente."</p>";
        $message.= "<p style='color:#020202;font-size: 21px;'><label style='color:#020202;font-weight: bold;font-size: 23px;'>Trabaja actualmente: </label>".$trabaja_actualmente."</p>";
        $message.= "<p style='color:#020202;font-size: 21px;'><label style='color:#020202;font-weight: bold;font-size: 23px;'>Descripci&oacute;n: </label>".$descripcion."</p>";
        $message.="</body></html>";
        
          
        // Load email library and passing configured values to email library
        $this->load->library('email', $config);
        $this->email->set_newline("rn");
        
        // Sender email address
        $this->email->from($sender_email, $username);
        // Receiver email address
        $this->email->to($receiver_email);
        // Subject of email
        $this->email->subject($subject);
        // Message in email
        $this->email->message($message);
        
        $this->email->set_mailtype("html");
        
        if ($this->email->send()) {
        $data['message_display'] = 'Email Successfully Send !';
        } else {
        $data['message_display'] =  '<p class="error_msg">Invalid Gmail Account or Password !</p>';
        }
        echo $data ['message_display'] ;
	}
	
	public function enviarCorreoContacto(){
	    $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $edad = $_POST['edad'];
        $sucursal = $_POST['sucursal'];
        $comentarios = $_POST['comentarios'];
        $descripcion = $_POST['descripcion'];
	    
	    $this->load->library('email');
	    // Configure email library
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = "beerfactoryfood@gmail.com";
        $config['smtp_pass'] = "beerfactoryfood";
        
        
        $username = "Pagina Beer Factory & Food";
        $sender_email = "beerfactoryfood@gmail.com";
        //cmartinez@beerfactory.com.mx, beerfactorydemexico@gmail.com, comentarios@clientes.com.mx
        $receiver_email = "beerfactorydemexico@gmail.com, kyserrano@beerfactory.com.mx, atencionclientes@beerfactory.com.mx";
        
                $subject = "Contacto Beer Factory";
        $message = "<html><body style='padding:7px;'>";
        $message.= "<p style='color:#020202;font-size: 23px;'><label style='color:#020202;font-weight: bold;font-size: 25px;'>Nombre : </label>".$nombre."</p>";
        $message.= "<p style='color:#020202;font-size: 23px;'><label style='color:#020202;font-weight: bold;font-size: 25px;'>Telefono: </label>".$telefono."</p>";
        $message.= "<p style='color:#020202;font-size: 23px;'><label style='color:#020202;font-weight: bold;font-size: 25px;'>Email: </label>".$email."</p>";
        $message.= "<p style='color:#020202;font-size: 23px;'><label style='color:#020202;font-weight: bold;font-size: 25px;'>Edad: </label>".$edad."</p>";
        $message.= "<p style='color:#020202;font-size: 23px;'><label style='color:#020202;font-weight: bold;font-size: 25px;'>Sucursal: </label>".$sucursal."</p>";
        $message.= "<p style='color:#020202;font-size: 23px;'><label style='color:#020202;font-weight: bold;font-size: 25px;'>Comentarios: </label>".$comentarios."</p>";
        $message.= "<p style='color:#020202;font-size: 23px;'><label style='color:#020202;font-weight: bold;font-size: 25px;'>Descripci&oacute;n: </label>".$descripcion."</p>";
        $message.="</body></html>";
        
          
        // Load email library and passing configured values to email library
        $this->load->library('email', $config);
        $this->email->set_newline("rn");
        
        // Sender email address
        $this->email->from($sender_email, $username);
        // Receiver email address
        $this->email->to($receiver_email);
        // Subject of email
        $this->email->subject($subject);
        // Message in email
        $this->email->message($message);
        
        $this->email->set_mailtype("html");
        
        if ($this->email->send()) {
        $data['message_display'] = 'Email Successfully Send !';
        } else {
        $data['message_display'] =  '<p class="error_msg">Invalid Gmail Account or Password !</p>';
        }
        echo$data ['message_display'] ;
	}

}

