<?php
class Webapi_model extends CI_model{
	
	/*function saveData($data) 
	{
		if($this->db->insert('api_details',$data))
		{
		return 1;	
		}
		else
		{
		return 0;	
		}
    }*/
	
	
	
	function all(){
		return $api_details = $this->db->get('api_details')->result_array();
	}
	
	function getDetails($Id){
		$this->db->where('id',$Id);
		return $api_detail = $this->db->get('api_details')->row_array();
	}
	
	function updateDetails($Id,$formArray){
		$this->db->where('id',$Id);
		$this->db->update('api_details',$formArray);
	}
}
?>