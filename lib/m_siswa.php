<?php

class siswa {
		private $db;
		
		public function siswa(){
			$this->db = new DBClass();
		}
		
		public function readAllsiswa(){
			$query = "select * from siswa s join nationality n on 
			s.id_nationality = n.id_nationality";
			return $this->db->getRows($query);
		}
		
		public function readsiswa($id){
			$query = "select * from siswa s join nationality n on 
			s.id_nationality = n.id_nationality where id_siswa=".$id;
			return $this->db->getRows($query);
		}
		
		public function createsiswa($id_nationality, $nis, $full_name, $email,$ff){
			$query = "insert into siswa (id_nationality, nis, full_name, email, foto)
			values('$id_nationality','$nis','$full_name','$email','$ff')";
			$this->db->putRows($query);
		}
		
		public function updatesiswa($id, $data){
			$name = $data['input_name'];
			$email = $data['input_email'];
			$nation = $data['input_nationality'];
			$foto = $data['foto'];
			
			$query = "update siswa set full_name='$name', email='$email' foto='$foto'";
			if($nation>0) $query.=",id_nationality='$nation'";
			$query.=" where id_siswa=$id";
			$this->db->putRows($query);
		}
		
		public function deleteSiswa($id){
			$sql = "Delete from siswa where id_siswa=$id";
			$this->db->putRows($sql);
		}
}

?>