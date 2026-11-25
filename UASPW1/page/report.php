
<?php

$pesan = "";

if (isset($_POST['judul'])) {

    $judul = trim($_POST['judul']);
    $deskripsi = trim($_POST['deskripsi']);
    $topik = $_POST['topik'] ?? "";

    if ($judul == "") {

        $pesan = "judul wajib diisi.";

    } elseif ($deskripsi == "") {

        $pesan = "Deskripsi wajib diisi.";

    } else {

        $pesan = "Terima kasih, laporan dari film " .
                 htmlspecialchars($judul) .
                 " dengan tipe  " .
                 htmlspecialchars($topik) .
                 " berhasil dikirim.";

    }

}

?>

<p><?php echo $pesan; ?></p>

<form action="utama.php?page=report" method="post">
    <div class="report">
        <h2>Report</h2>
        
            <div class="form-row">
                <label>Judul Film:</label>
                <input type="text" name="judul" id="judul" placeholder="Isi judul" required>
            </div>

            <div class="form-row">
            <label>Tipe:</label>
                <select name="topik" id="topik">

                    <option value="Series">Series</option>
                    <option value="Movies">Movies</option>

                </select>

            </div>

            <div class="form-row">
                <label>Alasan: </label> 
                <textarea rows="8" name="deskripsi" id="deskripsi" placeholder="Isi alasan masalah" required></textarea>
            </div>
            
            <div class="form-btn">
                <input type="submit" value="Kirim">
                <input type="reset" value="Reset">
            </div>
    </div>
</form>