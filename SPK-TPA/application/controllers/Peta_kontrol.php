<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Peta_kontrol extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('topsis_model/Topsis_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}
	
	public function index()
	{
		$data['tampil']=$this->Topsis_model->v();
		$data['maksimal']=$this->Topsis_model->maksimal();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('Peta',$data);
		$this->load->view('Footer');
	}

	public function peta()
	{
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('Peta_view');
		$this->load->view('Footer');
	}

}