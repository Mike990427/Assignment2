<?php 

global $count;
global $db;

session_start(); 
echo "<h1>Member ONLY!!!!!!!</h1>";

$host = '127.0.0.1'; $database = 'elevator'; $tablename = 'elevatorNetwork'; 
$path = 'mysql:host=' . $host . ';dbname=' . $database; $user = 'mike'; $password = '190816';

function connect(string $path, string $user, string $password) {
    $db = new PDO($path,$user, $password);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $db->beginTransaction();
    return $db; 
}

function update(string $path, string $user, string $password, string $tablename, int $node_ID, int $new_status, int $new_Floor) : void {
    try{
        $db = connect($path, $user, $password);
        $query = 'UPDATE ' . $tablename . ' SET status = :stat, currentFloor = :curFloor WHERE nodeID = :id' ;    // Note: Risks of SQL injection
        $statement = $db->prepare($query);
        $statement->bindValue('stat', $new_status); 
        $statement->bindValue('id', $node_ID); 
        $statement->bindValue('curFloor', $new_Floor);
        $statement->execute();                      // Execute prepared statement
        
        //Retruen number of rows that were updated
        $count = $statement->rowCount();
        if($count == 0){
            throw new Exception('<br/><br/>Error - Database unchaged !!!<br/><br/>');
        }
        echo "<br/><br/>Success - Database Updated<br/><br/>";
        $db->commit();
    }catch (Exception $e) {
        echo $e->getMessage();
    }

}

function showtable(string $path, string $user, string $password, $tablename) {
    $db = connect($path, $user, $password); 
    $query = "SELECT * FROM $tablename";  // Note: Risk of SQL injection
    $rows = $db->query($query); 
    foreach ($rows as $row) {
        var_dump($row);
        echo "<br><br>";
    }
}

// Run
connect($path, $user, $password);

if(isset($_POST['nodeID'])) { $node_ID = $_POST['nodeID']; }
if(isset($_POST['status'])) { $new_status = $_POST['status']; }
if(isset($_POST['currentFloor'])) { $new_Floor = $_POST['currentFloor']; }

if(isset($_POST['update'])) {
        update($path, $user, $password, $tablename, $node_ID, $new_status, $new_Floor);
}

// Display content of database
showtable($path, $user, $password, $tablename); 




echo "<h1>Do you wanna <a href='logout.php'>logout</a>? </h1>";

?>

<html>
    <body>
        <h2>Form used to update/delete/add data to database</h2>
        <form action="member.php" method="post">
            nodeID: <input type='text' name='nodeID' /><br/>
            status: <input type='text' name='status' /><br/>
            currentFloor: <input type='text' name='currentFloor' /><br/>
            <input type="submit" value="UPDATE" name="update"/>
        </form>
    </body>
</html>