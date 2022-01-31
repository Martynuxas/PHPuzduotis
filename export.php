<?php

require("connection.php");

$query = 'SELECT * FROM people';
$result = mysqli_query($db, $query) or die(mysqli_error($db));

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Users.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('ID', 'Name', 'Email', 'Phone Number', 'Apartment address', 'Date and Time'),';');

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row,';');
    }
}
?>