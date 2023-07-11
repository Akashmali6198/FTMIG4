<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebController extends CI_Controller {

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
}
