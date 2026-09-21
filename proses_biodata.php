<?php
$nama  = htmlspecialchars($_POST['nama'] ?? '');
$ttl   = htmlspecialchars($_POST['ttl'] ?? '');
$tahun   = $_POST['tahun'] ?? [];
$sekolah = $_POST['sekolah'] ?? [];
$kota    = $_POST['kota'] ?? [];
$uraian  = htmlspecialchars($_POST['uraian'] ?? '');

echo "<h2>Data Biodata</h2>";
echo "Nama: $nama<br>";
echo "Tempat, Tanggal Lahir: $ttl<br><br>";

echo "<h3>Riwayat Sekolah</h3>";
echo "<table border='1' cellpadding='6' cellspacing='0'>
        <tr><th>Tahun</th><th>Nama Sekolah</th><th>Kota Sekolah</th></tr>";
for ($i = 0; $i < count($tahun); $i++) {
    if (trim($tahun[$i]) === '' && trim($sekolah[$i]) === '' && trim($kota[$i]) === '') continue;
    echo '<tr>';
    echo '<td>' . htmlspecialchars($tahun[$i])   . '</td>';
    echo '<td>' . htmlspecialchars($sekolah[$i]) . '</td>';
    echo '<td>' . htmlspecialchars($kota[$i])    . '</td>';
    echo '</tr>';
}
echo "</table><br>";

echo "<h3>Uraian Cita-cita (5 tahun ke depan)</h3>";
echo "<pre>$uraian</pre>";
?>
