<?php if (!defined("BASEPATH")) exit("No direct script access allowed");
    
/**
 * Class name : restore_model
 * 
 * Description :
 * This class is to manage images of database that's stored.
 * 
 * Created date ; 19-4-2013
 * Modification date : ---
 * Modfication reason : ---
 * Author : Mohanad Shab Kaleia
 * contact : ms.kaleia@gmail.com
 */    
    
    
class Backup_model extends CI_Model
{
	
	//class variable
	var $id;
	var $name = ""; //backup name
			
	
	
	/**
     * Constructor
    **/	
	function __construct()
    {
        parent::__construct();
    }
	
	
	
	/**
	 * function name : addBackup
	 * 
	 * Description : 
	 * add backup information
	 * 
	 * parameters:
	 * database_id : the id of the database that we are backing up
	 * Created date ; 18-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function addBackup($database_id)
	 {
	 	$query = "insert into bacup
	 			  (database_id , backup_name , backup_date  , created_date ,  is_deleted)
	 			  values
	 			  ({$database_id} , '{$this->name}' , CURDATE() , CURDATE() , 'F' ) 
	 				";	
		$this->db->query($query);
	 }
	 
	 
	 /**
	 * function name : getAllBackup
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
	 public function getAllBackup($database_id)
	 {
	 	$query = "select * from stored_database where is_deleted='F' and database_id = {$database_id}";	
		$query = $this->db->query($query);
		return $query->result_array();
	 }	
}    
   
?>