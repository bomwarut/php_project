<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function index()
	{
		$this->load->view('head');
		$this->load->view('myform');
		
	}
    public function showform()
	{

        $data= array(
            'name' => $this->input->post('name'),
            'lastname' => $this->input->post('lastname'),
        );
        $this->load->view('form_view',$data);

        // echo '<pre>';
		// print_r($_POST);
		// echo '<pre>';
	}
}
