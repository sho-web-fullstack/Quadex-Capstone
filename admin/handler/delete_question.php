<!-- delete -->
<?php
$mysqli= new mysqli('localhost','root','','quadex');

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM questions WHERE id = '$id'";
    $query = $mysqli->query($sql) or die($mysqli->error);
}
?>

