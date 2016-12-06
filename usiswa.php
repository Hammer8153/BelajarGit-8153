<?
require_once('lib/DBclass.php');
require_once('lib/m_siswa.php');

$id = $_GET['a'];

if(!is_numeric($id)){
	exit('acces forbidden');

$id = $_GET["id"];
$siswa = new Siswa();
$data = $siswa->readSiswa($id);
$dt = $data[0];
?>

<h1>Tambah Data Siswa</h1>
<form action="tsiswa.php" method="post">
	NIS:<br/>
	<input type="text" value="<?php echo $dt['id_siswa']?>" name="in_nis" readonly="true"<br/>
	Nama Lengkap:<br/>
	<input type="text" name="in_name"><br/>
	Email:<br/>
	<input type="text" name="in_email"><br/>
	Kewarganegaraan:<br/>
	<select name="in_nation">
		<option value="">--pilih negara--</option>
		<?php foreach($data_nation as $n):?>
		<option value="<?echo  $n['id_nationality']?>">
			<?echo $n['nationality']?>
		</option>
		<?php endforeach?>
	</select>
	<input type="submit" name="kirim" value="simpan">
</form>