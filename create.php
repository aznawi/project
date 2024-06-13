<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Data Pengunjung</title>
</head>
<body>
    <h2>Masukkan Data Pengunjung</h2>

    <form action="proses.php" method="post">
        <div class="styled-form-create">

            <label for="nama_pengunjung">Nama Pengunjung :</label>
            <input type="text" id="nama_pengunjung" name="nama_pengunjung" required>

        </div>

        <div class="styled-form-create">

            <label for="no_hp">Handphone :</label>
            <input type="text" id="no_hp" name="no_hp" required>

        </div>

        <div class="styled-form-create">

            <label for="judul_buku">Buku </label>
            <select name="judul_buku" id="">
                    <option value="Belajar HTML">Belajar HTML</option>
                    <option value="Belajar CSS">Belajar CSS</option>
                    <option value="Belajar PHP">Belajar PHP</option>
                    <option value="Belajar PHYTON">Belajar PHYTON</option>
            </select>

        </div>

        <div class="styled-form-create">

            <label for="asal_instansi">Asal Instansi :</label>
            <input type="text" id="asal_instansi" name="asal_instansi" required>

        </div>

        <div class="styled-form-create">
                <input type="submit" name="b_masuk" value="Masuk">
        </div>
            
    </form>

</body>
</html>