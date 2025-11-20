<?php
// Dane do bazy – docelowo weźmiemy je z GitHub Secrets (ENV),
// ale daję też wartości domyślne z README nauczyciela.

$DB_HOST = getenv('DB_HOST') ?: '136.114.93.122';
$DB_NAME = getenv('DB_NAME') ?: '89413'; // <-- ZMIEŃ NA SWÓJ NUMER ALBUMU
$DB_USER = getenv('DB_USER') ?: 'stud';
$DB_PASS = getenv('DB_PASSWORD') ?: 'Uwb123!!';

$dsn = "mysql:host={$DB_HOST};dbname={$DB_NAME};charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $DB_USER, $DB_PASS, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
} catch (PDOException $e) {
    die('Błąd połączenia z bazą: ' . htmlspecialchars($e->getMessage()));
}
