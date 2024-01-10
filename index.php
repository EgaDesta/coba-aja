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