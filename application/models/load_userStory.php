<?php 

class load_userStory extends CI_model{
	
	function __construct(){
		parent::__construct();
		
		
		$this->tableName = "content";
		$this->caption ="content";
		$this->controllerName="addstories";
		 $this->recordsPerPage = 25;
	
	
	
	
	$this->add = true;
    $this->update = true;
    $this->view = true;
    $this->printView = true;
    $this->delete = true;
    $this->allowQuickSearch = true;
	
	

	}
	
		
public function getContent() {
    $this->db->select( '*' );
    $this->db->from('developer');
    $query = $this->db->get();
    return  $query;
	
		}
		
		
public function showStory($data){
	$this->db->select('*');
	$this->db->from('developer');
	$this->db->where('devid',$data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	
	
	
}
		
		
public function deleteRow($id){
			
	$this->db->where('devid',$id);
	$this->db->delete('developer');
}
		
		
		
public function editUserStory($id){
		
    $this->db->select( '*' );
    $this->db->from('developer');
	$this->db->where('devid',$id);
    $query = $this->db->get();
	$result = $query->result();
    return  $result;
		
		
}
	
	public function saveEdited($id,$save){
		
		$this->db->where('devid', $id);
		$this->db->update('developer', $save);
		
		
	}
		
		
public function getSelectedProject($selectedProject)
{
		$this->db->select('*');
		$this->db->from('developer');
		$this->db->where('project',$selectedProject);
		$query = $this->db->get();
		return $query;
	
	
	
}
		
		
}