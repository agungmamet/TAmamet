<?php
defined('BASEPATH') or exit('no direct access script allowed');

class Jenistanah extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('parameter_model/Jenistanah_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$data['tampil']=$this->Jenistanah_model->jointanah();
		$data['bobot']=$this->Jenistanah_model->bobot();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('parameter_view/jenistanah_view',$data);
		$this->load->view('Footer');
	}

	public function tambahjenistanah()
	{
		$data['daerah']=$this->Jenistanah_model->tampilkecamatan();
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('tambah_parameter/tambah_jenistanah_view',$data);
		$this->load->view('Footer');
	}

	public function simpanjenistanah()
	{
		$iddaerah = $this->input->post('iddaerah');
		$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');

			$data = array(
				'id_daerah' => $iddaerah,
				'jenis_tanah' => $nilaiklasifikasi,
				'editby' => $this->session->userdata('id_admin')
				);
			// print_r($data);
		$this->Jenistanah_model->tambah_jenistanah($data);
			// $this->db->insert('pegawai',$data);
		redirect('parameter/Jenistanah/index');
	}

	public function editjenistanah($id)
	{
		$data['edit']=$this->Jenistanah_model->edit_jenistanah($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('edit_parameter/edit_jenistanah_view',$data);
		$this->load->view('Footer');
	}

	public function updatejenistanah()
	{
	 	$idklasifikasi = $this->input->post('idklasifikasi');
	 	$nilaiklasifikasi = $this->input->post('nilaiklasifikasi');
		 
			$data = array(
				'jenis_tanah' => $nilaiklasifikasi,
				'editby' => $this->session->userdata('id_admin')
			);
		 
			$where = array(
				'id_klasifikasi' => $idklasifikasi
			);
		 	// print_r($data);
			$this->Jenistanah_model->update_jenistanah($where,$data,'nilai_klasifikasi');
			redirect('parameter/Jenistanah/index');
	}

	public function hapusjenistanah($id)
	{
		$this->Jenistanah_model->hapus_jenistanah($id);
		redirect('parameter/Jenistanah/index');
	}
}