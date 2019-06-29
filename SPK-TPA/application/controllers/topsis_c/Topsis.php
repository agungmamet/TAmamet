<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topsis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('topsis_model/Topsis_model');
	}

	public function index()
	{
		$data['pembagi']=$this->Topsis_model->pembagi();
		$data['normalisasi']=$this->Topsis_model->ternormalisasi();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('topsis_view/pembagi_view',$data);
		$this->load->view('Footer');
	}

	public function ternormalisasi()
	{
		$data['tampil']=$this->Topsis_model->ternormalisasi();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('topsis_view/ternormalisasi_view',$data);
		$this->load->view('Footer');
	}

	public function terbobot()
	{
		$data['tampil']=$this->Topsis_model->terbobot();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('topsis_view/terbobot_view',$data);
		$this->load->view('Footer');
	}

	public function amax()
	{
		$data['tampilamax']=$this->Topsis_model->amax();
		$data['tampilamin']=$this->Topsis_model->amin();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('topsis_view/amax_view',$data);
		$this->load->view('Footer');
	}

	public function amin()
	{
		$data['tampil']=$this->Topsis_model->amin();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('topsis_view/amin_view',$data);
		$this->load->view('Footer');
	}

	public function dmax()
	{
		$data['tampildmax']=$this->Topsis_model->dmax();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('topsis_view/dmax_view',$data);
		$this->load->view('Footer');
	}

	public function dmin()
	{
		$data['tampil']=$this->Topsis_model->dmin();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('topsis_view/dmin_view',$data);
		$this->load->view('Footer');
	}

	public function v()
	{
		$data['tampil']=$this->Topsis_model->v();
		$data['maksimal']=$this->Topsis_model->maksimal();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('topsis_view/nilaiv_view',$data);
		$this->load->view('Footer');
	}

}
