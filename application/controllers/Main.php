<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function testimonial()
	{
		$this->load->view('header');
		$this->load->view('testimonial');
		$this->load->view('footer');
	}
	public function partners()
	{
		$this->load->view('header');
		$this->load->view('partners');
		$this->load->view('footer');
	}
	public function detail()
	{
		$this->load->view('header');
		$this->load->view('detail');
		$this->load->view('footer');
	}
}
