<?php
include "./connction.php";
$id= $_GET["id"];
$query = "DELETE FROM all_players where id=$id";
$resault = mysqli_query($conn,$query);
if($resault){
    header("location: index.php?msg= deleted seccessfully");

}else{
    echo"error in order to delete";
}
?>