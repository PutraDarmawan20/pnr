<!DOCTYPE html>
<html>
<head>
<title>DATA MAHASISWA</title>
</head>
<body>
<h2>DATA MAHASISWA</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>EDIT DATA MAHASISWA</h3>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from tb_mahasiswa where
npm='$id'");
while($id = mysqli_fetch_array($data)){
?>
<form method="post" action="prosesupdate.php">
<table>
<tr>
<td>NPM</td>
<td>
<input type="text" name="npm" value="<?php echo
$id['npm']; ?>">
</td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" value="<?php echo
$id['nama']; ?>"></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>
<input type="radio" name="jenkel" value="L" <?php
if($id['jenkel']=='L') echo 'checked'?>>Laki-laki
<input type="radio" name="jenkel" value="P" <?php
if($id['jenkel']=='P') echo 'checked'?>>Perempuan
</td>
</tr>
<tr>
<td>Jurusan</td>
<td>
<Select name=jurusan>
<option value="SI" <?php if($id['jurusan']=="SI") echo
'selected="selected"'; ?> >SI</option>
<option value="TI" <?php if($id['jurusan']=="TI") echo
'selected="selected"'; ?> >TI</option>
<option value="SIA" <?php if($id['jurusan']=="SIA") echo
'selected="selected"'; ?> >SIA</option>
</select>
</td>
</tr>
<tr>
<td>Kelas</td>
<td><input type="text" name="kelas" value="<?php echo
$id['kelas']; ?>"></td>
</tr>
<tr>
<td>Photo</td>
<td><input type="file" name="file"> <img src="file/<?php echo
$id['photo']; ?>" style="width: 100px;float: left;margin-bottom: 5px;">
<br/><i style="float: left;font-size: 11px;color:
red">Abaikan jika tidak merubah photo</i>
</td>
</tr>
<tr>
<td></td>
<td>
<br/><br/>
<input name="BtnSimpan" type="submit" value="SIMPAN">
<input name="BtnBatal" type="reset" value="BATAL" />
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>
