<?php
// Στοιχειο συνδεσης με τη βαση δεδομενων (πποεπιλογες του Xampp)
$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'equilend';

// δημιουργια συνδεσης με mySQL
$conn = new mySQLi ($host, $db_user, $db_name, $db_pass); // ονομασαμε εμεις τη μεταβλητη ετσι. μπορουσαμε να διαλεξουμε αλλο ονομα

if ($conn->connect_error) {
    die("Σφάλμα σύνδεσης:".$conn->connect_error);
}
$conn->set_charset("utf8mb4");