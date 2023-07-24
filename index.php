<html>
<head>
	<title>TAMBAH DATA</title>
</head>
<body>

	<h1>DATA MAHASISWA</h1>
	<?php
	include 'koneksi.php';
	?>

</br>
<a href="prosesinput.php"> PROSES INPUT</a>
</br></br>

<table border="1" collpadding="10">
	<tr>
		<th>No</th>
		<th>NPM</th>
		<th>NAMA</th>
		<th>JENIS KELAMIN </th>
		<th>KELAS</th>
		<th>JURUSAN</th>
		<th>PHOTO</th>
		<th>ACTION</th>
	</tr>

<?php
	$no=1;
	$data= mysqli_query($koneksi, "select * from tb_mahasiswa");
	while($id = mysqli_fetch_array($data)){
		?>

		<tr>
			<td><?php echo $no++;                              ?></td>
			<td><?php echo $id['npm']; ?></td>
			<td><?php echo $id['nama']; ?></td>
			<td>
			<?php
			if($id['jenkel']=='L') echo 'LAKI-LAKI';
			elseif($id['jenkel']=='P') echo 'PEREMPUAN';
			?>
		</td>
			<td><?php echo $id['kelas']; ?></td>
			<td><?php echo $id['jurusan'];?></td>

			<td>
			<img src="<?php echo "file/".$id['photo']; ?>" width="100" height="130">
			</td>
			<td>
				<a href="editmahasiswa.php?id=<?php echo $id['npm'];
	?>">Edit</a> |
	<a href="proseshapus.php?id=<?php echo $id['npm']; ?>"
	onclick="return confirm('Anda yakin akan menghapus data ini? \n<?php echo
	$id['npm']; ?>')">Hapus</a>
			</td>

</tr>
<?php } ?>
</table>
<br/>
<?php
echo "Total data : ". mysqli_num_rows($data)." Mahasiswa";
?>
</body>
</html>
