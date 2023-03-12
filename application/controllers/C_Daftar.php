<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Daftar extends CI_Controller {


	public function f_webinar()
	{
		if ($_POST) {
			$this->load->model('M_main','main');
			echo json_encode($this->main->form('webinar'));

			// $this->load->view('Form/Response',$ret,FALSE);
			exit();
		}
		$this->load->view('Form/Webinar', '', FALSE);
	}

	public function r_webinar()
	{
		$ret = array(
			'title' => 'Pendaftaran Webinar Berhasil',
			'acara' => 'Mendaftar Webinar Fixcup Passion to Career',
			'cp1' => '<a href="https://wa.me/6289648953657" class="btn btn-sm btn-success m-2">Naufal +6289648953657</a>',
			'cp2' => '<a href="https://wa.me/6285700027533" class="btn btn-sm btn-success m-2">Sella  +6285700027533</a>',
			'lblinfo' => 'Untuk Pembayaran Bisa Transfer Via </br> 
							- 0853567808 (BNI an Safiella aulia) </br>
							- 6281225059437 (Dana atau Linkaja an Safiella aulia) </br>
						  Setelah Pembayaran Harap Konfirmasi Pembayaran dengan Klik Tombol di Bawah',
			'linkconfirm' => '../Konfirmasi',
			'lblbtn' => 'Konfirmasi Pembayaran',
		);
		$this->load->view('Form/Response',$ret,FALSE);
	}

	public function f_compe($tp = null)
	{
		if ($_POST && $tp!=null) {
			$this->load->model('M_main','main');
			echo json_encode($this->main->form($tp));
			// $this->load->view('Form/Response',$ret,FALSE);
			exit();
		}
		$this->load->view('Form/Competition','', FALSE);
	}

	public function r_compe()
	{
		$ret = array(
			'title' => 'Pendaftaran FIXCUP Berhasil',
			'acara' => 'Mendaftar FIXCUP PUBG Mobile Online Tournament',
			'cp1' => '<a href="https://wa.me/6282170000896" class="btn btn-sm btn-success m-2">Albion +6282170000896</a>',
			'cp2' => '<a href="https://wa.me/6281510943426" class="btn btn-sm btn-success m-2">Alya   +6281510943426</a>',
			'lblinfo' => 'Untuk Pembayaran Bisa Transfer Via </br> 
							- 0853567808 (BNI an Safiella aulia) </br>
							- 6281225059437 (Dana atau Linkaja an Safiella aulia) </br>
						  Setelah Pembayaran Harap Konfirmasi Pembayaran dengan Klik Tombol di Bawah',
			'linkconfirm' => '../Konfirmasi',
			'lblbtn' => 'Konfirmasi Pembayaran',
		);
		$this->load->view('Form/Response',$ret,FALSE);
	}

	public function r_bayar()
	{
		$array = array('6282170000896','6281510943426','6289648953657','6289648953657','6289648953657','6285700027533','6282277832588','6282277832588','6282277832588','6282277832588','6281510943426','6289648953657','6289648953657','6289648953657','6285700027533','6282277832588','6282277832588','6282277832588','6282277832588','6281510943426','6289648953657','6289648953657','6289648953657','6285700027533','6282277832588','6282277832588','6282277832588','6282277832588','6281510943426','6289648953657','6289648953657','6289648953657','6285700027533','6282277832588','6282277832588','6282277832588','6282277832588');
		$ret = array(
			'title' => 'Konfirmasi Pembayaran Berhasil',
			'acara' => 'Melakukan Konfirmasi Pembayaran',
			'cp1' => '<a href="https://wa.me/6285700027533" class="btn btn-sm btn-success m-2">Sella (Webinar)   +6285700027533</a>',
			'cp2' => '<a href="https://wa.me/6281510943426" class="btn btn-sm btn-success m-2">Alya (FIXCUP)   +6281510943426</a>',
			'lblinfo' => 'Untuk Link Grup Whatsapp Bisa Tekan Tombol Dibawah',
			'linkconfirm' => 'https://api.whatsapp.com/send/?phone='.$array[array_rand($array,1)].'&text=Halo%20Kak%20Aku%20Mau%20Join%20Grup%20Whatsapp%20%0ANama%20/%20Nama%20Tim%20:%20%0AEmail%20:&app_absent=0',
			'lblbtn' => 'Grup Whatsapp',
		);
		$this->load->view('Form/Response',$ret,FALSE);
	}

	public function konfirmasi($tp = null)
	{
		if ($_POST && $tp!=null) {
			$this->load->model('M_main','main');
			echo json_encode($this->main->form($tp));
			// $this->load->view('Form/Response',$ret,FALSE);
			exit();
		}
		$this->load->view('Form/Conf_Bayar','', FALSE);
	}

}

/* End of file C_Daftar.php */
/* Location: ./application/controllers/C_Daftar.php */