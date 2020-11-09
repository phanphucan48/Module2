<?php
$host = 'localhost';
$dbname = 'classicmodels';
$user = 'root';
$password = 'phucan48';
$dns = 'mysql:host=' . $host . ';dbname=' . $dbname;
$pdo = new PDO($dns, $user, $password);
$query = 'SELECT * FROM classicmodels.customers;';
$stmt = $pdo->query($query);
echo "<table width=50%>";

echo "<th>" . "ID" . "</th>";
echo "<th>" . "name" . "</th>";
// echo "<th>" . "city" . "</th>";
// echo "<th>" . "email" . "</th>";

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo  "<td>" . $row['customerNumber'] . "</td>";
    echo  "<td>" . $row['customerName'] . "</td>";
    echo "</tr>";
}
echo "</table>";
