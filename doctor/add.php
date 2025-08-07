<?php
require_once '../db.php';
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $specialization = $_POST['specialization'];
    $password = md5($_POST['password']);
    $stmt = $dbh->prepare('INSERT INTO tbldoctor (FullName, MobileNumber, Email, Specialization, Password) VALUES (?, ?, ?, ?, ?)');
    if ($stmt->execute([$fullname, $mobile, $email, $specialization, $password])) {
        header('Location: list.php');
        exit;
    } else {
        $message = 'Error adding doctor.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Doctor</title>
    <link rel="stylesheet" href="../css/templatemo-medic-care.css">
</head>
<body>
    <h1>Add Doctor</h1>
    <form method="post">
        <label>Full Name: <input type="text" name="fullname" required></label><br>
        <label>Mobile Number: <input type="text" name="mobile" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Specialization: <input type="text" name="specialization" required></label><br>
        <label>Password: <input type="password" name="password" required></label><br>
        <button type="submit">Add</button>
    </form>
    <p style="color:red;"><?= $message ?></p>
    <a href="list.php">Back to List</a>
</body>
</html>