<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>


<?php
include 'koneksi.php';
if($_POST['BtnSave']){

$npm=$_POST['npm'];
$nama=$_POST['nama'];
$jenkel=$_POST['jenkel'];
$jurusan=$_POST['jurusan'];
$kelas=$_POST['kelas'];


$ekstensi_diperbolehkan= array('png', 'jpg');
$photo =$_FILES ['file']['name'];
$x= explode('.', $photo);
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['file']['size'];
$file_tmp =$_FILES['file']['tmp_name'];
$namafile ='img_'.$npm.'.jpg';

if (in_array($ekstensi, $ekstensi_diperbolehkan)=== true){
	if($ukuran < 1044070){
		move_uploaded_file($file_tmp, 'file/'.$namafile);
		$query = mysqli_query($koneksi, "insert into tb_mahasiswa(npm, nama, jenkel, jurusan, kelas, photo) values ('$npm', '$nama', '$jenkel','$jurusan', '$kelas', '$namafile')");
		if($query){
			echo 'FILE BERHASIL DI UPLOAD';

		}else{
			echo 'GAGAL MENGUPLOAD GAMBAR';
		}
		}else{
			echo 'UKURAN FILE TERLALU BESAR';
		}
		}else{
			echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DIPERBOLEHKAN';
		}
	}

?>

<br/>
<br/>
<a href="prosesinput.php">Tambah Data</a>
<br/>
<br/>
</body>
</html>