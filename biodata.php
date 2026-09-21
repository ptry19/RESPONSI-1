<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Biodata & Cita-cita</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-wrapper">
  <h2>Form Biodata</h2>

  <p>Nama:</p>
  <input type="text" name="nama" value="Martina Putri Ayu" readonly>

  <p>Tempat, Tanggal Lahir:</p>
  <input type="text" name="ttl" value="Teluk Nyatu, 19 Maret 2007" readonly>

  <p>Riwayat Sekolah (SD – Kuliah):</p>
  <table>
    <tr>
      <th>Tahun</th>
      <th>Nama Sekolah</th>
      <th>Kota Sekolah</th>
    </tr>
    <tr>
      <td><input type="text" value="2015 – 2018" readonly></td>
      <td><input type="text" value="SD Negeri Teluk Nyatu" readonly></td>
      <td><input type="text" value="Kalimantan Tengah" readonly></td>
    </tr>
    <tr>
      <td><input type="text" value="2018 – 2021" readonly></td>
      <td><input type="text" value="SMP Negeri 5 Kurun" readonly></td>
      <td><input type="text" value="Kalimantan Tengah" readonly></td>
    </tr>
    <tr>
      <td><input type="text" value="2021 – 2024" readonly></td>
      <td><input type="text" value="SMA Negeri 2" readonly></td>
      <td><input type="text" value="Kalimantan Tengah" readonly></td>
    </tr>
    <tr>
      <td><input type="text" value="2024 – sekarang" readonly></td>
      <td><input type="text" value="Universitas Janabadra" readonly></td>
      <td><input type="text" value="Yogyakarta" readonly></td>
    </tr>
  </table>

  <p>Uraian Cita-cita:</p>
  <textarea rows="9" readonly>Dalam lima tahun ke depan, saya menargetkan kesempatan studi atau magang di luar negeri agar bisa belajar langsung di lingkungan global.
  
	Saya ingin menjelajahi berbagai negara sambil menguasai setidaknya tiga bahasa baru untuk memperluas jaringan dan wawasan budaya.
	
	Saat kembali, saya berharap membawa pengalaman internasional yang bisa saya bagikan dan manfaatkan untuk membangun karier yang berdampak di tanah air.</textarea>

</div>

</body>
</html>
