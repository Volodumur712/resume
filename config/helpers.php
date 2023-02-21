<?php
// чи авторизований користувач
function isLogin() {
    // створити змінні сесії і кукі
    $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null; // true/false
    $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null; // true/false

    // перевірка чи є сесія або кукі
    if( $is_session || $is_cookie ) {
        return true;
    } else {
        return false;
    }
}

// отримання поточного авторизованого користувача
function getCurrentUser() {
    // змінити змінну на глобальну щоб бачити її всюди
    global $conn;
    // створити змінні сесії і кукі
    $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null; // true/false
    $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null; // true/false
    // перевірка 
    if( $is_session || $is_cookie ) {
        $userID = $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];
        // вибір користувача 
        $sql = "SELECT * FROM users WHERE id=" . $userID;

        $result = mysqli_query($conn, $sql); // видати результат зі змінних conn i sql
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

// отримати id користувача
/*
function getUserID() {
    $is_session = isset($_SESSION["user_id"]) && $_SESSION["user_id"] != null; // true/false
    $is_cookie = isset($_COOKIE["user_id"]) && $_COOKIE["user_id"] != null; // true/false

    if( $is_session || $is_cookie ) {
        return $is_session ? $_SESSION["user_id"] : $_COOKIE["user_id"];
    } else {
        return null;
    }
}
*/

// отримати всі твіти
/* function getAllTwitsByUser($userID) {
    global $conn;
    // СОРТУВАННЯ У ЗВОРОТНЬОМУ ПОРЯДКУ  ORDER BY id DESC"
    $sql = "SELECT * FROM posts WHERE user_id=" . $userID;

    $result = mysqli_query($conn, $sql);

    return $result; 
} */

/*function getAll() {
    global $conn;
    // СОРТУВАННЯ У ЗВОРОТНЬОМУ ПОРЯДКУ  ORDER BY id DESC"
    $sql = "SELECT * FROM posts;
    $result = mysqli_query($conn, $sql);
    return $result; 
}
*/