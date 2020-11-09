<?php
$host = 'localhost';
$dbname = 'sinhvien';
$user = 'root';
$password = 'phucan48';
$dns = 'mysql:host=' . $host . ';dbname=' . $dbname;

$pdo = new PDO($dns, $user, $password);
$query = 'SELECT * FROM sinhvien.students;';
$stmt = $pdo->query($query);

echo "<table width=50%>";

echo "<th>" . "id" . "</th>";
echo "<th>" . "name" . "</th>";
echo "<th>" . "city" . "</th>";
echo "<th>" . "email" . "</th>";



while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // echo $row['id'] . '<br>';
    // echo $row['name'] . '<br>';
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['emai'] . "</td>";

    echo "</tr>";
}

echo "</table>";
