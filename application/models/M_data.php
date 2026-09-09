<?php 
 
class M_data extends CI_Model
{

    //validasi form, method ini akan mengembailkan data berupa rules validasi form       
    

	function tampil_data()
    {
		return $this->db->get('anak');
	}

	function tampil_galery()
    {
		return $this->db->get('galery');
	}

	function view_pdf()
    {
		return $this->db->get('cucu');
	}

	function form_simpan_galery($data,$table)
	{
	 $this->db->insert($table,$data);
	}

	function form_simpan_data_cucu($where,$table)
	{		
		return $this->db->get_where($table,$where);
	
	}
	
	function form_simpan_data_cicit($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}
	
	function form_simpan_data_baok($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}
		
	//Simpan Data Orang Tua (anak dari madnasir)//
	function input_data($data,$table)
	{
	 $this->db->insert($table,$data);
	}

	//Hapus Data Orang Tua (anak dari madnasir)//
	function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

   //Menampilkan Form Edit Data Orang Tua (anak dari madnasir)//
	function edit_data($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}

 	//Menyimpan Data dari Form Edit Data Orang Tua (anak dari madnasir)//
	function update_data($where,$data,$table)
	{
	 $this->db->where($where);
	 $this->db->update($table,$data);
	}	

	//Menampilkan Total anak dari bani oyoh//
	
	//Menampilkan Total anak dari bani oyoh//
	function total_anak_oyoh()
    {
			$this->db->select('*');
			$this->db->from('cucu');
			$this->db->where('id_anak',1);
			return $this->db->get()->num_rows();
    		

	}
	//Menampilkan Total anak dari bani aminah//
	function total_anak_aminah()
    {
			$this->db->select('*');
			$this->db->from('cucu');
			$this->db->where('id_anak',4);
			return $this->db->get()->num_rows();
	}
	
	//Menampilkan Total anak dari bani aat//
	function total_anak_aat()
    {
			$this->db->select('*');
			$this->db->from('cucu');
			$this->db->where('id_anak', 6);
			return $this->db->get()->num_rows();

	}
	
	//Menampilkan Total anak dari bani Emay//
	function total_anak_emay()
    {
			$this->db->select('*');
			$this->db->from('cucu');
			$this->db->where('id_anak', 7);
			return $this->db->get()->num_rows();

	}
	//Menampilkan Total cucu dari bani Oyoh//
	

	// menampilkan seluruh Data Cucu dari Bani Madnasir //
	function tampil_data_cucu()
    {
		
			$this->db->select('*');
			$this->db->from('cucu');
			$this->db->join('anak','anak.id_anak=cucu.id_anak');
			$query = $this->db->get();
			return $query->result();
			
	}

	// menampilkan Total Data Anak Bani Madnasir (tampilan Card View)//
	function total_anak()
    {
			$this->db->select('*');
			$this->db->from('anak');
			return $this->db->get()->num_rows();
    		
		}

	// menampilkan Form Input Data Anak Bani Madnasir//
	function input_data_anak($data,$table)
	{
	 $this->db->insert($table,$data);
	}
	 
	// Hapus Data Anak Bani Madnasir Berdasarkan ID//
	function hapus_data_anak($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);

	}
	
	function hapus_data_baok($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);

	}
  // Menampilkan Form Edit Data Anak Bani Madnasir Berdasarkan ID//
	function edit_data_anak($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}

 	// Perintah Edit Data Tombol Update Data Anak Bani Madnasir Berdasarkan ID//
	function update_data_anak($where,$data,$table)
	{
	 $this->db->where($where);
	 $this->db->update($table,$data);
	}
	
	// Menampilkan Data Cucu Bani Madnasir Berdasarkan ID_cucu//
	function tampil_data_cicit()
    {
			$this->db->select('*');
			$this->db->from('cicit');
			$this->db->join('cucu','cucu.id_cucu=cicit.id_cucu');
			$query = $this->db->get();
			$this->db->order_by('id_cucu');
			return $query->result();
	}

	// menampilkan Total Data Cucu Bani Madnasir (tampilan Card View)//
	function total_cucu()
	{
			$this->db->select('*');
			$this->db->from('cucu');
			return $this->db->get()->num_rows();	

		}
	// menampilkan Total Data Cicit Bani Madnasir (tampilan Card View)//
	function total_cicit()
	{
			$this->db->select('*');
			$this->db->from('cicit');
			return $this->db->get()->num_rows();		
	}
	// menampilkan Total Data Cicit Bani Madnasir (tampilan Card View)//
	function total_baok()
	{
			$this->db->select('*');
			$this->db->from('baok');
			return $this->db->get()->num_rows();		
	}
	
	// Hapus Data Cucu Berdasarkan ID Cucu//
	function hapus_data_cucu($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	// menampilkan Form Edit Data Cucu Bani Madnasir//
	function edit_data_cucu($where,$table)
	{		
		return $this->db->get_where($table,$where);

	}

	// Perintah Edit Data Tombol Update Data Cucu Bani Madnasir Berdasarkan ID//
	function update_data_cucu($where,$data,$table)
	{
	 $this->db->where($where);
	 $this->db->update($table,$data);
	
	}
		// Menampilkan Data cicit Bani Madnasir Berdasarkan ID_icit//
		function tampil_data_baok()
		{
		
				$this->db->select('*');
				$this->db->from('baok');
				$this->db->join('cicit','cicit.id_cicit=baok.id_cicit','INNER');
				$query = $this->db->get();
				return $query->result();
		}
// menampilkan Form Input Data Baok Bani Madnasir//
function input_data_baok($data,$table)
{
 $this->db->insert($table,$data);
}	

// menampilkan Form Edit Data Cicit Bani Madnasir//
function edit_data_cicit($where,$table)
{		
	return $this->db->get_where($table,$where);

}
	// Hapus Data Cucu Berdasarkan ID Cucu//
	function hapus_data_cicit($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	function tampil_profile_anak($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}

	function tampil_profile_cucu($where,$table)
	{		
		return $this->db->get_where($table,$where);
	}

	
}