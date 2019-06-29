<?php 
 
class Login extends CI_Controller{
 
	function __construct()
  {
		parent::__construct();	
		$this->load->model('Login_model');
    $this->load->model('pengaturan_model/Admin_model');
	}
 
	function index()
  {
		$this->load->view('login_view');
	}
 
	function proseslogin()
  {
		  $this->form_validation->set_rules('username', 'username', 'required|trim|xss_clean');
   		$this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
    	if ($this->form_validation->run() == FALSE) 
      {
      		$this->load->view('login_view');
    	} 
      else 
      {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

  			$cek = $this->Login_model->cek_login($username,$password);
  			if ($cek == true) 
        {  
  	 			foreach ($cek as $row)
          {
  					$data_session = array(
              'id_admin' => $row->id_admin,
  						'nama_admin' => $row->nama_admin,
  						'username' => $username,
  						'status' => "login",
  						'hak_akses' => $row->hak_akses,
              
            );

  					$this->session->set_userdata($data_session); 
            redirect('Peta_kontrol/index');
  	 			}

        } 
        else 
        {
          $this->load->view('login_view');
  		  }
	    }
  }

	function logoutsess()
  {
		$this->session->sess_destroy();
		redirect('Login');
	}
}