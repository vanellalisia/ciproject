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
			'kata_sandi' => $password,
			//'id_jabatan'=>$jabatan
			);

			
		$cek = $this->m_login->cek_login("pengguna",$where)->num_rows();

		if($cek > 0){
			$jabatan['ini'] = $this->m_login->cek_pengguna("pengguna", $email, $password)->result_array(); //masuki ke dlm array makanya ga perlu pk foreach
			$data_session = array(
				'email_pengguna' => $email,
				'kata_sandi' =>$password,
				'login' => TRUE

				
				);
			$this->session->set_userdata($data_session);
			//echo $jabatan['ini'][0]['id_jabatan'];
			
			if($jabatan['ini'][0]['id_jabatan']=="PT"){
				redirect('Dashboard');
			}
			else if ($jabatan['ini'][0]['id_jabatan']=="PL"){
				redirect('Dashboard/dashboard_pelanggan');
			
			}
			else {
				echo "Username dan password salah !";
			}	
		}
		else{
			echo "Username dan password salah !";
			
		}
	}
    function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
}
?>