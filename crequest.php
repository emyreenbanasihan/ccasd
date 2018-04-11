<?php
// Remove below comments from header If  you are making calls from another server
	$dbPassword = ""; 
	$dbUsername = "root"; 
	$dbServer = "localhost"; 
	$dbDatabase = "db_ccasd";
	$q = $_GET['q'];
if(isset($q) && !empty($q)) {
	$conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbDatabase);
    $query = "SELECT ID, crop FROM tblcrops WHERE crop LIKE '$q%'";
    $result = mysqli_query($conn, $query);
    $res = array();
    while($resultSet = mysqli_fetch_assoc($result)) {
     $res[$resultSet['ID']] = $resultSet['crop'];
    }
    if(!$res) {
        $res[0] = 'Not found!';
    }
    echo json_encode($res);
}
?>