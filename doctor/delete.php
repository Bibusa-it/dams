<?php
require_once '../db.php';
if (!isset($_GET['id'])) {
    header('Location: list.php');
    exit;
}
$id = $_GET['id'];
$stmt = $dbh->prepare('DELETE FROM tbldoctor WHERE ID=?');
$stmt->execute([$id]);
header('Location: list.php');
exit;