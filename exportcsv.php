<?php 

require "functions.php";

$sql = "SELECT * FROM karyawan WHERE img = 'image2.jpg'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="export.csv"');
    $file = fopen('php://output', 'w');
    $row = $result->fetch_assoc();
    fputcsv($file, array_keys($row));
    while ($row) {
        fputcsv($file, $row);
        $row = $result->fetch_assoc();
    }
    fclose($file);
} else {
    echo "No records found.";
}

$conn->close();

?>