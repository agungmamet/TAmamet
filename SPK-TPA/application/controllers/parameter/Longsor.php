<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Longsor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();		
		$this->load->model('parameter_model/Longsor_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$data['tampil']=$this->Longsor_model->joinlongsor();
		$data['bobot']=$this->Longsor_model->bobot();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('parameter_view/longsor_view',$data);
		$this->load->view('Footer');
	}

	public function tambahlongsor()
	{
		$data['daerah']=$this->Longsor_model->tampilkecamatan();
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('tambah_parameter/tambah_longsor_view',$data);
		$this->load->view('Footer');
	}

	public function simpanlongsor()
	{
		$iddaerah = $this->input->post('iddaerah');
		$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');

			$data = array(
				'id_daerah' => $iddaerah,
				'rawan_longsor' => $nilaiklasifikasi,
				'editby' => $this->session->userdata('id_admin')
				);
			// print_r($data);
		$this->Longsor_model->tambah_longsor($data);
			// $this->db->insert('pegawai',$data);
		redirect('parameter/Longsor/index');
	}

	public function editlongsor($id)
	{
		$data['edit']=$this->Longsor_model->edit_longsor($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('edit_parameter/edit_longsor_view',$data);
		$this->load->view('Footer');
	}

	public function updatelongsor()
	{
	 	$idklasifikasi = $this->input->post('idklasifikasi');
	 	$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');

			$data = array(
				'rawan_longsor' => $nilaiklasifikasi,
				'editby' => $this->session->userdata('id_admin')
			);
		 
			$where = array(
				'id_klasifikasi' => $idklasifikasi
			);
		 	// print_r($data);
			$this->Longsor_model->update_longsor($where,$data,'nilai_klasifikasi');
			redirect('parameter/Longsor/index');
	}

	public function hapuslongsor($id)
	{
		$this->Longsor_model->hapus_longsor($id);
		redirect('parameter/Longsor/index');
	}
}
