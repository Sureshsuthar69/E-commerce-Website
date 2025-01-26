<?php

include ('connect.php');
session_start();
 if(isset($_SESSION["loggedin"])&&$_SESSION["loggedin"] === true){
    header("location:admin.php");
    exit;
 }

 require_once"connect.php";

 if (isset($_POST["signin"])){
    header("location:Admin Dashboard/admin.php");
    $username = $mysqli->real_escape_string($_POST["User"]); // Sanitize input
    $sql = "SELECT * FROM login WHERE username='$username'"; // Use prepared statement or escaping
    $result = $mysqli->query($sql);
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) { 
         echo "id: " . $row["Id"]. " - Name: " 
          . $row["username"]. " " . $row["Password"]. "<br>"; 
    } 
}  
else { 
    echo "No records has been found"; 
} 
$mysqli->close(); 
   if ($mysqli->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 

 }


$username = $password = $confirm_password = "";
$username_err = $password_err =
$confirm_password_err = "";

// // submitted
// if($_SERVER["REQUEST_METHOD"]
// =="POST")

//     if(empty(trim($_POST["username"])))
// {
//      $username_err = "please enter a username";
// } elseif(!preg_match('/^[a-zA-Z0_9_]+$/',trim($_POST["username"]))){
//     $username_err = "username can only conatain letters, number,and uderscores";
// } else{
//     $sql ="SELECT id FREOM user WHERE username = ?";
//     if($stmt =
//     $mysqli->prepare($sql)){
//         $stmt->blind_param("s",$param_username);
//         $param_username = trim($_POST["username"]);
        
//         if(stmt->execute()){
//             $stmt->store_result();
            

//         if($stmt->num_rows == 1){
//             $username_err = "this username is already taken";
//             }else{
//                 $username = trim($_POST["username"]);
//             }
//         } else{
//             echo"Oops! something went wrong. please try again later.";
//         }
//         $stmt->close();
//     }
// }

// if(empty(trim($_POST["password"]))){
//     $password_err = "please enter a password";
// } elseif(strlen(trim($_POST["password"]))<6)
// {
//     $password_err = "password must have 6 characters";
// }else{
//     $password = trim($_POST["password"]);
// }

//     if(empty(trim($_POST["confirm_password"])))
// {
//     $confirm_password_err = "please confirm password";
// }else{
//     $confirm_password = trim($_POST["confirm_password"]);
//     if(empty($password_err)&&($password = $confirm_password)){
//         // $
// }

// }