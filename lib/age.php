<?php
class Age{
	private $db;
	public function Age(){
		$this->db = new DBClass();
	}
	
	public function readDate_obSiswa(){
		$query = "Select full_name, date_ob from siswa";
		return $this->db->getRows($query);
	}
	
	public function readAgeSiswa(){
		$query = "select id_siswa, count(date_ob) as umur 
		from siswa";
		return $this->db->getRows($query);
	}
}
?>