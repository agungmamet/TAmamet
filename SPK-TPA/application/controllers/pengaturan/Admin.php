<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Admin extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pengaturan_model/Admin_model');
		if (!$this->session->userdata('status')=='login') 
		{
			redirect('Login');
		}
	}

	public function index()
	{
		$data['tampil']=$this->Admin_model->admin();
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('administrator_view/admin_view', $data);
		$this->load->view('Footer');
	}

	public function detail($id)
	{
		$data['detail']=$this->Admin_model->edit_admin($id);
		$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('administrator_view/detail_admin', $data);
		$this->load->view('Footer');
	}

	public function tambahadmin()
	{
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('administrator_view/tambah_admin_view');
		$this->load->view('Footer');
	}


	public function register()
	{ 
		$data = new stdClass(); // set validation rules 
		$this->form_validation->set_rules('namaadmin', 'namaadmin', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('username', 'username', 'trim|required|min_length[3]|is_unique[administrator.username]',
		array('is_unique' => $this->session->set_flashdata('result_username', '
  		    		username tersebut sudah ada.'))); 
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[5]'); 
		$this->form_validation->set_rules('conf_pass', 'Confirm Password', 'trim|required|min_length[5]|matches[password]' , 
		array('matches' => $this->session->set_flashdata('result_password', '
  		    		Konfirm password tidak sesuai.')));
			if ($this->form_validation->run() == false) 
			{ 
				$this->load->view('Topnav');
				$this->load->view('Sidebar');
				$this->load->view('administrator_view/tambah_admin_view',$data);
				$this->load->view('Footer'); 
			} 
	 		else 
	 		{ 
	 			$nama = $this->input->post('namaadmin');
	 			$alamat = $this->input->post('alamat');
	 			$ttl = $this->input->post('ttl');
	 			$jeniskelamin = $this->input->post('jeniskelamin');
	 			$email = $this->input->post('email');
	 			$telp = $this->input->post('telp');
	 			$instansi = $this->input->post('instansi');
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$hakakses = $this->input->post('hakakses'); 

	 			if ($this->Admin_model->create_user($nama, $alamat, $ttl, $jeniskelamin
	 			, $email, $telp, $instansi, $username, $password, $hakakses)) 
	 			{ 
	 				redirect('pengaturan/Admin/index'); 
	 			} 
	 			else 
	 			{ 
	 				redirect('pengaturan/Admin/tambahadmin'); 
	 			} 
	 		} 
	}

	public function editadmin($id)
	{
		$data['edit']=$this->Admin_model->edit_admin($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('administrator_view/edit_admin_view',$data);
		$this->load->view('Footer');
	}

	public function updateadmin()
	{
	 			$idadmin = $this->input->post('idadmin');
	 			$namaadmin = $this->input->post('namaadmin');
	 			$alamat = $this->input->post('alamat');
	 			$ttl = $this->input->post('ttl');
	 			$jeniskelamin = $this->input->post('jeniskelamin');
	 			$email = $this->input->post('email');
	 			$telp = $this->input->post('telp');
	 			$instansi = $this->input->post('instansi');
				$username = $this->input->post('username');
				$hakakses = $this->input->post('hakakses');
		 
					$data = array(
						'nama_admin' => $namaadmin,
						'alamat' => $alamat,
            			'ttl' => $ttl,
            			'jeniskelamin' => $jeniskelamin,
            			'email' => $email,
            			'telp' => $telp,
            			'instansi' => $instansi,
						'username' => $username,
						'hak_akses'=> $hakakses
					);
		 
					$where = array(
						'id_admin' => $idadmin
					);
		 	
					$this->Admin_model->update_admin($where,$data,'administrator');
					redirect('pengaturan/Admin/index');
			
	}

	public function resetpass($id)
	{
		$data['edit']=$this->Admin_model->edit_admin($id);
	 	$this->load->view('Topnav');
		$this->load->view('Sidebar');
		$this->load->view('administrator_view/reset_pass',$data);
		$this->load->view('Footer');
	}

	public function updatepass()
	{
				$idadmin = $this->input->post('idadmin');
				$password = $this->input->post('passwordbaru');
		 
					$data = array(
						'password' => $this->Admin_model->hash($password),
					);
		 
					$where = array(
						'id_admin' => $idadmin
					);
		 	
					$this->Admin_model->update_pass($where,$data,'administrator');
					redirect('pengaturan/Admin/index');
			
	}


	public function hapusadmin($id)
	{
		$this->Admin_model->hapus_admin($id);
		redirect('pengaturan/Admin/index');
	}
}