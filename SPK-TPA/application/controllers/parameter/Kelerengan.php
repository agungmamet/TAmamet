<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelerengan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('parameter_model/Kelerengan_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$data['tampil']=$this->Kelerengan_model->joinkelerengan();
		$data['bobot']=$this->Kelerengan_model->bobot();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('parameter_view/kelerengan_view',$data);
		$this->load->view('Footer');
	}

	public function tambahkelerengan()
	{
		$data['daerah']=$this->Kelerengan_model->tampilkecamatan();
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('tambah_parameter/tambah_kelerengan_view',$data);
		$this->load->view('Footer');
	}

	public function simpankelerengan()
	{
		$iddaerah = $this->input->post('iddaerah');
		$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');

			$data = array(
				'id_daerah' => $iddaerah,
				'kelerengan' => $nilaiklasifikasi,
				'editby' => $this->session->userdata('id_admin')
				);
			// print_r($data);
		$this->Kelerengan_model->tambah_kelerengan($data);
			// $this->db->insert('pegawai',$data);
		redirect('parameter/Kelerengan/index');
	}

	public function editkelerengan($id)
	{
		$data['edit']=$this->Kelerengan_model->edit_kelerengan($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('edit_parameter/edit_kelerengan_view',$data);
		$this->load->view('Footer');
	}

	public function updatekelerengan()
	{
	 	$idklasifikasi = $this->input->post('idklasifikasi');
	 	$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');
		 
			$data = array(
				'kelerengan' => $nilaiklasifikasi,
				'editby' => $this->session->userdata('id_admin')
			);
		 
			$where = array(
				'id_klasifikasi' => $idklasifikasi
			);
		 	// print_r($data);
			$this->Kelerengan_model->update_kelerengan($where,$data,'nilai_klasifikasi');
			redirect('parameter/Kelerengan/index');
	}

	public function hapuskelerengan($id)
	{
		$this->Kelerengan_model->hapus_kelerengan($id);
		redirect('parameter/Kelerengan/index');
	}
}
