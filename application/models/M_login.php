<?php 
 
class M_login extends CI_Model
{	

	public function rules()
    {
        return [

            [
                'field' => 'username',
                'label' => 'User Name',
                'rules' => 'trim|required|valid_email|is_unique[ortu.username]'
            ],
            
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required'
			],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[3]|matches[password2]'
			],

            [
                'field' => 'password2',
                'label' => 'Password',
                'rules' => 'trim|required|matches[password]'
			],
			[
                'field' => 'nama_ortu',
                'label' => 'Nama Ortu',
                'rules' => 'trim|required|is_unique[ortu.nama_ortu]'
            ],
            [
                'field' => 'username',
                'label' => 'Email',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'pasangan',
                'label' => 'Nama Pasangan',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'alamat_ortu',
                'label' => 'Alamat',
                'rules' => 'trim|required'
            ],
			[
                'field' => 'NoHP_ortu',
                'label' => 'Nomor HP',
                'rules' => 'trim|required'
            ]
        ];
    }

	function tampil_data()
    {
		return $this->db->get('anak');
	}

	function cek_login($table,$where)
	{		
		return $this->db->get_where($table,$where);
	}	

	function input_registrasi($data,$table)
	{		
		$this->db->insert($table,$data);
	
	}
	function tampil_data_user($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}

    function ubah_password($username,$data,$table)
	{
	    $this->db->update($table,$data);
	}
}