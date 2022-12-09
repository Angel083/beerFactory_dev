<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuWeb extends CI_Controller {

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
        $this->load->model("menu_model");
        $this->load->model('img_menus_model');
        
        $data = $this->menu_model->getAll();
        $data['images'] = $this->img_menus_model->getById((!isset($_GET['id_menu'])? "1" : $_GET['id_menu']));

		$this->load->view('helpers/headerRedes');
		$this->load->view('menu_web',$data);
		$this->load->view('helpers/footer');
    }
    
    public function finger_food()
	{
		$this->load->view('helpers/headerRedes');
		$this->load->view('finger_food');
		$this->load->view('helpers/footer');
    }
    
    public function para_todos()
	{
		$this->load->view('helpers/headerRedes');
		$this->load->view('para_todos');
		$this->load->view('helpers/footer');
    }
    
    public function deliciosos()
	{
		$this->load->view('helpers/headerRedes');
		$this->load->view('deliciosos');
		$this->load->view('helpers/footer');
    }
    
    public function love()
	{
		$this->load->view('helpers/headerRedes');
		$this->load->view('love');
		$this->load->view('helpers/footer');
    }
    
    public function beetween()
	{
		$this->load->view('helpers/headerRedes');
		$this->load->view('beetween');
		$this->load->view('helpers/footer');
    }
    
    public function signature()
	{
		$this->load->view('helpers/headerRedes');
		$this->load->view('signature');
		$this->load->view('helpers/footer');
    }

    public function signatsweet()
	{
		$this->load->view('helpers/headerRedes');
		$this->load->view('signatsweet');
		$this->load->view('helpers/footer');
	}
}
