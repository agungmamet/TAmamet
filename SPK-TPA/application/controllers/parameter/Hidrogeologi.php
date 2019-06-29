<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hidrogeologi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('parameter_model/Hidrogeologi_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$data['tampil']=$this->Hidrogeologi_model->joinhidro();
		$data['bobot']=$this->Hidrogeologi_model->bobot();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('parameter_view/hidrogeologi_view',$data);
		$this->load->view('Footer');
	}

	public function tambahhidro()
	{
		$data['daerah']=$this->Hidrogeologi_model->tampilkecamatan();
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('tambah_parameter/tambah_hidrogeologi_view',$data);
		$this->load->view('Footer');
	}

	public function simpanhidro()
	{
		$iddaerah = $this->input->post('iddaerah');
		$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');

			$data = array(
				'id_daerah' => $iddaerah,
				'hidrogeologi' => $nilaiklasifikasi,
				'editby' => $this->session->userdata('id_admin')
				);
			// print_r($data);
		$this->Hidrogeologi_model->tambah_hidro($data);
			// $this->db->insert('pegawai',$data);
		redirect('parameter/Hidrogeologi/index');
	}

	public function edithidro($id)
	{
		$data['edit']=$this->Hidrogeologi_model->edit_hidro($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('edit_parameter/edit_hidro_view',$data);
		$this->load->view('Footer');
	}

	public function updatehidro()
	{
	 	$idklasifikasi = $this->input->post('idklasifikasi');
	 	$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');
	 	$keterangan = $this->input->post('keterangan');
		 
			$data = array(
				'hidrogeologi' => $nilaiklasifikasi,
				'editby' => $this->session->userdata('id_admin')
			);
		 
			$where = array(
				'id_klasifikasi' => $idklasifikasi
			);
		 	// print_r($data);
			$this->Hidrogeologi_model->update_hidro($where,$data,'nilai_klasifikasi');
			redirect('parameter/Hidrogeologi/index');
	}

	public function hapushidro($id)
	{
		$this->Hidrogeologi_model->hapus_hidro($id);
		redirect('parameter/Hidrogeologi/index');
	}
}
