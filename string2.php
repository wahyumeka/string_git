<!-- <?php
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr)."<br>";
echo join("44",$arr)."<br>";
echo join("22",$arr)."<br>"; 
echo join("X",$arr);
?> -->


<!-- <?php 
echo "<h2>www.malasngoding.com</h2>";
echo "<br/>";
 
 
$kalimat = "belajar pemrogaman di malas ngoding";
 
// memisahkan string menjadi array
$data = explode(" " , $kalimat);
 
// string menjadi array
print_r($data);
//print_r berguna untuk menampilkan isi array
 
echo "<br/>";
echo "<br/>";
 
echo " Data 1 = " . $data[0];
echo "<br/>";
echo " Data 2 = " . $data[1];
echo "<br/>";
echo " Data 3 = " . $data[2];
echo "<br/>";
echo " Data 4 = " . $data[3];
echo "<br/>";
echo " Data 5 = " . $data[4];
?> -->


<!-- <?php
  $str = "a,b,c";
  print_r (explode(",",$str));
?> -->


<!-- <?php
$str = "Hello";
echo md5($str);
?> -->


<!-- <?php
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".");
?>
 -->

<!-- <html>
<body>
<?php
echo str_replace("world","Sugik","Hello world!");
?>
<p>In this example, we search for the string "Hello World!", find the value "world" and then replace the value with "Sugik".</p>
</body>
</html> -->

<?php
$StrAwal="SAYA SANGAT SUKA BATAGOR";
$StrAkhir=str_replace("SA","BA" $StrAwal);
echo $StrAkhi;
?>
<!-- <?php
print_r(str_split("Hello"));
?> -->

 Fungsi Split() Pada PHP, dari pembahasan diatas dapat kita Tarik sebuah kesimpulan yaitu Fungsi atau kegunaan Split() Pada PHP yaitu untuk memisahkan dan membuang karakter tertentu pada yang terdapat pada sebuah sting, oke teman-teman sekian dulu tutorial kita kali ini tentang Mengenal Fungsi Split() Pada PHP.

<!--  exs.
 <?php
 $tanggal=date("d / m / Y");
list($bulan, $tanggal, $tahun) = split('[/.-]', $tanggal);
echo "Tanggal: $tanggal - Bulan: $bulan - Tahun: $tahun<br />\n";
?> -->

<!-- <?php
echo str_word_count("Hello world!");
?>
 -->

 Definisi dan Penggunaan
The str_word_count() fungsi menghitung jumlah kata dalam string.

Sintaksis
str_word_count( string,return,char )

Parameter	Deskripsi
string	Wajib. Menentukan string untuk memeriksa
return	Pilihan. Menentukan nilai kembali dari str_word_count() fungsi.
Kemungkinan nilai:

0 - default. Mengembalikan jumlah kata yang ditemukan
1 - Mengembalikan sebuah array dengan kata-kata dari string
2 - Mengembalikan sebuah array di mana kuncinya adalah posisi kata dalam string, dan nilai adalah kata yang sebenarnya
char	Pilihan. Menentukan karakter khusus dianggap sebagai kata-kata.

exs..

<!-- <?php
print_r(str_word_count("Hello world & good morning!",1));
print_r(str_word_count("Hello world & good morning!",1,"&"));
?> -->

<!-- <?php
echo strlen("Hello");
?> -->

strlen itu yaitu menghitung dan mencari jumlah string atau karakter termasuk spasi didalamnya .

Oke sedikit saya praktekan :

Seperti ini :

<!-- <?php 
	
	$data = "Hello Dumet School";

	echo $data . "<br/>";
	echo "jumlah datanya adalah " . "<b style=color:red;>" .  strlen($data) . "</b>";

 ?>

<?php 
	
	$data = "Hello Dumet School";
 
	echo $data . "<br/>";
	echo "jumlah datanya adalah " . "<b style=color:red;>" .  strlen($data) . "</b>";
 
 ?>
berikut tampilannya :

