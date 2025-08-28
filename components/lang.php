<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lang = $_POST['lang'] ?? 'en';
    header("Location: ".$_SERVER['PHP_SELF']."?lang=".$lang);
    exit;
}

$lang = $_GET['lang'] ?? 'en';
$buttonText = $lang === 'en' ? 'Change' : 'Cambiar';
?>