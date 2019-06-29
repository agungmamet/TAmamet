<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Banjir extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('parameter_model/Banjir_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$data['tampil']=$this->Banjir_model->joinbanjir();
		$data['bobot']=$this->Banjir_model->bobot();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('parameter_view/banjir_view',$data);
		$this->load->view('Footer');
	}

	public function tambahbanjir()
	{
		$data['daerah']=$this->Banjir_model->tampilkecamatan();
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('tambah_parameter/tambah_banjir_view',$data);
		$this->load->view('Footer');
	}

	public function simpanbanjir()
	{
		$iddaerah = $this->input->post('iddaerah');
		$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');

			$data = array(
				'id_daerah' => $iddaerah,
				'rawan_banjir' => $nilaiklasifikasi,
				'editby' => $this->session->userdata('id_admin')
				);
			// print_r($data);
		$this->Banjir_model->tambah_banjir($data);
		redirect('parameter/Banjir/index');
	}

	public function editbanjir($id)
	{
		$data['edit']=$this->Banjir_model->edit_banjir($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('edit_parameter/edit_banjir_view',$data);
		$this->load->view('Footer');
	}

	public function updatebanjir()
	{
	 	$idklasifikasi = $this->input->post('idklasifikasi');
	 	$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');
		 
			$data = array(
				'rawan_banjir' => $nilaiklasifikasi,
				'editby' => $this->session->userdata('id_admin')
			);
		 
			$where = array(
				'id_klasifikasi' => $idklasifikasi
			);
		 	// print_r($data);
			$this->Banjir_model->update_banjir($where,$data,'nilai_klasifikasi');
			redirect('parameter/Banjir/index');
	}

	public function hapusbanjir($id)
	{
		$this->Banjir_model->hapus_banjir($id);
		redirect('parameter/Banjir/index');
	}
}