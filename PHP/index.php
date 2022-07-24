<?php

//connecting to database
$db = new PDO(
    'mysql:host = 127.0.0.1; dbname=elevator',     // Data Source Name
    'mike',                                        // Username
    '190816'                                       // Password
);
//Return arrays with keys that are the name of the fields
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

echo 'query a database';
echo '<br/>';
//Query a database
$rows = $db->query('SELECT * FROM elevatorNetwork ORDER BY nodeID');
foreach ($rows as $row){
    var_dump($row);
    echo"<br />";
    echo"<br />";
}





echo"<br />";
echo"<br />";
echo"<br />";
echo"<br />";
echo"<br />";
echo"<br />";
echo 'query a specified database';
echo '<br/>';
//query specific data in a database
$query = 'SELECT * FROM elevatorNetwork WHERE nodeID = :nodeID';    //formatted query, parameters identified by ':'

$statement = $db->prepare($query);      //Object created from query that contains methods for fetching data 
$statement->bindValue('nodeID', 1);     //Query all entries with nodeID = 1

$result = $statement->execute();        //execute is the method for retrieving data using prepare (parameterized query)
$rows = $statement->fetchAll();         //Returns a list of all rows as arrays
var_dump($rows);



echo"<br />";
echo"<br />";
echo"<br />";
echo"<br />";
echo"<br />";
echo"<br />";
echo 'insert data into a database';
echo '<br/>';

$query = 'INSERT INTO elevatorNetwork (date,time,nodeID,status,currentFloor,requestedFloor,otherInfo)
            VALUES ("2022-02-23", "12:08:02", 4,1,1,1, "na")';
$result = $db->exec($query);
var_dump($result);      //true
echo"<br/>";
$error = $db->errorInfor()[2];
var_dump($error);       //NULL since no error
echo"<br/>";

$row = $db->query(' SELECT * FROM elevatorNetwork ORDER BY nodeID');
foreach ($rows as $row){
    var_dump($row);
    echo"<br/>";
    echo"<br/>";
}

?>