<?php

class Landing extends Controller {

	function Landing(){
		parent::Controller();	
	}
	
	function index(){
		$this->load->model('Experiment');
		$experiments = $this->Experiment->getAllExperiments();  
		$this->load->view('playground_landing',array("experiments"=>$experiments));
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */

?>

