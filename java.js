function search() {
	var kata = document.formcari.keyword.value;
	var hasil = "http://www.google.com/search?q=" + kata ;
	window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes')
}
//Fungsi javascript ini memfasilitasi pengguna untuk searching/mencari informasi
//-seperti pada umumnya digoogle, dengan proses awal seperti biasa yaitu:
//-pengguna mengisi yang ingin dicari didalam inputan lalu klik cari.
//Anda dapat menemukan fungsi ini pada search.html

function Tanggal(){
	document.getElementById('demo').innerHTML=Date()
//Fungsi javascript ini adalah untuk memperlihatkan waktu pada saat ini
//dengan referensi waktu dari pc kita
//Anda dapat menemukan fungsi ini pada bio.htmls

}
function data(){
    var quis    = parseFloat(document.page.quis.value);
    var tugas   = parseFloat(document.page.tugas.value);
    var uts     = parseFloat(document.page.uts.value);
    var uas     = parseFloat(document.page.uas.value);
    var ip      = "";
    var ket     = "";

    var na = (0.10*quis)+(0.20*tugas)+(0.30*uts)+(0.40*uas);

        if ((na > 80) && (na <=100))
        {
            alert (ip="A");
            ket="Lulus dengan sangat baik";
        }
            else if ((na > 69) && (na<=80))
            {
                alert (ip="B");
                alert(ket="Lulus dengan baik");
            }
            else if ((na > 55) && (na<=69))
            {
                alert (ip="C");
                alert(ket="Lulus dengan cukup");
            }
            else if ((na > 38) && (na<=55))
            {
                alert(ip="D");
                alert(ket="Lulus dengan kurang");
            }
                else
                {
                    alert(ip="E");
                    alert(ket="Tidak Lulus");
                }
            document.page.ipk.value=ip;
            document.page.ket.value=ket;
        }
//pada Fungsi yang panjang ini, prosesnya adalah dimana pengguna
//-bisa menginputkan nilai variabel dari Quis,Tugas,UTS dan UAS
//-dan setelah selesai mengisi pengguna bisa mengeklik button "hitung"
//- untuk memproses nilai-nilai tersebut dan pada kodingan diatas
//-disediakan if else untuk memproses batas nilai dimana pengguna/penginput
//-harus mendapatkan nilai apa sesuai dengan yang diinputkan.
//-dan jika pengguna ingin mereset nya pengguna bisa klik tombol ulang
//anda bisa menemukan fungsi javascript ini di nilai.html

function warna(pilihan)
{
alert("Anda Memilih Warna " + pilihan);
document.bgColor=pilihan;
}
//pada Fungsi ini pengguna disediakan banyak tombol/button untuk memilih warna
//sesuai dengan yang ada dipilihan, warna yang dipilih otomatis akan terganti
//-terganti pada background
//Anda dapat menemukan fungsi ini pada nilai.html
function jumlah()
        {
        var bil1 = parseFloat(document.fform.bilangan1.value);
        if (isNaN (bil1))
        bil1=0.0;
        var bil2 = parseFloat(document.fform.bilangan2.value);
        if(isNaN (bil2))
        bil2=0.0;
        var hasil = bil1 + bil2;
        alert ("Hasil Penjumlahan = "+hasil);
        }
//Pada fungsi ini pengguna bisa menjumlahkan digit angka sesuai yang diinginkan
//-dengan proses awal menginputkan bilangan 1 (bil1) dan bilangan 2 (bil2)
//lalu ada variabel hasil sebagai tampungan dari penjumlahan bil1 dan bil2
//Anda dapat menemukan fungsi ini pada jumlah.html
