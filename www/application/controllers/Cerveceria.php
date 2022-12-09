<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cerveceria extends CI_Controller {

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
		$this->load->model("galeria_cervezas_model");
		$this->load->model("procesos_model");
		$data = $this->galeria_cervezas_model->imagenes();
		$data['procesos'] = $this->procesos_model->getAll();
		$this->load->view('helpers/headerRedes');
		$this->load->view('cerveceria',$data);
		$this->load->view('helpers/footer');
	}
}