<?php if (!defined("BASEPATH")) exit("No direct script access allowed");
    
/**
 * Class name : restore_model
 * 
 * Description :
 * This class will manage resotres the database information
 * 
 * Created date ; 26-4-2013
 * Modification date : ---
 * Modfication reason : ---
 * Author : Mohanad Shab Kaleia
 * contact : ms.kaleia@gmail.com
 */    
    
    
class Restore_model extends CI_Model
{
	
	//class variable
	var $id;
	
			
	
	
	/**
     * Constructor
    **/	
	function __construct()
    {
        parent::__construct();
    }
	
	
	
	/**
	 * function name : addRestore
	 * 
	 * Description : 
	 * add restore information
	 * 
	 * parameters:
	 * database_id : the id of the database that we are backing up
	 * Created date ; 18-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function addRestore($database_id , $backup_id="" , $backup_file="")
	 {
	 	$query = "insert into restore
	 			  (database_id , backup_id , backup_file , restoration_date , created_date ,  is_deleted)
	 			  values
	 			  ({$database_id} , {$backup_id} , '{$backup_file}' , CURDATE() , CURDATE() , 'F' ) 
	 				";	
		$this->db->query($query);
	 }
	 
	 
	 /**
	 * function name : getAllRestoration
	 * 
	 * Description : 
	 * get all backups that belong to a database
	 * 		
	 * Created date ; 19-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */	 
	 public function getAllRestoration($database_id)
	 {
	 	$query = "select * from restore where is_deleted='F' and database_id = {$database_id}";	
		$query = $this->db->query($query);
		return $query->result_array();
	 }	
}    
   
?>