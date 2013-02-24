<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class name : User
 * 
 * Description :
 * This class contain functions to manage user
 * 
 * Created date ; 23-2-2013
 * Modification date : ---
 * Modfication reason : ---
 * Author : Mohanad Shab Kaleia
 * contact : ms.kaleia@gmail.com
 */
class User extends CI_Controller {


	
	public function index()
	{
		$this->login();
	}
	
	
	/**
	 * function name : login
	 * 
	 * Description : 
	 * call login view
	 * 
	 * Created date ; 23-2-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	public function login()
	{		
		$this->load->view('gen/header');
		$this->load->view('login');
		$this->load->view('gen/footer');
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */