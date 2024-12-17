<?php

include('db.php');

$sql = "SELECT id,name,photo,rating from all_players" ;
$result = $conn->query($sql);
 
if($result->num_rows >0){
while($row = $result->fetch_assoc()){
    echo "<img src = '".$row['photo'].">".$row['name'].">"."<br>";   
}
}else{
    echo "0 results";
  }
  $conn->close();

?>
