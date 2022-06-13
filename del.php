<?php require_once('connect.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
$req="DELETE FROM message WHERE id=$id";
$result= mysqli_query($conn,$req);
}
if($result){
    echo "Supression réussie";
    header('location:display.php');
}


?>