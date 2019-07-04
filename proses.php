<!DOCTYPE html>
<html>
<head>
	<title>Final Project</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script language="javascript" src="javascript/java.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
</head>
<body background="img/bg3.jpg">

<div class="header">
	<center>
		<br>
	<p><font face="Lobster" size="20"><marquee>YULIA CHAIRISA</marquee></font>
		</center>
</div>

<div class="menubar">
		<ul>
            <li><a href="bio.html">Biodata</a></li>
            <li><a href="search.html">Pencarian</a></li>
            <li><a href="formulir.php">Form Pengunjung</a></li>
            <li><a href="look.php">Info Pengunjung</a></li>
            <li><a href="jumlah.html">Berhitung yuk</a></li>
            <li><a href="nilai.html">Cek Nilaimu</a></li>
        </ul>
</div>	

<div class="menu1">
    
   <center>
   	<ul>
        	<li><a href="materi2.html" target="_blank">TEMPAT ASAL</a></li>
            <li><a href="index.html">HOME</a></li>
            <li><a href="tabelku.html">ISI TABEL</a></li>
            <li><a href="https://www.instagram.com/yuliachairisa/" target="_blank">INSTAGRAM</a></li>


           
    </ul></center>

</div>
<?php
echo "<head><title>INFORMASI MAHASISWA</head></title>";
//echo adalah fungsi output pada php, jika didalam bahasa c++ akan disebut dengan cout. pada kodingan diatas yang diouputkan adalah INFORMASI MAHASISWA
$fp = fopen("mahasiswa.txt","a+");
//$fp adalah deklarasi variabel dengan nama fp, dan fopen berfungsi untuk membuka file. pada kodingan diatas file yang dibuka adalah mahasiswa.txt
$nama = $_POST['nama'];
//Variabel $ _POST standar digunakan untuk mengumpulkan nilai dari bentuk dikirim dengan metode = “post”.
//dan nilai yang dikumpulkan dan dikirim dari pengguna ke pengguna adalah variabel nama
$prodi= $_POST['prodi'];
//Variabel $ _POST standar digunakan untuk mengumpulkan nilai dari bentuk dikirim dengan metode = “post”.
//dan nilai yang dikumpulkan dan dikirim dari pengguna ke pengguna adalah variabel prodi
$nim = $_POST['nim'];
//Variabel $ _POST standar digunakan untuk mengumpulkan nilai dari bentuk dikirim dengan metode = “post”.
//dan nilai yang dikumpulkan dan dikirim dari pengguna ke pengguna adalah variabel nim
$file = $_FILES["file"]["name"];
//Fungsi ini digunakan untuk mendeteksi/mengetahui jenis dan nama file yang akan di upload
$tmp_name = $_FILES["file"]["tmp_name"];
//fungsi ini didalam digunakan php untuk mengetahui dan memastikan tujuan upload file yang kita pilih ke web server dalam komputer kita.
move_uploaded_file($tmp_name, "img/".$file);

//fungsi ini digunakan php untuk mengirimkan file dari komputer kita ke web server.
fputs($fp,"$nama|$prodi|$nim|$file\n");
//Fungsi untuk menuliskan data kedalam file dan data yang dituliskan adalah data nama,prodi,nim beserta file foto (jika ada)
fclose($fp);
//fungsi yang digunakan untuk menutup file, 
echo "<br>";
//fungsi untuk membuat garis baru/new line
?> 
<center>
<?php
echo "<a class=btn href=materi2.html> Lihat Tempat Asal Saya</a><br> ";
//fungsi seperti hyperlink, jika diklik akan menuju halaman tertentu
?></center>
<div class="menu2">
</div>


</body>
</html>