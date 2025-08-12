<?php
require_once '../db.php';
$stmt = $dbh->prepare('SELECT * FROM tbldoctor');
$stmt->execute();
$doctors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctor List</title>
    <link rel="stylesheet" href="../css/templatemo-medic-care.css">
</head>
<body>
    <h1>Doctors</h1>
    <a href="add.php">Add Doctor</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Specialization</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($doctors as $doctor): ?>
        <tr>
            <td><?= htmlspecialchars($doctor['ID']) ?></td>
            <td><?= htmlspecialchars($doctor['FullName']) ?></td>
            <td><?= htmlspecialchars($doctor['MobileNumber']) ?></td>
            <td><?= htmlspecialchars($doctor['Email']) ?></td>
            <td><?= htmlspecialchars($doctor['Specialization']) ?></td>
            <td>
                <a href="edit.php?id=<?= $doctor['ID'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $doctor['ID'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>