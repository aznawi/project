<h2>Data Pengunjung</h2>    



<?php

    require_once "connection.php";

    $sql = "SELECT * FROM pengunjung";
    $stmt = $connection->prepare($sql);
    $stmt->execute();

    //jadikan dalam variabel array
    $rows = $stmt->fetchAll();
?>
 <table class="styled-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pengunjung</th>
                <th>Handphone</th>
                <th>Buku</th>
                <th>Asal Instansi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $r) { ?>
                <tr>
                    <td><?php echo $r['id_pengunjung']; ?></td>
                    <td><?php echo $r['nama_pengunjung']; ?></td>
                    <td><?php echo $r['no_hp']; ?></td>
                    <td><?php echo $r['judul_buku']; ?></td>
                    <td><?php echo $r['asal_instansi']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>