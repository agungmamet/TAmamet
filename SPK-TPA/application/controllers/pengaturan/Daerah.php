<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Daerah extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengaturan_model/Daerah_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$data['tampil']=$this->Daerah_model->daerah();
		$data['hitungdata']=$this->Daerah_model->hitungdata();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('daerahtpa_view/daerah_view', $data);
		$this->load->view('Footer');
	}

	public function tambahdaerah()
	{
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('daerahtpa_view/tambah_daerah_view');
		$this->load->view('Footer');
	}

	public function simpandaerah()
	{
		$nama = $this->input->post('namadaerah');

			$data = array(
				'nama_daerah' => $nama,
				'editby' => $this->session->userdata('id_admin')
				);
			// print_r($data);
		$this->Daerah_model->tambah_daerah($data);
			// $this->db->insert('pegawai',$data);
		redirect('pengaturan/Daerah/index');
	}

	public function editdaerah($id)
	{
		$data['edit']=$this->Daerah_model->edit_daerah($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('daerahtpa_view/edit_daerah_view',$data);
		$this->load->view('Footer');
	}

	public function updatedaerah()
	{
	 	$iddaerah = $this->input->post('iddaerah');
	 	$namadaerah = $this->input->post('namadaerah');
		 
			$data = array(
				'nama_daerah' => $namadaerah,
				'editby' => $this->session->userdata('id_admin')
			);
		 
			$where = array(
				'id_daerah' => $iddaerah
			);
		 	// print_r($data);
			$this->Daerah_model->update_daerah($where,$data,'daerah');
			redirect('pengaturan/Daerah/index');
	}

		public function hapusdaerah($id)
	{
		$this->Daerah_model->hapus_daerah($id);
		redirect('pengaturan/Daerah/index');
	}
}