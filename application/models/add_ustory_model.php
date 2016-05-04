<?php
class add_ustory_model extends CI_Model{
function __construct() {
parent::__construct();
}

public function addUserStory($data){

$this->db->insert('developer', $data);
}


public function get_developers(){
$query = $this -> db -> query('Select * FROM user WHERE designation = "dev" ');

return $query -> result();

}

public function getProjects(){
	$query= $this->db->query('Select name from project');
	return $query->result();
	
}




}
?>