<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_main extends CI_Model {

	public function Get_Dash()
	{
		$dt['webinar'] = $this->db->query('SELECT count(*) FROM t_webinar ORDER BY created_at desc')->row_array()['count(*)'];
		$dt['fixcup'] = $this->db->query('SELECT count(*) FROM t_team WHERE status > 1 ORDER BY created_at desc')->row_array()['count(*)'];
		$dt['konfirmasi'] = $this->db->query('SELECT count(*) FROM t_pembayaran WHERE status < 1 ORDER BY created_at desc')->row_array()['count(*)'];
		return $dt;
	}

	public function Get_Data($tipe)
	{
		if ($tipe == 'webinar') {
			$raw = $this->db->query('SELECT * FROM t_webinar ORDER BY created_at desc')->result_array();
			$ret = "";
			$no=0;
			foreach ($raw as $a) {
				$stat = $this->form('cek_pembayaran',array('email'=>$a['email'],'slct'=>'webinar'));
				$dir = "assets/ktp_webinar/";
				if ($a['is_fixcup'] == 1) {
					$dir = "assets/ktp_compe/";
				}
				// $arr = array(
				// 	'nama' => $a['nama'],
				// 	'email' => $a['email'],
				// 	'no_wa' => $a['no_wa'],
				// 	'status_pembayaran' => $stat['res'],
				// 	'dir_ktp' => $a['dir_ktp'],
				// );
				// array_push($ret, $arr);
				$ret .= "
				<tr>
					<td>".++$no."</td>
	 	  			<td>".$a['nama']."</td>
	 	  			<td>".$a['email']."</td>
	 	  			<td>".$a['no_wa']."</td>
	 	  			<td><span class='badge bg-success'>".$stat['res']."</span></td>
	 	  			<td><a class='btn btn-success btn-sm' href='https://wa.me/".$a['no_wa']."'><i class='fab fa-whatsapp'></i></a>&nbsp
	 	  			<a class='btn btn-info btn-sm ktp' data-src='".$dir.$a['dir_ktp']."' href='#'><i class='fas fa-id-card'></i></a></td>
				</tr>
				";
			}
			return $ret;
		} elseif ($tipe == 'compe') {
			$raw = $this->db->query('SELECT * FROM t_team WHERE status > 1 ORDER BY modified_at desc')->result_array();
			$ret = "";
			$no=0;
			foreach ($raw as $a) {
				$stat = $this->form('cek_pembayaran',array('email'=>$a['email'],'slct'=>'compe'));
				$ret .= "
				<tr>
					<td>".++$no."</td>
	 	  							<td>".$a['nama_tim']."</td>
	 	  							<td>".$a['email']."</td>
	 	  							<td>".$a['nomor_contact_wa']."</td>
	 	  							<td><span class='badge bg-success'>".$stat['res']."</span></td>
	 	  							<td><a class='btn btn-success btn-sm' href='https://wa.me/".$a['nomor_contact_wa']."'><i class='fab fa-whatsapp'></i></a></td>
				</tr>
				";
			}
			return $ret;
		} elseif ($tipe == 'conf') {
			$raw = $this->db->query('SELECT * FROM t_pembayaran ORDER BY modified_at desc')->result_array();
			$ret = "";
			$no=0;
			foreach ($raw as $a) {
				if($a['pembayaran'] == 'webinar'){
					$stat = $this->db->query('SELECT nama as "nama", no_wa FROM t_webinar WHERE email = "'.$a["email"].'"')->row_array();
				} else {
					$stat = $this->db->query('SELECT nama_tim as "nama", nomor_contact_wa as "no_wa" FROM t_team WHERE email = "'.$a["email"].'"')->row_array();
				}
				$dis = "";
				if ($a['status']>0) {
					$dis = "disabled";
				}
				$ret .= "
				<tr>
					<td>".++$no."</td>
									<td>".strtoupper($a['pembayaran'])."</td>
	 	  							<td>".$stat['nama']."</td>
	 	  							<td>".$a['email']."</td>
	 	  							<td>".$a['kewajiban']."</td>
	 	  							<td>".$a['payment']."</td>
	 	  							<td><span class='badge bg-success'>".($a['status']>0?'Terkonfirmasi':'Belum Acc')."</span></td>
	 	  							<td><a class='btn btn-warning btn-sm' href='https://wa.me/".$stat['no_wa']."'><i class='fab fa-whatsapp'></i></a>&nbsp<a class='btn btn-success btn-sm acc ".$dis."' href='#' dt-id='".$a['id']."' ><i class='fa fa-check'></i></a>&nbsp<a class='btn btn-info btn-sm ktp' data-src='".$a['dir_pembayaran']."' href='#'><i class='fas fa-receipt'></i></a></td>
				</tr>
				";
			}
			return $ret;
		}
	}

	// function sts_byr($t){
	// 	switch ($t) {
	// 		case 0:
	// 			return "";
	// 			break;
			
	// 		default:
	// 			# code...
	// 			break;
	// 	}
	// }

	public function Form($type, $arr_par=array())
	{
		if ($type == "webinar") {
			$f = $this->input->post();
			$f['is_fixcup'] = "0";
			$f['no_wa'] = "62".$f['no_wa'];
			$f['created_at'] = date('Y-m-d H:i:s');
			$f['modified_at'] = date('Y-m-d H:i:s');	
			if ($this->db->get_where('t_webinar',array('email'=>$f['email']))->num_rows()>0) {
				return array(
					'res' => 'Email Sudah Terdaftar Harap Hubungi Panitia bersangkutan',
				);
			}
			$imgs = $_FILES['ktp'];
		        $namaFile = $imgs['name'];
		        $namaSementara = $imgs['tmp_name'];
		        $ext = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
		        if($ext != "png" && $ext != "jpg" && $ext != "jpeg"){
		        	return array(
						'res' => 'Ekstensi File KTP / KTM / Kartu Pelajar Salah, Gunakan File PNG atau JPG'
					);
		        }
		        $namaFile = "ktp_".rand(11111,99999).date('YmdHis').".".$ext;
		        $dir = './assets/ktp_webinar/';
		        $f['dir_ktp'] = $namaFile;
		        if(file_exists($dir.$namaFile)) unlink($dir.$namaFile);
		        move_uploaded_file($namaSementara, $dir.$namaFile);
			if($this->db->insert('t_webinar',$f)){
				return array(
					'res' => 'success',
				);
			} else {
				return array(
					'res' => 'Terjadi Kesalahan',
				);
			}
		}
		elseif ($type == "compe_team") {
			$f = $this->input->post();
			$in = array(
				'id' => rand('1111111111','9999999999'),
				'email' => $f['email'],
				'nama_tim' => $f['nama_tim'],
				'domisili' => $f['domisili'],
				'nomor_contact_wa' => "62".$f['nomor_contact_wa'],
				'status' => "0",
			);
			$in['created_at'] = date('Y-m-d H:i:s');
			$in['modified_at'] = date('Y-m-d H:i:s');
			$chck = $this->db->query('SELECT * FROM t_team WHERE nama_tim = "'.$in['nama_tim'].'" OR email = "'.$in['email'].'" OR nomor_contact_wa = "'.$in['nomor_contact_wa'].'"');
			if ($chck->num_rows()>0) {
				return array(
					'res' => 'Mohon Maaf Nama Tim, Email, Atau Nomor Wa sudah Terdaftar. Harap Hubungi Panitia Terkait',
				);
			}
			// $imgs = $_FILES['ktp'];
		 //        $namaFile = $imgs['name'];
		 //        $namaSementara = $imgs['tmp_name'];
		 //        $ext = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
		 //        if($ext != "png" && $ext != "jpg"){
		 //        	return array(
			// 			'res' => 'Ekstensi File KTP / KTM / Kartu Pelajar Salah, Gunakan File PNG atau JPG'
			// 		);
		 //        }
		 //        $namaFile = "ktp_webinar_".date('Y-m-d H:i:s:s').".".$ext;
		 //        $dir = './assets/ktp_webinar/';
		 //        $f['dir_ktp'] = $namaFile;
		 //        if(file_exists($dir.$namaFile)) unlink($dir.$namaFile);
		 //        move_uploaded_file($namaSementara, $dir.$namaFile);
			if($this->db->insert('t_team',$in)){
				// print_r($this->db->get_where('t_team',array('email'=>$in["email"]))->result_array());
				return array(
					'res' => 'success',
					'id' => $this->db->get_where('t_team',array('email'=>$in["email"]))->result_array()[0]['id'],
				);
			} else {
				return array(
					'res' => 'Terjadi Kesalahan',
				);
			}
		} 
		elseif ($type == "compe_ketua" || $type == "compe_agt1" || $type == "compe_agt2" || $type == "compe_agt3" || $type == "compe_agt4"){
			$f = $this->input->post();
			$in = array(
				'id_team' => $f['id_team'],
				'nama_lengkap' => $f['nama_lengkap'],
				'nickname' => $f['nickname'],
				'id_pubg' => $f['id_pubg'],
				'role' => explode("_",$type)[1],
				'no_wa' => "62".$f['no_wa'],
				'email' => $f['email']
			);
			$in['created_at'] = date('Y-m-d H:i:s');
			$in['modified_at'] = date('Y-m-d H:i:s');
			// print_r($in);
			// print_r($this->db->get_where('t_anggota',array('id_team'=>$f['id_team'],'role'=>explode("_",$type)[1])));
			if($this->db->get_where('t_anggota',array('id_team'=>$f['id_team'],'role'=>explode("_",$type)[1]))->num_rows()>0){
				return array(
					'res' => 'Data Sudah Tersimpan Harap Refresh Halaman',
				);
			}
			$imgs = $_FILES['ktp'];
		        $namaFile = $imgs['name'];
		        $namaSementara = $imgs['tmp_name'];
		        $ext = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
		        if($ext != "png" && $ext != "jpg"  && $ext != "jpeg"){
		        	return array(
						'res' => 'Ekstensi File KTP / KTM / Kartu Pelajar Salah, Gunakan File PNG atau JPG '
					);
		        }
		        $namaFile = "ktp_".rand(11111,99999).date('YmdHis').".".$ext;
		        $dir = './assets/ktp_compe/';
		        $in['dir_ktp'] = $namaFile;
		        if(file_exists($dir.$namaFile)) unlink($dir.$namaFile);
		        move_uploaded_file($namaSementara, $dir.$namaFile);
			if($this->db->insert('t_anggota',$in)){
				// print_r($this->db->get_where('t_team',array('email'=>$in["email"]))->result_array());
				$this->db->where(array('id'=>$in['id_team']))->update('t_team', array('status'=>'1'));
				return array(
					'res' => 'success',
				);
			} else {
				return array(
					'res' => 'Terjadi Kesalahan',
				);
			}
		}
		elseif ($type == "get_by_id" ) {
			$dt = $this->db->get_where('t_team',array('id'=>$this->input->post('id_team')));
			// print_r($dt);
			// print_r($this->input->post());
			if($dt->num_rows()>0 )
			{
				$ret = $dt->row_array();
				if($ret['status']>1){
					return array(
						'res' => 'nope',
					);
				}
				$ret['res'] = "success";
				return $ret;
			} else {
				return array(
					'res' => 'nope2',
				);
			}
		}
		elseif ($type == "get_agt_by_id") {
			$dt = $this->db->query("SELECT * FROM t_anggota WHERE id_team = ".$this->input->post('id_team')." ORDER BY role ASC");
			if($dt->num_rows()>0){
				// $newarr = array();
				// foreach ($dt->result_array() as $a) {
				// 	$newarr[$a['role']] = $a;
				// }
				$ret['res'] = "success";
				$ret['data'] = $dt->result_array();
				return $ret;
			} else {
				return array(
					'res' => 'nope',
				);
			}
		}
		elseif ($type=="cek_selesai") {
			$err = null;
			$team = $this->db->get_where('t_team',array('id'=>$_POST['id_team']))->row_array();
			$chck_agt = $this->db->get_where('t_anggota',array('id_team'=>$_POST['id_team']));
			if($chck_agt->num_rows()>3){
				$i = 0;
				foreach ($chck_agt->result_array() as $a) {
					if ($chck_agt->num_rows()==4 && $a['role'] == 'agt4') {
						return array(
							'res' => 'Data Anggota Masih Belum Lengkap, Harap Di Cek Kembali ',
						);
					}
					$dt[$i] = array(
						'nama' => $a['nama_lengkap'],
						'email' => $a['email'],
						'no_wa' => $a['no_wa'],
						'domisili' => $team['domisili'],
						'dir_ktp' => $a['dir_ktp'],
						'is_fixcup' => '1',
					);
					$dt[$i]['created_at'] = date('Y-m-d H:i:s');
					$dt[$i]['modified_at'] = date('Y-m-d H:i:s');
					$i++;
				}
				foreach ($dt as $b) {
					if($this->db->get_where('t_webinar',array('email' => $b['email']))->num_rows()>0){
						$b['email'] = "duplicate_".$b['email'];
					}
					$this->db->insert('t_webinar',$b);
				}
				$this->db->where(array('id'=>$_POST['id_team']))->update('t_team', array('status'=>'2'));
				return array(
					'res' => 'success',
				);
			}else{
				return array(
					'res' => 'Data Anggota Masih Belum Lengkap, Harap Di Cek Kembali ',
				);
			}
		} elseif ($type == "cek_pembayaran") {
			if(empty($arr_par)){
				$p = $this->input->post();
			} else {
				$p = $arr_par;
			}
			
			$tagihan = $terbayar = 0;

			// $web = $this->db->query("SELECT * FROM t_webinar");
			if($p['slct'] == "webinar"){
				$data = $this->db->query("SELECT nama, email from t_webinar where email = '".$p['email']."'");
				if ($data->num_rows()>0) {
					$byr = $this->db->query("SELECT status, kewajiban, payment from t_pembayaran where email = '".$p['email']."' AND pembayaran='".$p['slct']."'");
					if($byr->num_rows()>0){
						$byr = $byr->result_array();
						$tagihan = 10000;
						foreach ($byr as $a) {
							if ($a['status']>0) {
								$tagihan -= (int) $payment;
								$terbayar += (int) $payment;
							} else {
								$conf_undergo = true;
							}
						}
						if ($conf_undergo) {
							$dt['stat'] = 500;
							$dt['res'] = "Menunggu Konfirmasi";
							$dt['tagihan'] = $tagihan;
							$dt['terbayar'] = $terbayar;
						}
						if($tagihan <= 0){
							$dt = $data->row_array();
							$dt['stat'] = 2;
							$dt['res'] = "Lunas";
							return $dt;	
						} else {
							$dt = $data->row_array();
							$dt['stat'] = 1;
							$dt['res'] = "Belum Lunas";
							$dt['tagihan'] = $tagihan;
							$dt['terbayar'] = $terbayar;
							return $dt;				
						}						
					}
					$dt = $data->row_array();
					$dt['stat'] = 0;
					$dt['res'] = "Belum Terbayar";
					$dt['tagihan'] = 10000;
					$dt['terbayar'] = 0;
					return $dt;			
				}
			} elseif($p['slct'] == "compe"){
				$dt = $this->db->query("SELECT nama_tim as 'nama', email from t_team where email = '".$p['email']."'");
				if ($dt->num_rows()>0) {
					$byr = $this->db->query("SELECT status, kewajiban, payment from t_pembayaran where email = '".$p['email']."' AND pembayaran='".$p['slct']."'");
					if($byr->num_rows()>0){
						$byr = $byr->result_array();
						$tagihan = 100000;
						foreach ($byr as $a) {
							if ($a['status']>0) {
								$tagihan -= $payment;
								$terbayar += (int) $payment;
							} else {
								return array(
									'stat'=>'500',
								);
							}
						}
						if($tagihan <= 0){
							$dt = $dt->row_array();
							$dt['stat'] = 2;
							$dt['res'] = "Lunas";
							return $dt;	
						} else {
							$dt = $dt->row_array();
							$dt['stat'] = 1;
							$dt['res'] = "Belum Lunas";
							$dt['tagihan'] = $tagihan;
							$dt['terbayar'] = $terbayar;
							return $dt;				
						}						
					}
					$dt = $dt->row_array();
					$dt['stat'] = 0;
					$dt['res'] = "Belum Terbayar";
					$dt['tagihan'] = 100000;
					$dt['terbayar'] = 0;
					return $dt;			
				}
			} 
			return array(
				'stat' => '404'
			);
		} elseif ($type == "bayar") {
			$p = $this->input->post();
			// print_r($p);
			if ($p['bayar'] > $p['tagihan']) {
				return array(
					'res' => 'Jumlah Pembayaran Melebihi Tagihan, Jika Ada Kendala Harap Hubungi Panitia Terkait',
				);
			}
			$in = array(
				'pembayaran' => $p['slct'],
				'email' => $p['email'],
				'status' => '0',
				'kewajiban' => $p['tagihan'],
				'payment' => $p['bayar'],
				'modified_by' => '102001',
				'created_at' => date('Y-m-d H:i:s'),
				'modified_at' => date('Y-m-d H:i:s'),
			);
			$byr = $this->db->query('SELECT * FROM t_pembayaran WHERE pembayaran="'.$p["slct"].'" AND email = "'.$p["email"].'"');
					if($byr->num_rows()>0){
						$byr = $byr->result_array();
						$tagihan = ($p['slct']=='webinar'?10000:100000);
						foreach ($byr as $a) {
							if ($a['status']>0) {
								$tagihan -= (int) $a['payment'];
							} else {
								return array(
									'res'=>'Anda Memiliki Konfirmasi Pembayaran yang Sedang Di Proses Harap Tunggu',
								);
							}
						}
						if($tagihan <= 0){
							$dt['res'] = "Tagihan Anda Sudah Terbayar Full, Konfirmasi Pembayaran dibatalkan";
							return $dt;	
						} else {
							$tagihan -= (int) $p['bayar'];		
							if($tagihan <= 0){
								$dt['res'] = "Jumlah Pembayaran Melebihi Tagihan, Jika Ada Kendala Harap Hubungi Panitia Terkait";
								return $dt;
							} 
						}						
					} 

			        $config['upload_path']          = './assets/file_struk/';
	                $config['allowed_types']        = 'jpeg|jpg|png';
	                $config['encrypt_name']			= TRUE;

	                $this->load->library('upload', $config);
	                $ext = strtolower(pathinfo($_FILES['struk']['name'], PATHINFO_EXTENSION));
			        if($ext != "png" && $ext != "jpg"  && $ext != "jpeg"){
			        	return array(
							'res' => 'Ekstensi File Bukti Pembayaran Salah, Gunakan File PNG atau JPG '
						);
			        }
	                $this->upload->do_upload('file');
	                $in['dir_pembayaran'] = $this->upload->data('file_name');
					if ($this->db->insert('t_pembayaran',$in)) {
						$dt['res'] = "success";
						$dt['info'] = "Konfirmasi Pembayaran Berhasil, Harap Tunggu Proses Verifikasi. Anda Bisa Mengecek Kembali Pembayaran Anda di Link yang Sama";
					} else {
						$dt['res'] = "Terjadi Kesalahan, Harap Hubungi Panitia Terkait";
					}
					return $dt;
		} elseif ($type == "acc_bayar") {
			$id = $_POST['id'];
			$this->db->where('id',$id);
			$this->db->update('t_pembayaran',array('status'=>'1'));
			return array('res' => 'success', );
		}
	}

}

/* End of file M_main.php */
/* Location: ./application/models/M_main.php */