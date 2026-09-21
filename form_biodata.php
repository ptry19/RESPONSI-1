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
<form method="POST" action="proses_biodata.php">
<h2>Form Biodata</h2>

  <p>Nama:</p>
  <input type="text" name="nama" required>

  <p>Tempat, Tanggal Lahir:</p>
  <input type="text" name="ttl" required>

  <p>Riwayat Sekolah (SD – Kuliah):</p>
  <table>
    <tr>
      <th>Tahun</th>
      <th>Nama Sekolah</th>
      <th>Kota Sekolah</th>
    </tr>
    <tr>
      <td><input type="text" name="tahun[]" required></td>
      <td><input type="text" name="sekolah[]" required></td>
      <td><input type="text" name="kota[]" required></td>
    </tr>
	 <tr>
      <td><input type="text" name="tahun[]" required></td>
      <td><input type="text" name="sekolah[]" required></td>
      <td><input type="text" name="kota[]" required></td>
    </tr>
	 <tr>
      <td><input type="text" name="tahun[]" required></td>
      <td><input type="text" name="sekolah[]" required></td>
      <td><input type="text" name="kota[]" required></td>
    </tr>
  </table>

  <p>Uraian Cita-cita:</p>
  <textarea name="uraian" rows="9" required></textarea>

  <button type="submit">Kirim</button>
</form>

</body>
</html>
