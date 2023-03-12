<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_user extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function check_login()
	{
		$data = $this->db->get_where('t_user',array('username' => $_POST['username']));
		if($data->num_rows()>0){
			$data = $data->row_array();
			if($data['password']==$_POST['password']){
				$sess = array(
					'id_user' => $data['id'],
					'username' => $data['username'],
					'role' => $data['role'],
				);
				$this->session->set_userdata('User',$sess);
				return array('status'=>'success');
			}
			return array('status'=>'Username Atau Password Salah');
		}else{
			return array('status'=>'Username Tidak Ditemukan');
		}
	}
	public function what_role($role)
	{
		switch ($role) {
			case '1':
				return 'SuperAdmin';
				break;
			case '2':
				return 'Editor';
				break;
			// case '3':
			// 	return 'Viewer';
			// 	break;
		}
	}
	public function case_progdi($i)
	{
		switch ($i) {
	        case 'si':
	           	return 'FIK - Sistem Informasi';
	           	break;
	        case 'ti':
	           	return 'FIK - Teknik Informatika';
	           	break;
	        case 'ilkom':
	           	return 'FIK - Ilmu Komunikasi';
	           	break;
	        case 'dkv':
	           	return 'FIK - Desain Komunikasi Visual';
	           	break;
	        case 'ftv':
	           	return 'FIK - Film dan Televisi';
	           	break;
	        case 'animasi':
	           	return 'FIK - Animasi';
	           	break;
	        case 'dti':
	           	return 'FIK - D3 Teknik Informatika';
	           	break;
	        case 'siar':
	           	return 'FIK - Penyiaran';
	           	break;
		}
	}
	public function get_user_by_id($id)
	{
		return $this->db->get_where('t_user',array('id_user'=>$id))->row_array();
	}
	public function get_dsn_by_user_id($id)
	{
		return $this->db->get_where('t_dosen',array('id_user'=>$id))->row_array();
	}
	public function get_mhs_by_user_id($id)
	{
		return $this->db->get_where('t_mahasiswa',array('id_user'=>$id))->row_array();
	}
	public function get_unapproved()
	{
		$data = $this->db->get_where('t_user',array('approved'=>'0','role'=>'3'))->result_array();
		$dt = '';
		$i = 0;
		foreach ($data as $p) {
			$i++;
			$m = $this->get_mhs_by_user_id($p['id_user']);
			$dt.="<tr>
                    <td>(".$m['nim'].") ".$m['nama']."</td>
                    <td width='100px'>
                    	<a class='btn btn-success btn-sm btn-flat approve' href='C_User/UserAction/Approve/".$p['id_user']."'><i class='fa fa-check'> Setujui</i></a>
                    </td>
                 </tr>";  
		}
		if($i == 0)$dt = '<center>No Data</center>';
		return $dt;
	}
	public function set_approve($id)
	{
		$update = array(
			'approved' => '1',
			'modified_by' => $this->session->userdata('User_pkmku')['id_user'],
			'modified_at' => date("Y-m-d H:i")
		);
		$this->db->where('id_user',$id);
		if($this->db->update('t_user',$update)){
			return array(
				'res' => 'success',
			);
		} else {
			return array(
				'res' => 'Terjadi Kesalahan',
			);
		}
	}
	public function get_user()
	{
		$data = $this->db->get_where('t_user',array('approved'=>'1'))->result_array();
		$dt = '';
		$i=0;
		foreach ($data as $p) {
			if($this->what_role($p['role']) == "Admin"){
				continue;
			}
			$i++;
			$dt.="<tr>
                    <td>".$i."</td>
                    <td>".$p['username']."</td>
                    <td>".$this->what_role($p['role'])."</td>
                    <td>".$p['modified_at']."</td>
                    <td>".$this->get_user_by_id($p['modified_by'])['username']."</td>
                    <td>
                    	<a class='btn btn-danger btn-sm delete' href='C_User/UserAction/Delete/".$p['id_user']."'><i class='fas fa-trash'></i></a>
                    </td>
                 </tr>";  
		}
		return $dt;
	}
	public function Check_Username($username)
	{
		return $this->db->get_where('t_user',array('username'=>$username), 1)->num_rows();	
	}
	public function Check_Nim($nim)
	{
		return $this->db->get_where('t_mahasiswa',array('nim'=>$nim), 1)->num_rows();	
	}
	public function Change_Pass()
	{
		$p = $_POST;
		$id =$this->session->userdata('User_pkmku')['id_user'];
		$dt = $this->get_user_by_id($id);
		if($dt['password'] == md5($p['old_pass'])){
			if($p['new_pass1'] == $p['new_pass2']){
				$this->db->where('id_user',$id);
				$this->db->update('t_user',array('password' => md5($p['new_pass1'])));
				return array(
					'res' => 'success',
				);
			} else {
				return array(
					'res' => "Password Baru Tidak Sama, Harap Ulang kembali"
				);
			}
		} else {
			return array(
					'res' => "Password Lama Salah, Harap Ulang kembali"
				);
		}
	}
	public function Check_Npp($npp)
	{
		return $this->db->get_where('t_dosen',array('npp'=>$npp), 1)->num_rows();	
	}
	public function Delete_User($id)
	{
		if($this->get_user_by_id($id)['role'] == '2'){$this->db->where('id_user', $id)->delete('t_dosen');}
		else if($this->get_user_by_id($id)['role'] == '3'){
			$this->db->where('id_user', $id)->delete('t_pkm');
			$this->db->where('id_user', $id)->delete('t_mahasiswa');
		}
		if($this->db->where('id_user', $id)->delete('t_user')){
			return array(
				'res' => 'success',
			);
		} else {
			return array(
				'res' => 'Terjadi Kesalahan',
			);
		}
	}
	public function Add_User()
	{
		if($this->Check_Username($_POST['username']) == '1'){
			return array(
				'res' => 'Username Sudah Ada'
			);
		} else {
			if($_POST['password'] != $_POST['repassword']){
				return array(
					'res' => 'Password Tidak Sama'
				);
			}
			
			if($_POST['role'] == '2'){
				if($this->Check_Npp($_POST['npp']) == '1'){
					return array(
						'res' => 'NPP Sudah Ada'
					);
				}
				$p = $this->input->post();
				$usr['id_user'] = $dsn['id_user'] = 'dsn' . bin2hex(openssl_random_pseudo_bytes(10));
				$usr['approved'] = '1';
				$dsn['privilege'] = "";
				foreach ($_POST['privilage'] as $p) {
					$dsn['privilege'] .= ','.$p;
				}
				$dsn['privilege'] = substr($dsn['privilege'],1);
				$dsn['npp'] = strtoupper(trim($_POST['npp']));
				$dsn['nama'] = $_POST['nama'];
				$this->db->insert('t_dosen',$dsn);
			} elseif ($_POST['role'] == '3') {
				if($this->Check_Nim($_POST['nim']) == '1'){
					return array(
						'res' => 'NIM Sudah Ada'
					);
				}
				if($_POST['progdi'] == 'select'){
					return array(
						'res' => 'Pilih Program Studi'
					);
				}
				$p = $this->input->post();
				$usr['id_user'] = $mhs['id_user'] = 'mhs' . bin2hex(openssl_random_pseudo_bytes(10));
				$usr['approved'] = '0';
				$mhs['nim'] = strtoupper(trim($_POST['nim']));
				$mhs['nama'] = $_POST['nama'];
				$mhs['progdi'] = $_POST['progdi'];
				$mhs['no_wa'] = "62".$_POST['no_wa'];
				// $mhs['ktm_dir'] = $_POST['']
				// print_r($_FILES['ktm']);
				$imgs = $_FILES['ktm'];
		        $namaFile = $imgs['name'];
		        $namaSementara = $imgs['tmp_name'];
		        $ext = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
		        if($ext != "png" && $ext != "jpg" && $ext != "jpeg"){
		        	return array(
						'res' => 'Ekstensi File KTM Salah, Gunakan File (PNG,JPG,JPEG)'
					);
		        }
		        $namaFile = $mhs['nim'].".".$ext;
		        $dir = './assets/ktm/';
		        $mhs['ktm_dir'] = $namaFile;
		        if(file_exists($dir.$namaFile)) unlink($dir.$namaFile);
		        move_uploaded_file($namaSementara, $dir.$namaFile);
				$this->db->insert('t_mahasiswa',$mhs);
			}
			$usr['username'] = trim($_POST['username']);
			$usr['password'] = md5($_POST['password']);
			$usr['role'] = $_POST['role'];
			$usr['modified_at'] = date("Y-m-d H:i");
			if(isset($this->session->userdata('User_pkmku')['id_user'])){
				$usr['modified_by'] = $this->session->userdata('User_pkmku')['id_user'];
			} else {
				$usr['modified_by'] = 'adm102001';
			}
			if($this->db->insert('t_user',$usr)){
				return array(
					'res' => 'success',
				);
			} else {
				return array(
					'res' => 'Terjadi Kesalahan',
				);
			}
		}
	}
}
/* End of file m_user.php */
/* Location: ./application/models/m_user.php */