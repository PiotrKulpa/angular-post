<?php
class Crud_model extends CI_Model {

        public function __construct()
        {
            $this->load->database();
        }
		
		public function add(){
			$indata = json_decode(file_get_contents('php://input'));
			if(isset($indata)){
				//Przechwytuje dane POST
				
				$Username = $indata->Username;
				$First_name = $indata->First_Name;
				$Last_name = $indata->Last_Name;
				$Email = $indata->Email;
				$Status = $indata->Status;
				//Query Builder Class automatycznie wykonuje Escaping Queries
				$data = array(
				'Username' => $Username,
				'First_name' => $First_name,
				'Last_name' => $Last_name,
				'Email' => $Email,
				'Status' => $Status
				);

				$addquery = $this->db->insert('customers', $data);
				
				if ($addquery) {
						
						
						return true;
						
					} else {
						
						
						return false;
					}
			}
		}

}