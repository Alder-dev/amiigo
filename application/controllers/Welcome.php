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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index_en()
	{
		$this->load->view('head_en');
		$this->load->view('index_body_en');
		$this->load->view('footer_en');
	}

	public function index_es()
	{
		$this->load->view('head_es');
		$this->load->view('index_body_es');
		$this->load->view('footer_es');
	}

	public function login_en()
	{
		$this->load->view('login_head_en');
		$this->load->view('login_body_en');
		$this->load->view('login_footer_en');
	}


}
