<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','cozy');

$mysqli = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);


 $sql = "SELECT * FROM product"; // Use prepared statement or escaping
 $result = $mysqli->query($sql);
if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) { 
         echo "id: " . $row["id"]. " - Name: " 
          . $row["product_name"]. " " . $row["product_price"]. "<br>";  } 
}  
else { 
    echo "No records has been found"; 
} 
$mysqli->close(); 
   if ($mysqli->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 





// if ($mysqli->connect_error) { 
//     die("Connection failed: " . $conn->connect_error); 
// } 

// $sql = "SELECT * FROM login username=".$_POST["username"]; 
// $result = $mysqli->query($sql); 
// if ($result->num_rows > 0) { 
//     while($row = $result->fetch_assoc()) { 
//       echo "id: " . $row["Id"]. " - Name: " 
//           . $row["username"]. " " . $row["Password"]. "<br>"; 
//     } 
// }  
// else { 
//     echo "No records has been found"; 
// } 
// $mysqli->close(); 
?> 
