<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');  


$id = $_POST['id']; //+

$imageFon = '';  // fon_img   +
$fon_img_desc = $_POST['fon_img_desc']; //+

if(!empty ($_FILES)) {
    // додавання зображення
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/uploads/';  // папка куди буде зберігатися
    $ext = pathinfo($_FILES['image']['name']);
    $imageFon = generateRandomString(20) . time() . "." . $ext['extension'];
    $uploadfile = $uploaddir . $imageFon;
    if (!move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
        echo "Можлива атака за допомогою файлового завантаження!\n";
        die();
    }
}

// UPDATE `portfolio` SET `fon_img` = 'k2ww.jpg', `fon_img_desc` = ' ww Page contact' WHERE `portfolio`.`id` = 14;
$sql = "UPDATE portfolio SET fon_img = '" . $imageFon . "', fon_img_desc = '" . $fon_img_desc . "' WHERE `portfolio`.`id` = '" . $id . "'";

var_dump ($sql);
        if (mysqli_query($conn, $sql)) {
            // перевірка і конкантинація
            $html = "<li>";
            $html .= $fon_img_desc;
            if($imageFon != '') {
                $html.= "<img src='/uploads/$imageFon'>";
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
