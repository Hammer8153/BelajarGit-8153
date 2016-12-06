<?php

require_once('lib/DBclass.php');
require_once('lib/m_siswa.php');

$id = $_GET["id"];
$siswa = new Siswa();
$data = $siswa->readSiswa($id);
$value = $data[0];
?>

<table border="1">
	<tr>
		<th>ID SISWA</th>
		<th>NAMA LENGKAP</th>
		<th>NATIONALITY</th>
		<th></th>
	</tr>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['nationality']?></td>
	</tr>
</table>

<div> <a href="siswa.php"><back</a>
</div>