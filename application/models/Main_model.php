<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {

    public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		function clear($x=''){
			$con = new mysqli("localhost", "", "", "");
			$aman=mysqli_real_escape_string($con ,$x);
				return $aman;
		}
    }
	
}

/* End of file Main_model.php */
