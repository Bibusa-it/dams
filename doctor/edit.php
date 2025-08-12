<?php
require_once '../db.php';
$message = '';
if (!isset($_GET['id'])) {
    header('Location: list.php');
    exit;
}
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $specialization = $_POST['specialization'];
    $stmt = $dbh->prepare('UPDATE tbldoctor SET FullName=?, MobileNumber=?, Email=?, Specialization=? WHERE ID=?');
    if ($stmt->execute([$fullname, $mobile, $email, $specialization, $id])) {
        header('Location: list.php');
        exit;
    } else {
        $message = 'Error updating doctor.';
    }
} else {
    $stmt = $dbh->prepare('SELECT * FROM tbldoctor WHERE ID=?');
    $stmt->execute([$id]);
    $doctor = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$doctor) {
        header('Location: list.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Doctor</title>
    <link rel="stylesheet" href="../css/templatemo-medic-care.css">
</head>
<body>
    <h1>Edit Doctor</h1>
    <form method="post">
        <label>Full Name: <input type="text" name="fullname" value="<?= htmlspecialchars($doctor['FullName']) ?>" required></label><br>
        <label>Mobile Number: <input type="text" name="mobile" value="<?= htmlspecialchars($doctor['MobileNumber']) ?>" required></label><br>
        <label>Email: <input type="email" name="email" value="<?= htmlspecialchars($doctor['Email']) ?>" required></label><br>
        <label>Specialization: <input type="text" name="specialization" value="<?= htmlspecialchars($doctor['Specialization']) ?>" required></label><br>
        <button type="submit">Update</button>
    </form>
    <p style="color:red;"> <?= $message ?> </p>
    <a href="list.php">Back to List</a>
</body>
</html>