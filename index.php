<?php
include 'conn.php';
$sql = "SELECT * FROM  siswa";
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        $data[]=$row;
    }
}else{
    echo"Data Kosong";
}
header('Content-Type: application/json');
echo json_encode($data);
$conn->close();
?>