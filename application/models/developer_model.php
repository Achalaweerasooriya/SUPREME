<?php 

class developer_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	
	
	public function getDeveloperTasks($user){
		
		$this->db->select('*');
		$this->db->from('developer');
		$this->db->where('name',$user);
		$query = $this->db->get();
		return $query;
	}
	
	public function getName($username){
		
		$this->db->select('full_name');
		$this->db->from('user');
		$this->db->where('user_name',$username);
		$query=$this->db->get();
		$result = $query->row();
		return $result->full_name;
		}
	
	public function checkoldpwd($mdpass,$usernm){
		
		$this->db->select('*');
        $this->db->from('user');
        $this->db->where('user_name',$usernm);
        $this->db->where('pwd',$mdpass);
        $query = $this->db->get();
        if($query->num_rows()==1){
			return true;
		}
		else{
			return false;
		}
		
	}
	
	public function changePwd($data,$usernm){
		
		$this->db->where('user_name', $usernm);
        $this->db->update('user', $data); 
		
	}
	
public function saveUserDetails($usernm,$data){
	
	
		$this->db->where('user_name', $usernm);
        $this->db->update('user', $data); 
		
	
	
	}
	
}