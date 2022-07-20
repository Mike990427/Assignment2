<?php 
    
        //reading new added value
        $username = $_POST['username'];
        $password = $_POST['password'];
        //echo $newusername;
        //echo $newpassword;
    
        //reading existing credentials
        $saved = file_get_contents('../json/saved.json');
        $tempArray = json_decode($saved, true);

        $newCredentials["username"] = $username;
        $newCredentials["password"] = $password;

        //making new array
        $tempArray[] = $newCredentials;

        $newsaved = json_encode($tempArray,true);

        file_put_contents('../json/saved.json',$newsaved);
    
        /*foreach ( $tempArray as $item => $value){
            echo $item . ':' .$value;
            echo"<br>";
        }*/

    

    echo '<p>Please click <a href=\'../login.html\'>here</a> to go to the login page</p>'; 
    
    
    

?>