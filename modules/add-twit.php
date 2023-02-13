<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');  
//var_dump($_POST);
// те що у пост id потрапляє у змінну user_id
$user_id = $_POST['user_id'];
// у текст то що написано

$title = $_POST['title']; //+
$imageName = ''; //+
$descr = $_POST['description']; //+

$imageFon = '';  // fon_image
$fon_img_desc = $_POST['fon_img_desc']; //+

$href = $_POST['hrefka']; //+
$part = $_POST['filter'];  //+

$imagFon2 = '';  // fon_image 2
$fon_desc2 = $_POST['fon_desc2'];

$imagFon3 = '';  // fon_image 3
$fon_desc3 = $_POST['fon_desc3'];

if(!empty ($_FILES)) {
    // додавання зображення
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';  // папка куди буде зберігатися
    
    // випадкове імя до цього зображення
    $ext = pathinfo($_FILES['image']['name']);
    // отримати тип файлу $ext['extension']
    $imageName = generateRandomString(20) . time() . "." . $ext['extension'];
    // шлях до папки + імя картинки
    $uploadfile = $uploaddir . $imageName;

    // якщо файл не завантажений
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        echo "Можлива атака за допомогою файлового завантаження!\n";
        // зупинка дії коду
        die();
    }
    
}

$sql = "INSERT INTO portfolio 
( title, image, description, fon_img, fon_img_desc, hrefka, part, fon_2, fon_desc2, fon_3, fon_desc3) 
VALUES 
('" . $title . "', '" . $imageName . "', '" . $descr . "', '" . $imageFon . "', '" . $fon_img_desc . "',
 '" . $href . "', '" . $part . "', '" . $imagFon2 . "', '" . $fon_desc2 . "', '" . $imagFon3 . "', '" . $fon_desc3 . "')";
var_dump ($sql);
        if (mysqli_query($conn, $sql)) {
            // перевірка і конкантинація
            $html = "<li>";
            $html .= $descr;
            if($imageName != '') {
                $html.= "<img src='/uploads/$imageName'>";
            }
            $html .= "</li>";
            echo $html;
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }

        /*if (mysqli_query($conn, $sql)) {
            // перевірка і конкантинація
            $fimg = "<li>";
            $fimg .= $fon_img_desc;
            if($imageFon != '') {
                $fimg.= "<img src='/uploads/$imageFon'>";
            }
            $fimg .= "</li>";
            echo $fimg;
        } else {
            echo "Error: " . $sql . "<br>" . mysql_error($conn); 
        }
        */

// функція для випадкового імя зображення
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
