<?php

// kommmmmmmmmmmmmmmment
// ---------------------

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/age.php');

$siswa = new Siswa();
$data = $siswa->readAllsiswa();
$umur = $siswa->readAgeSiswa();
?>

<table border="1">
<tr>
	<th>ID SISWA</th>
	<th>FULL NAME</th>
	<th>DATE OF BIRTH</th>
	<th>AGE</th>
	<th>NATIONALITY</th>
	<th></th>
</tr>
<?php foreach($data as $a):?>
<tr>
	<td><?php echo $a['id_siswa']?></td>
	<td><?php echo $a['full_name']?></td>
	<td><?php echo $a['date_ob']?></td>
	<td><?php $umur?></td>
	<td><?php echo $a['nationality']?></td>
	<td>
		<a 
		href="dsiswa.php?a=<?php echo $a['id_siswa']?>">
		Detail
		</a>
	</td>
	<td>
		<a 
		href="usiswa.php?a=<?php echo $a['id_siswa']?>">
		Edit
		</a>
	</td>
	<td>
		<a href="delsiswa.php?a=<?php echo $a['id_siswa']?>">
		Delete
		</a>
	</td>
</tr>
<?php endforeach ?>
</table>