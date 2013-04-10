<?php if (!defined("BASEPATH")) exit("No direct script access allowed");
    
/**
 * Class name : Database_model
 * 
 * Description :
 * This class contain functions to deal with the user database table (Add , Edit , Delete)
 * 
 * Created date ; 10-4-2013
 * Modification date : ---
 * Modfication reason : ---
 * Author : Mohanad Shab Kaleia
 * contact : ms.kaleia@gmail.com
 */    
    
    
class Database_model extends CI_Model
{
	
	//class variable
	var $id;
	var $database_name = "";		
	
	
	/**
     * Constructor
    **/	
	function __construct()
    {
        parent::__construct();
    }
	
	
	
	/**
	 * function name : addUDatabase
	 * 
	 * Description : 
	 * add database for example backMeup 
	 * 
	 * parameters:
	 * dbm_id: the database manager id for example mysql id		
	 * Created date ; 10-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function addDatabase($dbm_id)
	 {
	 	$query = "insert into database 
	 			  (dbm_id , database_name , created_date  ,  is_deleted)
	 			  values
	 			  ({$dbm_id} , '{$this->database_name}' , CURDATE() , 'F' ) 
	 				";	
		$this->db->query($query);
	 }
	 
	 
	 /**
	 * function name : modifyDatabase
	 * 
	 * Description : 
	 * edit database
	 * 		
	 * Created date ; 10-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function modifyDatabase()
	 {
	 	$query = "update database set
	 			  database_name = '{$this->database_name}' , 	 			  	 			   
	 			  modified_date = CURDATE()	 
	 			  where id = {$this->id}";
						  
		//echo $query;
		$this->db->query($query);
	 }
	 
	 
	 /**
	 * function name : deleteDatabase
	 * 
	 * Description : 
	 * delete database  by make is_deleted field to be true
	 * 		
	 * Created date ; 10-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function deleteUser()
	 {	 	
	 	$query = "update database set
	 			  is_deleted = 'T'
	 			  where id = {$this->id}";
		$this->db->query($query);
	 }
	 
	 	 	
	 
	 
	 /**
	 * function name : getAllDatabaseInfo
	 * 
	 * Description : 
	 * get all database record
	 * 		
	 * Created date ; 10-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function getAllDatabaseInfo()
	 {
	 	$query = "select * from database where is_deleted='F'";	
		$query = $this->db->query($query);
		return $query->result_array();
		//return $query->result(); 		
	 }
	 
	 
	 
	 /**
	 * function name : checkDatabaseIsExist
	 * 
	 * Description : 
	 * Check the database name is in the database or not  
	 * if there is a record of the same database name then return true		 
	 *  		
	 * parameters:
	  * db_id : the database manager id .. 			
	 * Created date ; 10-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	public function checkDatabaseIsExist()
	{		
		$query = "select * from database where database_name='{$this->database_name}'";				
		$result = $this->db->query($query);
		
		// if there is a record of the same email address then return false				
		if($result->num_rows() > 0)
			return TRUE;
		else 
		{
			return FALSE;
		}
	} 
	
	
	/**
	 * function name : getById
	 * 
	 * Description : 
	 * get database by id
	 * 		
	 * Created date ; 10-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function getById($id)
	 {
	 	$query = "select * from database where id={$id}";	
		$query = $this->db->query($query);
		return $query->result_array();			
	 }	
	 
	 
	 
	 /**
	 * function name : getDatabaseByDBM
	 * 
	 * Description : 
	 * get database by dbm_id
	 * paremeters:
	  * dbm_id 		
	 * Created date ; 10-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function getDatabaseByDBM($dbm_id)
	 {
	 	$query = "select * from database where dbm_id={$dbm_id}";	
		$query = $this->db->query($query);
		return $query->result_array();			
	 }
}    
   
?>