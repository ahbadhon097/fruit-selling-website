<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['contact'];

$e = $_POST['prod_name'];
$f = $_POST['note'];
$g = $_POST['date'];
// query
$sql = "UPDATE customer 
        SET customer_name=?, address=?, contact=?, prod_name=?, note=?, expected_date=?
		WHERE customer_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$e,$f,$g,$id));
header("location: customer.php");

?>