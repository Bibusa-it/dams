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
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $stmt = $dbh->prepare('UPDATE tblpatient SET FullName=?, MobileNumber=?, Email=?, Gender=?, Age=?, Address=? WHERE ID=?');
    if ($stmt->execute([$fullname, $mobile, $email, $gender, $age, $address, $id])) {
        header('Location: list.php');
        exit;
    } else {
        $message = 'Error updating patient.';
    }
} else {
    $stmt = $dbh->prepare('SELECT * FROM tblpatient WHERE ID=?');
    $stmt->execute([$id]);
    $patient = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$patient) {
        header('Location: list.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Patient</title>
    <link rel="stylesheet" href="../css/templatemo-medic-care.css">
</head>
<body>
    <h1>Edit Patient</h1>
    <form method="post">
        <label>Full Name: <input type="text" name="fullname" value="<?= htmlspecialchars($patient['FullName']) ?>" required></label><br>
        <label>Mobile Number: <input type="text" name="mobile" value="<?= htmlspecialchars($patient['MobileNumber']) ?>" required></label><br>
        <label>Email: <input type="email" name="email" value="<?= htmlspecialchars($patient['Email']) ?>" required></label><br>
        <label>Gender: <select name="gender" required><option value="Male"<?= $patient['Gender']==='Male'?' selected':'' ?>>Male</option><option value="Female"<?= $patient['Gender']==='Female'?' selected':'' ?>>Female</option><option value="Other"<?= $patient['Gender']==='Other'?' selected':'' ?>>Other</option></select></label><br>
        <label>Age: <input type="number" name="age" value="<?= htmlspecialchars($patient['Age']) ?>" required></label><br>
        <label>Address: <input type="text" name="address" value="<?= htmlspecialchars($patient['Address']) ?>" required></label><br>
        <button type="submit">Update</button>
    </form>
    <p style="color:red;"> <?= $message ?> </p>
    <a href="list.php">Back to List</a>
</body>
</html>