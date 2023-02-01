<html>
<head>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_guru">Nama Guru :</label>
                <input type="text" name="nama_guru" />
            </p>

            <p>
                <label for="alamat">Alamat :</label><br>
                <textarea name="alamat" id="" cols="30" rows="10"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jenis kelamin :</label>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki"/>Laki-Laki
                <input type="radio" name="jenis_kelamin" value="Prempuan"/>Prempuan
            </p>
            <p>
                <label for="nama_mapel">Nama Mapel :</label>
                <input type="text" name="nama_mapel" />
            </p>
            <p>
                <label for="ruangan">Ruangan :</label>
                <input type="text" name="ruangan" />
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim_data" />
            </p>
        </fieldset>
</form>
</center>
<a class="action-btn" href="tampil.php">Back</a>
</body>
</html>