<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class name : Settings
 * 
 * Description :
 * This class contain functions to manage dashboard page like statistics, show log ...
 * 
 * Created date ; 29-4-2013
 * Modification date : ---
 * Modfication reason : ---
 * Author : Mohanad Shab Kaleia
 * contact : ms.kaleia@gmail.com
 */
class Settings extends CI_Controller {


	
	public function index()
	{
		$this->showSettings();
	}
	
	
	/**
	 * function name : showSettings
	 * 
	 * Description : 
	 * call settings page
	 * 
	 * Created date ; 29-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	public function showSettings()
	{		
		$this->load->view('gen/header');
		$this->load->view('gen/slogan');
		$this->load->view('settings');
		$this->load->view('gen/footer');
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */