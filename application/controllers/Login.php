<?php 
class Login extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		
    }
    function index(){	
		$this->load->view('v_login');
    }
    function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email_pengguna' => $email,
			'kata_sandi' => $password
			);

			error_log("a = " . $email);
			error_log("b = " . $password);
		$cek = $this->m_login->cek_login("pengguna",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'email_pengguna' => $email,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			//$this->load->view('v_dashboard');
			redirect('Dashboard');
			echo 
			

		}else{
			echo "Username dan password salah !";
			
		}
	}
    function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}
?>