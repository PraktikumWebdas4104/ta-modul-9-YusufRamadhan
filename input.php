<h1>CRUD OOP PHP</h1>
<h3>Tambah Data User</h3>

<form action="proses.php?aksi=tambah" method="post">

<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
		<td>Pilih Genre Film</td>
		<td>
				<input type="checkbox" name="Genre[]" value ="Horror">Horror<br>
				<input type="checkbox" name="Genre[]" value ="Action">Action<br>
				<input type="checkbox" name="Genre[]" value ="Drama">Drama<br>
				<input type="checkbox" name="Genre[]" value ="Drama">Animation<br>
				<input type="checkbox" name="Genre[]" value ="Drama">Thriller
		</td>
	</tr>
	<tr>
		<td>Pilih Tujuan Wisata</td>
		<td>
				<input type="checkbox" name="Place[]" value ="Bali">Bali<br>
				<input type="checkbox" name="Place[]" value ="Raja Ampat">Raja Ampat<br>
				<input type="checkbox" name="Place[]" value ="Pulau Derawan">Pulau Derawan<br>
				<input type="checkbox" name="Place[]" value ="Bangka Belitung">Bangka Belitung<br>
				<input type="checkbox" name="Place[]" value ="Labuan Bajo">Labuan bajo<br><br>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
