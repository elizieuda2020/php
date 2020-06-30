<?php
// Create connection to the database
$conn = mysqli_connect("localhost","root","","loginphp");
//check for database connection error
if($conn->connect_errno >0){
    die("Unable to connection to dababase
    [".$conn->connect_error."]");
}else 
echo"";
session_start();
if(isset($_POST["save"])){
    //variables declaration
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(trim($username)!=""and trim($password)!= ""){
        //Sanitizes whatever is entered
        $username=stripcslashes($username);
        $password=stripcslashes($password);
        $username=strip_tags($_POST["username"]);
        $password=strip_tags($_POST["password"]);
        $username= mysqli_real_escape_string($conn,$username);
        $password= mysqli_real_escape_string($conn,$password);
        //SQL Query
        $query = mysqli_query($conn,"SELECT * FROM loginphp WHERE 
        username='$username' AND password ='$password'");
        //applay mysqli
        $numrows= mysqli_num_rows($query);
        if($numrows >0){
            $_SESSION["username"]= $username;
            //take them to location
            header("location://www.soengsouy.com/M2_Year4_PHP/");
            exit;
        }else{
            echo"Username or password is incorrect.";
        }
    }
}
?>