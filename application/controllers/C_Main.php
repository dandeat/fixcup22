<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Main extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user','usr');
        $this->load->model('M_main','main');

        $data = array(
			'title' => null,
			'breadcrumb' => null,
			'active' => null,
			'is_open' => false,
			'subactive' => null,
			'content' => null,
		);

		if(is_null($this->session->userdata('User'))){
			redirect('Login','refresh');
		}
    }

    public function index()
    {
    	$this->load->view('errors/html/error_404');
    }
    

    public function Home()
    {
        $data = array(
            'title' => 'Dashboard',
            'breadcrumb' => '<li class="breadcrumb-item active">Dashboard</li>',
            'active' => 'menu_dashboard',
            'is_open' => false,
        );
        $datacon = $this->main->Get_Dash();
        $data['content'] = $this->load->view('dash',$datacon, TRUE);
        $this->load->view('home',$data);
    }

    public function d_webinar()
    {
        $data = array(
            'title' => 'Data Webinar',
            'breadcrumb' => '<li class="breadcrumb-item active">Data Webinar</li>',
            'active' => 'menu_data',
            'is_open' => true,
            'subactive' => 'menuWebinar'
        );
        $datacon['dt'] = $this->main->get_data('webinar');
        // print_r($datacon);
        $data['content'] = $this->load->view('webinar',$datacon, TRUE);
        $this->load->view('home',$data);
        // $this->load->view('', $data, FALSE);   
        // echo 'User IP - '.$_SERVER['REMOTE_ADDR'];   
    }

    public function d_compe()
    {
        $data = array(
            'title' => 'Data Competition',
            'breadcrumb' => '<li class="breadcrumb-item active">Data Competition</li>',
            'active' => 'menu_data',
            'is_open' => true,
            'subactive' => 'menuCompe'
        );
        $datacon['dt'] = $this->main->get_data('compe');
        // print_r($datacon);
        $data['content'] = $this->load->view('compe',$datacon, TRUE);
        $this->load->view('home',$data);
        // $this->load->view('', $data, FALSE);   
        // echo 'User IP - '.$_SERVER['REMOTE_ADDR'];   
    }

    public function d_conf()
    {
        if (isset($_POST['id'])) {
            $this->load->model('M_main','main');
            echo json_encode($this->main->form('acc_bayar'));

            // $this->load->view('Form/Response',$ret,FALSE);
            exit();
        }
        $data = array(
            'title' => 'Data Konfirmasi Pembayaran',
            'breadcrumb' => '<li class="breadcrumb-item active">Data Konfirmasi Pembayaran</li>',
            'active' => 'menu_conf',
            'is_open' => false,
            // 'subactive' => 'menuCompe'
        );
        $datacon['dt'] = $this->main->get_data('conf');
        // print_r($datacon);
        $data['content'] = $this->load->view('conf',$datacon, TRUE);
        $this->load->view('home',$data);
        // $this->load->view('', $data, FALSE);   
        // echo 'User IP - '.$_SERVER['REMOTE_ADDR'];   
    }

    public function Logout()
    {
        session_destroy();
        redirect('Home','refresh');
    }

}

/* End of file Controllername.php */
