<?php
$db = new PDO(
    'mysql:host = 127.0.0.1; dbname=elevator',     // Data Source Name
    'mike',                                        // Username
    '190816'                                       // Password
);

//Return arrays with keys that are the name of the fields
$db->setAttribute(PDO::ALTER_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$rows = $db->query('SELECT * FROM elecatorNetwork ORDER BY nodeID');
foreach ($rows as $row){
    var_dump($row);
    echo"<br />";
    echo"<br />";
}

?>