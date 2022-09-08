<?php
 $db = new PDO("mysql:host=localhost;dbname=tokopii",'root','');
 $query = $db->query('select * from tbbarang');

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="edit.php?id=<?= $data['harga']; ?>">
            <?= $data['nama'] ?>
        </a>
        
        <a href="proses_hapus.php?id=<?= $data['harga']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>