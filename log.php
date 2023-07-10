<?php
// Überprüfen, ob das Formular gesendet wurde
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    if ($username == 'admin_user' && $password == 'admin0103') {
        header('Location: index3.html');
        exit;
    } else {
     
        header("Location: index2.html?error=" . urlencode($error));
        exit;
    }
}
?>
