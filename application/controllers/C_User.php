<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user','tuser');
	}
	public function index()
	{
		$this->load->view('errors/html/error_404');
	}
	public function Login()
	{
		if(!is_null($this->session->userdata('User'))){
			redirect('Home','refresh');
		}
		$this->load->view('login');
	}
	public function Register()
	{
		if(!is_null($this->session->userdata('User'))){
			redirect('Home','refresh');
		}
		$this->load->view('register');
	}
	public function Login_ajax()
	{
		if ($this->input->is_ajax_request()) {
			echo json_encode($this->tuser->check_login());
		} 
	}
	public function logout_user()
	{
		$this->session->sess_destroy();
		redirect('Home','refresh');
	}
	public function UserAction($type, $id = null)
	{
		if (!$this->input->is_ajax_request())exit();

		if($type == 'Delete'){
			if($this->session->userdata('User_pkmku')['role']!='1')exit();
			echo json_encode($this->tuser->Delete_User($id));
		}
		elseif ($type == 'AddUser') {
			echo json_encode($this->tuser->Add_User());
		}elseif ($type == 'Check_Username') {
			if($this->session->userdata('User_pkmku')['role']!='1')exit();
			echo $this->tuser->Check_Username($id);
		}elseif ($type == 'Check_Nim') {
			if($this->session->userdata('User_pkmku')['role']!='1')exit();
			echo $this->tuser->Check_Nim($id);
		}elseif ($type == 'Check_Npp') {
			if($this->session->userdata('User_pkmku')['role']!='1')exit();
			echo $this->tuser->Check_Npp($id);
		}elseif ($type == 'Approve') {
			if($this->session->userdata('User_pkmku')['role']!='1')exit();
			echo json_encode($this->tuser->set_approve($id));
		}
	}
	public function Change_Pass()
	{
		if (!$this->input->is_ajax_request())exit();
		echo json_encode($this->tuser->Change_Pass());
	}
}
/* End of file C_User.php */
/* Location: ./application/controllers/C_User.php */