Mengenal fungsi strlen pada PHP -->



<!-- 
<html>
<body>
<?php
echo substr("Hello world",6);
?>
</body>
</html> -->

Fungsi substr() adalah fungsi PHP untuk memotong string, atau untuk mengambil sebagian nilai dari sebuah string. Fitur ini cukup sering digunakan dalam proses pembuatan program PHP, terutama yang membutuhkan manipulasi string.
 contoh kode seluruh kombinasi fungsi substr():

<?php
$kalimat = "Belajar PHP di Duniailkom";
echo substr($kalimat,8); // PHP di Duniailkom
echo "<br>";
echo substr($kalimat,8,6); // PHP di
echo "<br>";
echo substr($kalimat,8,-5); // PHP di Dunia
echo "<br>";
echo substr($kalimat,-10); // Duniailkom
echo "<br>";
echo substr($kalimat,-10,5); // Dunia
echo "<br>";
echo substr($kalimat,-10,-3); // Duniail
?>
<!-- <html>
<body>
<?php
echo substr_compare("Hello world","Hello world",0);
?>
<p>If this function returns 0, the two strings are equal.</p>
</body>
</html> -->

() Fungsi membandingkan dua string dari yang ditentukan posisi awal substr_compare.
Fungsi substr_compare () adalah fungsi bawaan di PHP dan membantu untuk membandingkan dua string dari posisi awal yang ditentukan hingga panjang yang ditentukan.
<!-- <?php 
  
// PHP program to illustrate the 
// substr_compare() function 
  
echo substr_compare("geeks", "gfg", 2)."\n"; 
echo substr_compare("geeksforgeeks", "gfg", 2)."\n"; 
echo substr_compare("Geeks", "gfg", 0, 1, true)."\n"; 
echo substr_compare("Geeks", "gfg", 0, 3, true)."\n"; 
echo substr_compare("GeeksforGeeks", "geeksforgeeks", 
                                    0, false)."\n"; 
  
?> 
Output:

-2
-2
0
-1
0 -->

<!-- <html>
<body>
<?php
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");
?>
</body>
</html>
 -->

 Ada fungsi menarik di php yaitu fungsi trim. fungsi ini di gunakan untuk menghilangkan beberapa karakter di php yang sesuai dengan persyaratan.

ok langsung saja gak usah banyak kata......

1. fungsi trim
fungsi ini digunakan untuk menghilangkan charakter yang sesuai dengan persyaratan misal :

 <?php
$string = "contoh trim";
echo trim($string, "com"); //hasil nya cnthtri 
?>

ok udah paham kan....


2. fungsi ltrim
fungsi ini digunakan untuk menghilagkan charakter dari kiri
misal :
 <?php
$string = "contoh ltrim";
echo ltrim($string, "contoh"); //hasil nya ltrim 
?>

3. fungsi rtrim
fungsi ini digunakan untuk menghilangkan charakter dari kanan
 
<?php
$string = "contoh rtrim";
echo rtrim($string, "rtrim"); //hasil nya contoh 
 ?>

<!-- <html>
<body>
<?php
echo ucwords("hello world");
?> 
</body>
</html> -->

 ucwords() digunakan untuk mengubah setiap huruf pada awal kata menjadi huruf besar.

<!-- <html>
<body>
<?php
echo ucfirst("hello world!");
?> 
</body>
</html>
 -->

 Untuk fungsi dari ucfirst() itu sendiri adalah untuk menampilkan huruf pada awal paragraf menjadi huruf besar

$akar_kuadrat = sqrt(49);
exs
<!-- <?php
$akar_kuadrat = sqrt(49);
echo "Akar kuadrat dari 49 adalah $akar_kuadrat";
// Akar kuadrat dari 49 adalah 7
?> -->

<!-- pow(12,2) = pangkat 2
eks
<?php
echo "12 pangkat 2 adalah: ".pow(12,2);
// 12 pangkat 2 adalah: 144
?> -->

































