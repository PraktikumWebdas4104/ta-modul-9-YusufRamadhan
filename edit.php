<?php
include 'database.php';
$db = new database(); //isi dengan deklarasi method
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit Data User</h3>

<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){ //panggil method edit dari class database
?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['ID'] ?>">
			<input type="text" name="nama" value="<?php echo $d['Nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?php echo $d['Alamat'] ?>"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia" value="<?php echo $d['Usia'] ?>"></td>
	</tr>
	<tr>
		<td>Genre</td>
		<td>
				<input type="checkbox" name="Genre[]" value ="Horror" <?php if (strpos(" ".$d['Genre'],"Horror")) {
					echo "checked";
				}?>>Horror<br>
				<input type="checkbox" name="Genre[]" value ="Action" <?php if (strpos(" ".$d['Genre'],"Action")) {
					echo "checked";
				}?>>Action<br>
				<input type="checkbox" name="Genre[]" value ="Drama" <?php if (strpos(" ".$d['Genre'],"Drama")) {
					echo "checked";
				}?>>Drama<br>
				<input type="checkbox" name="Genre[]" value ="Drama" <?php if (strpos(" ".$d['Genre'],"Animation")) {
					echo "checked";
				}?>>Animation<br>
				<input type="checkbox" name="Genre[]" value ="Drama" <?php if (strpos(" ".$d['Genre'],"Thriller")) {
					echo "checked";
				}?>>Thriller
		</td>
	</tr>
	<tr>
		<td>Pilih Tujuan Wisata</td>
		<td>
				<input type="checkbox" name="Place[]" value ="Bali" <?php if (strpos(" ".$d['Place'],"Bali")) {
					echo "checked";
				}?>>Bali<br>
				<input type="checkbox" name="Place[]" value ="Raja Ampat" <?php if (strpos(" ".$d['Place'],"Raja Ampat")) {
					echo "checked";
				}?>>Raja Ampat<br>
				<input type="checkbox" name="Place[]" value ="Pulau Derawan" <?php if (strpos(" ".$d['Place'],"Pulau Derawan")) {
					echo "checked";
				}?>>Pulau Derawan<br>
				<input type="checkbox" name="Place[]" value ="Bangka Belitung" <?php if (strpos(" ".$d['Place'],"Bangka Belitung")) {
					echo "checked";
				}?>>Bangka Belitung<br>
				<input type="checkbox" name="Place[]" value ="Labuan Bajo" <?php if (strpos(" ".$d['Place'],"Labuan bajo")) {
					echo "checked";
				}?>>Labuan bajo<br><br>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
<?php } ?>
</form>
