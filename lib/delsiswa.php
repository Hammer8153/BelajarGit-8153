<?php

require_once('lib/DBclass.php');
require_once('lib/m_siswa.php');

$id = $_GET['a'];

if(!is_numeric($id)){
	exit('acces forbidden');
}

$siswa = new Siswa();
$data = $siswa->deleteSiswa($id);

if(empty($data)){
	echo "data telah dihapus";
}

?>
<br/>
<a href="siswa.php">Kembali</a>