<?php if (!defined("BASEPATH")) exit("No direct script access allowed");
    
/**
 * Class name : DBM_model
 * 
 * Description :
 * This class contain functions to deal with the user database table (Add , Edit , Delete)
 * 
 * Created date ; 18-4-2013
 * Modification date : ---
 * Modfication reason : ---
 * Author : Mohanad Shab Kaleia
 * contact : ms.kaleia@gmail.com
 */    
    
    
class DBM_model extends CI_Model
{
	
	//class variable
	var $id;
	var $dbm_name = "";		
	
	
	/**
     * Constructor
    **/	
	function __construct()
    {
        parent::__construct();
    }
	
	
	
	/**
	 * function name : addDBM
	 * 
	 * Description : 
	 * add database manager
	 * 
	 * parameters:
	 * 
	 * Created date ; 18-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function addDBM()
	 {
	 	$query = "insert into dbm 
	 			  (name , created_date  ,  is_deleted)
	 			  values
	 			  ('{$this->dbm_name}' , CURDATE() , 'F' ) 
	 				";	
		$this->db->query($query);
	 }
	 
	 
	 /**
	 * function name : modifyDBM
	 * 
	 * Description : 
	 * edit database
	 * 		
	 * Created date ; 18-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function modifyDatabase()
	 {
	 	$query = "update dbm set
	 			  name = '{$this->dbm_name}' , 	 			  	 			   
	 			  modified_date = CURDATE()	 
	 			  where id = {$this->id}";
						  
		//echo $query;
		$this->db->query($query);
	 }
	 
	 
	 /**
	 * function name : deleteDBM
	 * 
	 * Description : 
	 * delete dbm  by make is_deleted field to be true
	 * 		
	 * Created date ; 18-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function deleteDBM()
	 {	 	
	 	$query = "update dbm set
	 			  is_deleted = 'T'
	 			  where id = {$this->id}";
		$this->db->query($query);
	 }
	 
	 	 	
	 
	 
	 /**
	 * function name : getAllDBM
	 * 
	 * Description : 
	 * get all database record
	 * 		
	 * Created date ; 18-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function getAllDBM()
	 {
	 	$query = "select * from dbm where is_deleted='F'";	
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
	public function checkDbmIsExist()
	{		
		$query = "select * from dbm where name='{$this->dbm_name}'";				
		$result = $this->db->query($query);
		
		// if there is a record of the same dbm name then return false				
		if($result->num_rows() > 0)
			return TRUE;
		else 
		{
			return FALSE;
		}
	} 
	
	
	/**
	 * function name : getDbmById
	 * 
	 * Description : 
	 * get database by id
	 * 		
	 * Created date ; 18-4-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function getDbmById($id)
	 {
	 	$query = "select * from dbm where id={$id}";	
		$query = $this->db->query($query);
		return $query->result_array();			
	 }	
	
}    
   
?>