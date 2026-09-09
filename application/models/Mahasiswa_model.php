<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    private $table = 'anak';

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    public function rules()
    {
        return [
            [
                'field' => 'nama',  //samakan dengan atribute name pada tags input
                'label' => 'Nama',  // label yang kan ditampilkan pada pesan error
                'rules' => 'trim|required' //rules validasi
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis Kelamin',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'tgl_lahir',
                'label' => 'Tanggal Lahir',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'menantu',
                'label' => 'Menantu',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'trim|required|numeric|min_length[9]|max_length[15]'
            ],
            [
                'field' => 'no_HP',
                'label' => 'Nomor HP',
                'rules' => 'trim|required'
            ]
        ];
    }

    //menampilkan data mahasiswa berdasarkan id mahasiswa
    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id_anak" => $id])->row();
        //query diatas seperti halnya query pada mysql 
        //select * from mahasiswa where IdMhsw='$id'
    }

    //menampilkan semua data mahasiswa
    public function getAll()
    {
        $this->db->from($this->table);
        $this->db->order_by("id_anak", "desc");
        $query = $this->db->get();
        return $query->result();
        //fungsi diatas seperti halnya query 
        //select * from mahasiswa order by IdMhsw desc
    }

    //menyimpan data mahasiswa
    public function save()
    {
        $data = array(
            "nama" => $this->input->post('nama'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
            "tgl_lahir" => $this->input->post('tgl_lahir'),
            "menantu" => $this->input->post('menantu'),
            "alamat" => $this->input->post('alamat'),
            "noHP" => $this->input->post('noHP')
        );
        return $this->db->insert($this->table, $data);
    }

    //edit data mahasiswa
    public function update()
    {
        $data = array(
            "Nama" => $this->input->post('Nama'),
            "Jenis Kelamin" => $this->input->post('JenisKelamin'),
            "Alamat" => $this->input->post('Alamat'),
            "Agama" => $this->input->post('Agama'),
            "NoHp" => $this->input->post('NoHp'),
            "Email" => $this->input->post('Email')
        );
        return $this->db->update($this->table, $data, array('IdMhsw' => $this->input->post('IdMhsw')));
    }

    //hapus data mahasiswa
    public function delete($id)
    {
        return $this->db->delete($this->table, array("IdMhsw" => $id));
    }
}