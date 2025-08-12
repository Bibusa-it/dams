<?php
require_once '../db.php';
$stmt = $dbh->prepare('SELECT * FROM tblpatient');
$stmt->execute();
$patients = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient List</title>
    <link rel="stylesheet" href="../css/templatemo-medic-care.css">
</head>
<body>
    <h1>Patients</h1>
    <a href="add.php">Add Patient</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($patients as $patient): ?>
        <tr>
            <td><?= htmlspecialchars($patient['ID']) ?></td>
            <td><?= htmlspecialchars($patient['FullName']) ?></td>
            <td><?= htmlspecialchars($patient['MobileNumber']) ?></td>
            <td><?= htmlspecialchars($patient['Email']) ?></td>
            <td><?= htmlspecialchars($patient['Gender']) ?></td>
            <td><?= htmlspecialchars($patient['Age']) ?></td>
            <td><?= htmlspecialchars($patient['Address']) ?></td>
            <td>
                <a href="edit.php?id=<?= $patient['ID'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $patient['ID'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>