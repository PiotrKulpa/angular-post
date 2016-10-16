<?php
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Origin: *');

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
	 
	 public function __construct()
	{
		parent::__construct();
		$this->load->model('Crud_model');
	}
	
	public function index()
	{
		
		
		//echo $indata->Username;
		$this->load->view('welcome_message');
		$query = $this->Crud_model->add();
		if($query)
			{
				//Insert do bazy udal sie
				$message = array(
					'ok_status' => 'Dane zostały przesłane'
				);
				
				
				
			}
			else
			{
				//Insert do bazy nie udal sie
				$message = array(
					'ok_status' => 'Dane nie zostały przesłane'
				);
				
			}	
		
	}
}
