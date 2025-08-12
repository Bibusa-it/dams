<?php
require_once '../db.php';
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $password = md5($_POST['password']);
    $stmt = $dbh->prepare('INSERT INTO tblpatient (FullName, MobileNumber, Email, Gender, Age, Address, Password) VALUES (?, ?, ?, ?, ?, ?, ?)');
    if ($stmt->execute([$fullname, $mobile, $email, $gender, $age, $address, $password])) {
        header('Location: login.php');
        exit;
    } else {
        $message = 'Error registering patient.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Patient Registration</title>
    <link rel="stylesheet" href="../css/templatemo-medic-care.css">
</head>

<body>
    <h1>Patient Registration</h1>
    <form method="post">
        <label>Full Name: <input type="text" name="fullname" required></label><br>
        <label>Mobile Number: <input type="text" name="mobile" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Gender: <select name="gender" required>
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select></label><br>
        <label>Age: <input type="number" name="age" required></label><br>
        <label>Address: <input type="text" name="address" required></label><br>
        <label>Password: <input type="password" name="password" required></label><br>
        <button type="submit">Register</button>
    </form>
    <p style="color:red;"><?= $message ?></p>
    <a href="login.php">Back to Login</a>
</body>

</html>