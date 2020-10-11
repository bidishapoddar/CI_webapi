<?php
class Webapi extends CI_controller{
	/*function dataentry(){
		$this->load->view('ajaxview');
	}
	
	function savedata()
   {
		$data = array();
		
		
		$this->load->model('Webapi_model');
		$result=$this->Webapi_model->saveData($data);
		if($result)
		{
		echo  1;	
		}
		else
		{
		echo  0;	
		}
    }*/




	
	function register(){
		$this->load->model('Webapi_model');
		$api_details = $this->Webapi_model->all();
		
		$data = array();
		$data['api_details'] = $api_details;
		$this->load->view('list',$data);
	}
	
	function edit($Id){
		$this->load->model('Webapi_model');
		$api_detail = $this->Webapi_model->getDetails($Id);
		
		$data = array();
		$data['api_detail'] = $api_detail;
		
		$this->form_validation->set_rules('capital','Capital','required');
		if($this->form_validation->run() == false)
		{
			$this->load->view('edit',$data);
		}
		else
		{
			$formArray = array();
			
			$formArray['capital']= $this->input->post('capital');
			$formArray['region']= $this->input->post('region');
			
			$this->Webapi_model->updateDetails($Id,$formArray);
			redirect(base_url().'index.php/Webapi/register/');
			
		}
	}
}
?>