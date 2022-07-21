<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Akhir</title>
	<style type="text/css">
		body {			
			background-image: url("putih.jpg");
		}
		table {
			width: 100%; 
			height: 70%;
		}
		
		#namaform {
			color: #96C28A;
			text-align: center;
		}
		#fform {
			width: 100%;
			height: 100%;
			color: black;
			background-image: url("putih.jpg");
		}
			
	</style>
</head>
<body>
	
	<?php  
	//buka file counter mode baca
	echo("<table border=1 width=100% height=70% align=center  background=bgatass.jpg>");
	echo "<td width=250 vertical-align=middle align=center >";
	echo "<font color=#6E6203 size=10>Selamat datang";	
	echo "<br><font size=3 color=#374733><br>";
?>
<form name="form1" >
		<table width="58%" border="0" >
			<tr><td> </td>
				<td>
					Masukan identitas Anda
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" id="nama"> </td>
			</tr>
			<tr>
				<td>Usia</td>
				<td><input type="text" name="usia" id="usia"> </td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" value="Kirim" name="Submit "onclick="tambahkan()">
				<input type="reset" name="Submit2" value="Batal"></td>
			</tr>
		</table>
	</form>
</td>
</table>
	
	<table  width="100%" border="1"> 
	<td>
		<form id="fform">
		<h1><br>Program Kalkulator</h1>
		<pre>
			bilangan pertama:<input type="text" size="11" name="bilangan1">
			bilangan kedua:<input type="text" size="11" name="bilangan2">
		</pre><p>
			<input type="button" value="Penjumlahan" onclick="jumlah()">
			<input type="button" value="Pengurangan" onclick="kurang()">
			<input type="button" value="Perkalian" onclick="kali()">
			<input type="button" value="Pembagian" onclick="bagi()">
			<input type="reset" value="ulang">
	</form>
		<p><script type="text/javascript">
		function tambahkan() {
			alert("Terima Kasih sudah mengisi form. Silahkan gunakan filtur yang ada");
		}

		function jumlah() {
			var bil1=parseFloat(document.fform.bilangan1.value);
			if (isNaN(bil1)) 
				bil1=0.0;
				var bil2=parseFloat(document.fform.bilangan2.value);
			if (isNaN(bil2)) 
				bil2=0.0;
				var hasil=bil1+bil2;
				alert("Hasil Penjumlahan = "+hasil);
			}

		function kurang() {
			var bil1=parseFloat(document.fform.bilangan1.value);
			if (isNaN(bil1)) 
				bil1=0.0;
				var bil2=parseFloat(document.fform.bilangan2.value);
			if (isNaN(bil2)) 
				bil2=0.0;
				var hasil=bil1-bil2;
				alert("Hasil Pengurangan = "+hasil);
			}

		function kali() {
			var bil1=parseFloat(document.fform.bilangan1.value);
			if (isNaN(bil1)) 
				bil1=0.0;
				var bil2=parseFloat(document.fform.bilangan2.value);
			if (isNaN(bil2)) 
				bil2=0.0;
				var hasil=bil1*bil2;
				alert("Hasil Perkalian = "+hasil);
			}

		function bagi() {
			var bil1=parseFloat(document.fform.bilangan1.value);
			if (isNaN(bil1)) 
				bil1=0.0;
				var bil2=parseFloat(document.fform.bilangan2.value);
			if (isNaN(bil2)) 
				bil2=0.0;
				var hasil=bil1/bil2;
				alert("Hasil Pembagian = "+hasil);
			}
	</script></p>
	</td>
	<td>
	
		<?php 
	$hari = date("d");
	$bulan = date("m");
	$tahun = date("Y");
	$jumlahhari = date("t",mktime(0,0,0, $bulan, $hari, $tahun));
	
	switch ($bulan) {
		case 1:
		$nmbulan = "Januari"; break;
		case 2:
		$nmbulan = "Februari"; break;
		case 3:
		$nmbulan = "Maret"; break;
		case 4:
		$nmbulan = "April"; break;
		case 5:
		$nmbulan = "Mei"; break;
		case 6:
		$nmbulan = "Juni"; break;
		case 7:
		$nmbulan = "Juli"; break;
		case 8:
		$nmbulan = "Agustus"; break;
		case 9:
		$nmbulan = "September"; break;
		case 10:
		$nmbulan = "Oktober"; break;
		case 11:
		$nmbulan = "November"; break;
		case 12:
		$nmbulan = "Desember"; break;
	}
	
	 ?>
		<br>
	<table style="border: 2px solid black" cellpadding="10" bgcolor="white">
		<tr bgcolor="#ADD8E6" style="border: solid black;">
			<td align="center"><font color="FF0000">Min</font></td>
			<td align="center">Sen</td>
			<td align="center">Sel</td>
			<td align="center">Rab</td>
			<td align="center">Kam</td>
			<td align="center">Jum</td>
			<td align="center">Sab</td>
		</tr>
		<?php 
			echo "<center><h1>$nmbulan $tahun </h1></center";
			$s = date("w", mktime (0,0,0, $bulan, 1, $tahun));
			for ($ds=0; $ds<=$s ; $ds++) { 
				echo"<td></td>";
			}

			for ($d=1; $d<=$jumlahhari ; $d++) { 
				if (date("w", mktime(0,0,0,$bulan, $d, $tahun))==0) {
					echo "<tr>";
				}
				$warna="verdana"; //warna default

				if (date("l", mktime(0,0,0, $bulan, $d, $tahun))=="Sunday") {
					$warna="red";
				}
				
				if($d==$hari){
					$warna="blue";
				}

				echo "<td align=center valign=middle><span style=\"color: $warna\">$d</span></td>";
				if(date("w", mktime(0,0,0, $bulan, $d, $tahun))==6){
				echo "<tr>";
			}
		}

echo '</table>';
		?>
	
	</table>
</table>
</body>
</html>
