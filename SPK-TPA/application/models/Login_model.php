<?php 
 
class Login_model extends CI_Model{

	function cek($username,$password)
	{
		$password = $password;
		return $this->db->query("Select * from administrator where username='$username' and password='$password'");
	}

	function cek_login($username,$password)
	{ 
		$this->db->where('username', $username); 
		$query = $this->db->get('administrator'); 
			
			if ($query->num_rows() == 1) 
			{ 
				$hash = $query->row('password'); 
					if (password_verify($password,$hash))
					{  
  	        		return $query->result();
					} 
					else 
					{ 
					$this->session->set_flashdata('result_login', '
  		    		Username atau Password yang anda masukkan salah.');
          			redirect('Login');
					} 
			} 
			else 
			{ 
				$this->session->set_flashdata('result_login', '
  		    	Username atau Password yang anda masukkan belum terdaftar');
          		redirect('Login'); 
			} 
	} 

  	
}
