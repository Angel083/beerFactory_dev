<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cervezas extends CI_Controller {

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
        $this->load->model("cervezas_model");
        $this->load->model('carrousel_cervezas_model');
        $this->load->model('maridaje_model');
        $this->load->model('botellas_model');

        $data = $this->cervezas_model->getAll();
        $data['images'] = $this->carrousel_cervezas_model->getAll();
        $data['maridaje'] = $this->maridaje_model->getAll();
        $data['botellas'] = $this->botellas_model->getAll();

		$this->load->view('helpers/headerRedes');
		$this->load->view('cervezas',$data);
		$this->load->view('helpers/footer');
	}
}
