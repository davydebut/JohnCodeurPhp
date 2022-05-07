<?php

try {
    $database = new PDO('mysql:host=localhost;dbname=store', 'root', '');
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('ERROR : ' . $e->getMessage());
}

/* $results = $database->query('SELECT first_name, last_name FROM customers');

while ($row = $results->fetch()) {
    echo $row['first_name'] . " " . $row['last_name'] . '<br>';
}
 */

$sql = $database->prepare('INSERT INTO customers(first_name, last_name) VALUES (?,?)');

$firstName = "Johnny";
$lastName = "Halliday";

$sql->execute(array($firstName, $lastName));
