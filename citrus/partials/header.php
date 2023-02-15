<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');  // шукає файл по всьому сервері
//var_dump($_SERVER['DOCUMENT_ROOT'] . 'config/bd.php');
require($_SERVER['DOCUMENT_ROOT'] . '/config/helpers.php'); 

// старт сесії 
if (!isset($_SESSION)) 
{
  session_start();
}
  
// що використовується, сесії чи кукі
$is_session = isset($_SESSION['user_id']) && $_SESSION['user_id'] != null; // true/false
$is_cookie = isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null; // true/false

if( $is_session || $is_cookie) {
    $userID = $is_session ? $_SESSION['user_id'] : $_COOKIE['user_id'];
    $sql = "SELECT * FROM users WHERE id=" . $userID;
    
    $result = mysqli_query($conn, $sql);  // видати результат зі змінних conn i sql
    $user = $result->fetch_assoc();
    
    // перевірка ролі користувача для обмеження доступу
  if($user['role'] != "admin") {   
      header("Location: ../login.php");
  }  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume Admin</title>

    <!-- Custom fonts for this template-->
    <link href="/citrus/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/citrus/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  
