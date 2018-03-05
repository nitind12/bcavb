<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	function index(){
		$data['title'] = "My First Web App";
		$data['heading'] = "My heading";

		$this->load->view('templates/header');
		$this->load->view('login', $data);
		$this->load->view('templates/footer');
	}

	function authenticate(){
		$this->load->model('my_model', 'mm');
		$result = $this->mm->check();

		if($result == 1){
			redirect('web/enterMain');
		} else {
			redirect('web');
		}
	}

	function enterMain(){
		$this->load->view('templates/header');
		$this->load->view('main');
		$this->load->view('templates/footer');
	}

	function create(){
		$this->load->view('templates/header');
		$this->load->view('create');
		$this->load->view('templates/footer');
	}

	function submit(){
		$this->load->model('My_model', 'mm');
		$res = $this->mm->insert();

		if($res == true){
			$this->session->set_userdata('msg_', "Successfully submited.");
			redirect('web/create');
		} else {
		$this->session->set_userdata('msg_', "User Already Exists. Please try again");
		redirect('web/create');
		}
	}
}
