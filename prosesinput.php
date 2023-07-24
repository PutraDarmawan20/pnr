<html>
<head>
	<title> DATA MAHASISWA</title>
</head>
<body>

	<h2> DATA MAHASISWA</h2>
</br>
<a href="index.php">KEMBALI</a>
</br>
</br>
<h3> TAMBAH DATA MAHASISWA </h3>
<form action ="prosestambah.php" method="post" enctype="multipart/form-data">
	<table width="400">

<tr>
<td width="175">NPM</td>
<td><input name="npm" type="text" id="npm" size="10" /></td>
</tr>
<tr>
<td>NAMA</td>
<td><input name="nama" type="text" id="nama" size="25"
/></td>
</tr>


<tr>
<td>JENIS KELAMIN</td>
<td>
<input type="radio" value="L" name ="jenkel">LAKI-LAKI
<input type="radio" value="P" name ="jenkel">PEREMPUAN
</td>
</tr>

<tr>
<td>JURUSAN</td>
<td width="300"><select name="jurusan" id="jurusan">
	<option value="-">-</option>
<option value="SI">SISTEM INFORMASI</option>
<option value="TI">TEKNOLOGI INFORMASI</option>
</select></td>
</tr>

<tr>
<td>KELAS</td>
<td><input name="kelas" type="text" id="kelas" size="25" /></td>
</tr>


<tr>
	<td>Photo</td>
	<td><input type="file" name="file"></td>

</tr>

<tr><CENTER>
<td colspan="2">
<input name="BtnSave" type="submit" id="BtnSave" value="Save" />
<input name="BtnBatal" type="reset" id="BtnBatal" value="Cancel" />
</td></CENTER>
</tr>
</table></CENTER>
</form></body>
</html>
