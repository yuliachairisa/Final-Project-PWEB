<!DOCTYPE html>
<html>
<head>
  <title>Final Project</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script language="javascript" src="javascript/java.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
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

</div>
<CENTER><p><strong><font face="Lobster" size="20">AKU INGIN MENGETAHUI DATAMU</font></strong></p></CENTER>
<div class="menu2">
  <center><br><br>
  <form action="proses.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="nama" ><font color="black" face="Lobster">Nama:</font></label>
    <input type="text" name="nama" class="form-control" id="nama">
  </div>

  <div class="form-group">
    <label for="alamat"><font color="black" face="Lobster">PRODI:</font></label>
    <input type="text" name="prodi" class="form-control" id="alamat">
  </div>
   <div class="form-group">
    <label for="alamat"><font color="black" face="Lobster">NIM :</font></label>
    <input type="text" name="nim" class="form-control" id="alamat">
  </div>
  <div class="form-group">
    <label for="alamat"><font color="black" face="Lobster">Lampiran Foto:</font></label>
    <input type="file" name="file">
  </div>
  <br>
    <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
    <button type="reset" name="Submit2" class="btn btn-danger">Reset</button>
</form>
   </div>
  </center>
</div>
<br>
<br>
<br>
<br>

</body>
</html>