<?php if (!defined("BASEPATH")) exit("No direct script access allowed");
    
/**
 * Class name : User_model
 * 
 * Description :
 * This class contain functions to deal with the user database table (Add , Edit , Delete)
 * 
 * Created date ; 5-10-2012
 * Modification date : ---
 * Modfication reason : ---
 * Author : Mohanad Shab Kaleia
 * contact : ms.kaleia@gmail.com
 */    
    
    
class User_model extends CI_Model
{
	
	//class variable
	var $id;
	var $username = "";
	var $password = "";
	var $email =  "";	
	
	
	/**
     * Constructor
    **/	
	function __construct()
    {
        parent::__construct();
    }
	
	
	
	/**
	 * function name : addUser
	 * 
	 * Description : 
	 * add user to the database 
	 * 		
	 * Created date ; 22-3-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function addUser()
	 {
	 	$query = "insert into users 
	 			  (username , password , email , created_date  ,  is_deleted)
	 			  values
	 			  ('{$this->username}' , '{$this->password}' , '{$this->email}' , CURDATE() , 'F' ) 
	 				";	
		$this->db->query($query);
	 }
	 
	 
	 /**
	 * function name : modifyUser
	 * 
	 * Description : 
	 * edit user to the database 
	 * 		
	 * Created date ; 22-3-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function modifyUser()
	 {
	 	$query = "update users set
	 			  username = '{$this->username}' , 
	 			  password = '{$this->password}' , 
	 			  email = '{$this->email}' , 	 			   
	 			  modified_date = CURDATE()	 
	 			  where id = {$this->id}";

						  
		//echo $query;
		$this->db->query($query);
	 }
	 
	 
	 /**
	 * function name : deleteUser
	 * 
	 * Description : 
	 * delete user by make is_deleted field to be true
	 * 		
	 * Created date ; 22-3-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function deleteUser()
	 {	 	
	 	$query = "update users set
	 			  is_deleted = 'T'
	 			  where id = {$this->id}";
		$this->db->query($query);
	 }
	 
	 
	 
	 /**
	 * function name : resetPassword
	 * 
	 * Description : 
	 * change user password
	 * 		
	 * Created date ; 22-3-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function changePassword()
	 {	 	
	 	$query = "update users set
	 			  password = '{$this->password}'
	 			  where id = {$this->id}";
		$this->db->query($query);
	 }
	 
	 
	 /**
	 * function name : getAllUserInfo
	 * 
	 * Description : 
	 * get all users from the database
	 * 		
	 * Created date ; 22-3-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function getAllUserInfo()
	 {
	 	$query = "select * from users where is_deleted='F'";	
		$query = $this->db->query($query);
		return $query->result_array();
		//return $query->result(); 		
	 }
	 
	 
	 
	 /**
	 * function name : checkUserIsExist
	 * 
	 * Description : 
	 * Check the user is in the database or not  
	 * if there is a record of the same email address then return true		 
	 *  					
	 * Created date ; 22-3-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	public function checkUserIsExist()
	{		
		$query = "select * from users where email='{$this->email}'";				
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
	 * get user by id
	 * 		
	 * Created date ; 22-3-2013
	 * Modification date : ---
	 * Modfication reason : ---
	 * Author : Mohanad Shab Kaleia
	 * contact : ms.kaleia@gmail.com
	 */
	 public function getById($id)
	 {
	 	$query = "select * from users where id={$id}";	
		$query = $this->db->query($query);
		return $query->result_array();			
	 }	
}    
    
    
    
    
    
?>