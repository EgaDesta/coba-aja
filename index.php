<!-- Dalam deklarasi php menggunakan <?php ?> -->
<!-- Contoh: -->

<?php
    //konten
?>

<!--- Dalam php terdabat komentar yang berfungsi sebagai dokumentasi atau keterangan --->
<!--- Contoh: -->

<?php
//ini komentar
/*ini komentar*/
?>

<!--- Penggunaan php di dalam html -->
<!--- Contoh: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BEGINER | EGA </title>
</head>
<body>
    <?php
        echo "Hello World";
    ?><br>
</body>
</html>


<!-- Membuat variabel di dalam php 
Variabel merupakan sebuah tempat yang menyimpan data -->
<!-- Contoh: -->

<?php
    $nama = "Ega";
    echo $nama;
?><br>

<!-- Tipe data -->
<!-- # string 
merupakan tipe data yang berupa teks/kalimat-->
<!-- Contoh: -->

<?php
    $nama = "ega";
    echo $nama;
    ?><br>
<!--- integer
merupakan tipe data yang berupa angka-->
<!-- Contoh: -->

<?php
    $angka = 100;
    echo $angka;
    ?><br>
<!--- float
merupakan tipe data angka bilangan bulat(.)-->
<!-- Contoh: -->

<?php
    $angka = 10.5;
    echo $angka;
    ?><br>

<!--- Array -->
<!--tempat untuk menyimpan beberapa data-->
<?php
	$nama1 = array('bebek','ayam');
	$nama2 = ['bebek','ayam'];
    var_dump($nama1);
    echo $nama;
?><br>
<!--untuk memanggilnay menggunakan cara-->
<?php
?>
<!---angka dalam urutan array di mulai dari 0-seterusnya)#-->

<!--- Array asosiatif-->
<!--array yang berisi berbagai macam jenis data-->
<?php 
	$data = ["nama"=>"ega", "umur"=>22,];
    echo $data["umur"];
?><br>

<!--- Perulangan -->
<!--- for -->
<!--- perulangan yang bisa kita atur jumlah pengulangannya dengan menggunakan variabel.
Contoh:-->

<?php
for ($i = 0; $i < 10; $i++) {
    echo "Ini adalah perulangan ke-$i<br>";
}
?><br>
<!--- Perulangan -->
<!--- for -->
<!--perulangan yang terus berjalan selama kondisi tertentu terpenuhi. Contoh:-->

<?php
$i = 0;
while ($i < 10) {
    echo "Ini adalah perulangan ke-$i<br>";
    $i++;
}
?><br>

<!--- if else -->

<?php
// Membuat variabel $warna dengan nilai null
$warna = null;

// Memeriksa apakah $warna null atau bukan null
if ($warna == null) {
    // Jika null, maka tampilkan pesan "Warnanya hitam"
    echo "Warnanya hitam";
} elseif ($warna != null) {
    // Jika bukan null, maka tampilkan warnanya sesuai nilai $warna
    echo $warna;
} else {
    // Jika semua kondisi gagal, maka tampilkan pesan "Warnanya tidak diketahui"
    echo "Warnanya tidak diketahui";
}
?>
