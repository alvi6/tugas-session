<?php
 $db = new PDO("mysql:host=localhost;dbname=rumahsakitt",'root','');
 $query = $db->query('select * from table_user');

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="edit.php?id=<?= $data['password']; ?>">
            <?= $data[''] ?>
        </a>
        
        <a href="proses_hapus.php?id=<?= $data['role']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>