<?php 
 
class M_admin extends CI_Model
{	
	public function rules_admin()
    {
        return [

            [
                'field' => 'username',
                'label' => 'User Name',
                'rules' => 'trim|required'
            ],
            
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required'
            ]
        ];
    }
	
	function tampil_data()
    {
		return $this->db->get('admin');
	}

	function cek_login($table,$where)
	{		
		return $this->db->get_where($table,$where);
	}	


}