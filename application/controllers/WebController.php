<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebController extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        // $this->load->helper("login_check_helper");
        $this->check_login();
        
    }

    private function check_login(){
        // echo current_url();
        if(current_url() != base_url()){
            if(empty($this->session->userdata('user'))){
                redirect("login"); 
            }
        }
        
       
    }
	public function index()
	{
		$this->load->view('components/header.php');
		$this->load->view('index.php');
		$this->load->view('components/footer.php');
	}

	public function tv()
	{
		$this->load->view('components/header.php');
		$this->load->view('tv.php');
		$this->load->view('components/footer.php');
	}
	public function event()
	{
	
		$this->load->view('components/header.php');
		$this->load->view('event.php');
		$this->load->view('components/footer.php');
	}
	public function speakers()
	{
		$this->load->view('components/header.php');
		$this->load->view('speakers.php');
		$this->load->view('components/footer.php');
	}
	public function companie()
	{
		$this->load->view('components/header.php');
		$this->load->view('companie.php');
		$this->load->view('components/footer.php');
	}
	public function StoreEvent(){

		print_r($this->input->file());
		  $data = array(  
                        'name'     => $this->input->post('name'),  
                        'meaning'  => $this->input->post('meaning'),  
                        'gender'   => $this->input->post('gender'),  
                        'religion' => $this->input->post('religion')  
                        );  
        //insert data into database table.  
        $this->db->insert('baby',$data);  
  
	}

	public function Conferences(){
		$this->load->view('components/header.php');
		$this->load->view('Conferences.php');
		$this->load->view('components/footer.php');

	}
	public function Chat(){
		$this->load->view('components/header.php');
		$this->load->view('Chat.php');
		$this->load->view('components/footer.php');

	}
	public function Magzine(){
		$this->load->view('components/header.php');
		$this->load->view('Magazine.php');
		$this->load->view('components/footer.php');

	}
	public function Summits(){
		$this->load->view('components/header.php');
		$this->load->view('Summits.php');
		$this->load->view('components/footer.php');

	}
	public function Strategy(){
		$this->load->view('components/header.php');
		$this->load->view('Strategy.php');
		$this->load->view('components/footer.php');

	}
	public function Ixo(){
		$this->load->view('components/header.php');
		$this->load->view('IXO.php');
		$this->load->view('components/footer.php');

	}
	public function Ads(){
		$this->load->view('components/header.php');
		$this->load->view('Ads.php');
		$this->load->view('components/footer.php');

	}
	public function Creative(){
		$this->load->view('components/header.php');
		$this->load->view('Creative.php');
		$this->load->view('components/footer.php');

	}
	public function Analytics(){
		$this->load->view('components/header.php');
		$this->load->view('Analytics.php');
		$this->load->view('components/footer.php');

	}
	public function Web(){
		$this->load->view('components/header.php');
		$this->load->view('Web.php');
		$this->load->view('components/footer.php');

	}
	
	public function Social(){
	    $this->load->view('components/header.php');
		$this->load->view('social.php');
		$this->load->view('components/footer.php');   
	}
	public function browse_events(){
	    $this->load->view('components/header.php');
		$this->load->view('browse-events.php');
		$this->load->view('components/footer.php');   
	}
	
	public function upcoming_webinar(){
	    $this->load->view('components/header.php');
		$this->load->view('upcoming_webinar.php');
		$this->load->view('components/footer.php');   
	}
	public function Twitter(){
	    $this->load->view('components/header.php');
		$this->load->view('twitter.php');
		$this->load->view('components/footer.php');   
	}
	public function About(){
	    $this->load->view('components/header.php');
		$this->load->view('about.php');
		$this->load->view('components/footer.php');   
	}
	public function Invest(){
	    $this->load->view('components/header.php');
		$this->load->view('invest.php');
		$this->load->view('components/footer.php');   
	}
	public function Raise(){
	    $this->load->view('components/header.php');
		$this->load->view('raise.php');
		$this->load->view('components/footer.php');   
	}
	public function Host(){
	    $this->load->view('components/header.php');
		$this->load->view('host.php');
		$this->load->view('components/footer.php');   
	}
	public function Demo(){
	    $this->load->view('components/header.php');
		$this->load->view('demo.php');
		$this->load->view('components/footer.php');   
	}
	public function Pricing(){
	    $this->load->view('components/header.php');
		$this->load->view('pricing.php');
		$this->load->view('components/footer.php');   
	}
	public function Security(){
	    $this->load->view('components/header.php');
		$this->load->view('security.php');
		$this->load->view('components/footer.php');   
	}
	

}
