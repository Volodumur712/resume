<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');  

$title = $_POST['title']; //+
$imageName = ''; //+
$descr = $_POST['description']; //+

$imageFon = '';  // fon_img   +
$fon_img_desc = $_POST['fon_img_desc']; //+

$href = $_POST['hrefka']; //+
$part = $_POST['filter'];  

$imagFon2 = '';  // fon_2
$fon_desc2 = $_POST['fon_desc2'];

$imagFon3 = '';  // fon_3
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

$sql = "INSERT INTO portfolio (title, image, description, hrefka, part) 
VALUES ('" . $title . "', '" . $imageName . "', '" . $descr . "', '" . $href . "', '" . $part . "')";
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
