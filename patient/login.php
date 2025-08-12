<?php
session_start();
require_once '../db.php';
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT ID, Email FROM tblpatient WHERE Email=? AND Password=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$email, $password]);
    $patient = $stmt->fetch(PDO::FETCH_ASSOC);
    if($patient) {
        $_SESSION['patientid'] = $patient['ID'];
        $_SESSION['patientemail'] = $patient['Email'];
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Invalid email or password.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Patient Login</title>
    <link rel="stylesheet" href="../css/templatemo-medic-care.css">
</head>

<body>
    <h1>Patient Login</h1>
    <form method="post">
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Password: <input type="password" name="password" required></label><br>
        <button type="submit" name="login">Login</button>
    </form>
    <?php if(isset($error)) echo '<p style="color:red;">'.$error.'</p>'; ?>
    <a href="../index.php">Back to Home</a>
</body>

</html>