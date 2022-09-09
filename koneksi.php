<?php
$dbh = new PDO('mysql:hodt=localhost;dbname=rumahsakitt','root','');
$query = $dbh->query('SELECT * FROM table_user');

while($data = $query->fetch( )){
    echo"</p>".$data["id"]."</p>";
}