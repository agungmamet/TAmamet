<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Bobot extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengaturan_model/Bobot_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$data['tampil']=$this->Bobot_model->bobot();
		$data['hitungdata']=$this->Bobot_model->hitungdata();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('bobottpa_view/bobot_view', $data);
		$this->load->view('Footer');
	}

	public function tambahbobot()
	{
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('bobottpa_view/tambah_bobot_view');
		$this->load->view('Footer');
	}

	public function simpanbobot()
	{
		$nama = $this->input->post('namaparameter');
		$nilai = $this->input->post('nilaibobot');

			$data = array(
				'nama_parameter' => $nama,
				'nilai_bobot' => $nilai,
				'editby' => $this->session->userdata('id_admin')
				);
			// print_r($data);
		$this->Bobot_model->tambah_bobot($data);
			// $this->db->insert('pegawai',$data);
		redirect('pengaturan/Bobot/index');
	}

	public function editbobot($id)
	{
		$data['edit']=$this->Bobot_model->edit_bobot($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('bobottpa_view/edit_bobot_view',$data);
		$this->load->view('Footer');
	}

	public function updatebobot()
	{
	 	$idbobot = $this->input->post('idbobot');
	 	$kelerengan = $this->input->post('kelerengan');
	 	$lahan = $this->input->post('lahan');
	 	$longsor = $this->input->post('longsor');
	 	$hujan = $this->input->post('hujan');
	 	$hidrogeologi = $this->input->post('hidrogeologi');
	 	$tanah = $this->input->post('tanah');
	 	$banjir = $this->input->post('banjir');
		 
			$data = array(
				'kelerengan' => $kelerengan,
				'penggunaan_lahan' => $lahan,
				'rawan_longsor' => $longsor,
				'curah_hujan' => $hujan,
				'hidrogeologi' => $hidrogeologi,
				'jenis_tanah' => $tanah,
				'rawan_banjir' => $banjir,
				'editby' => $this->session->userdata('id_admin')
			);
		 
			$where = array(
				'id_bobot' => $idbobot
			);
		 	// print_r($data);
			$this->Bobot_model->update_bobot($where,$data,'bobot');
			redirect('pengaturan/Bobot/index');
	}

		public function hapusbobot($id)
	{
		$this->Bobot_model->hapus_bobot($id);
		redirect('pengaturan/Bobot/index');
	}
}