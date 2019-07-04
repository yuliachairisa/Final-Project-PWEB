<!DOCTYPE html>
<html>
<head>
	<title>Final Project</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script language="javascript" src="javascript/java.js"></script>
</head>
<body background="img/bg.jpg">
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
    
    <center><ul>
        	<li><a href="materi2.html" target="_blank">TEMPAT ASAL</a></li>
            <li><a href="index.html">HOME</a></li>
            <li><a href="tabelku.html">ISI TABEL</a></li>
            <li><a href="https://www.instagram.com/yuliachairisa/" target="_blank">INSTAGRAM</a></li>
 
    </ul></center>
<center>

</div>
</center>
<?php
echo "<head><title>DAFTAR Mahasiswa</title></head>";
////echo adalah fungsi output pada php, jika didalam bahasa c++ akan disebut dengan cout. pada kodingan diatas yang diouputkan adalah INFORMASI MAHASISWA
$fp = fopen("mahasiswa.txt","r");
////$fp adalah deklarasi variabel dengan nama fp, dan fopen berfungsi untuk membuka file. pada kodingan diatas file yang dibuka adalah mahasiswa.txt
while ($isi = fgets($fp,80))
////Fungsi fgets() Untuk membaca data dari file.  dan data yang dibaca oleh fungsi ini adalah data variabel isi
{
$pisah = explode("|",$isi);
//Fungsi explode() dalam PHP digunakan untuk menkonversi string menjadi array. Dalam memecah sebuah string menjadi array, fungsi explode() membutuhkan beberapa argumen. Berikut adalah format dasar dari fungsi explode dalam PHP.
echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
echo "<tr><td>PRODI</td><td>: $pisah[1]</td></tr>";
echo "<tr><td>NIM </td><td>: $pisah[2]</td></tr>";
echo "<tr><td>Bukti </td><td>: <img src=img/$pisah[3] width=200 height=200 ></td></tr>
<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
//diatas merupakan hasil konversi string dari fungsi explode yang dipisah dan dioutputkan sesuai dengan urutan arraynya
}
echo "</table>";
//fungsi untuk mengoutputkan table
echo "<a class=btn href=materi2.html> Lihat Tempat Asal Saya</a><br> ";
//fungsi seperti hyperlink, jika diklik akan menuju halaman tertentu
?> 

</body>
</html>