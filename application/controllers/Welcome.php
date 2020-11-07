<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('form');
		
		$this->load->view('header');
		$this->load->view('view_index');
		$this->load->view('footer');
	}

	public function load_maker(){
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('header');		
		$this->load->view('view_index_2');
		$this->load->view('footer');
	}

	/*funcion que recibe parametros pos post*/
	public function load_search(){
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('header');	
		$this->load->view('view_index_4');
		$this->load->view('footer');
	}
	
	public function load_review(){
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('header');		
		$this->load->view('view_index_3');
		$this->load->view('footer');
	}
	
	public function load_account(){
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->view('header');		
		$this->load->view('view_index_5');
		$this->load->view('footer');
	}
}
