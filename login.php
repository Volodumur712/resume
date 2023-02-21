
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');
//require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

if(!empty($_POST)) {
    $imja = $_POST['login'];
    //$poshta = $_POST['email'];

    $parol = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE u_name = '$imja'";
    // . '" AND password="' . $_POST['password'] . '";
    // var_dump($sql);
    //$result = $conn->query($sql);
    $result = mysqli_query($conn, $sql);
    //var_dump($result);

    $user = $result->fetch_assoc();
    var_dump($user);
    // перевірка чи вибрався
    //echo $user['id'];
    if($user) {
        $_SESSION["user_id"] = $user['id'];
        echo $user['id'];
    } else {
        $_SESSION["user_id"] = null;
    }
    

    if (password_verify($parol, $user['u_pass'])) {
        setcookie("user", $user['id'], time()+3600*24, "/");
        header("Location: /");
        
    } else {
     echo '<h1>Invalid login or password.</h1>
     </br>
     <h3>Please try again</h3>';
   }
}
?>

<div class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Увійдіть</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-2 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 29rem;" action="#" method="POST">

            <h3 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;">Дані для входу</h3>

            <div class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" name="login" />
              <label class="form-label" for="form2Example18">Login</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" value="1"> Запам'ятати
              </label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Ввійти</button>
            </div>

            <!-- <button class="btn" type="submit">
              <span class="btn__text">Submit</span>
              <svg class="btn__progress" viewBox="0 0 48 48" width="48px" height="48px">
                  <circle class="btn__progress-track" r="20" cx="24" cy="24" fill="none" stroke="#c7cad1" stroke-width="8" />
                  <circle class="btn__progress-fill" r="20" cx="24" cy="24" fill="none" stroke="#000000" stroke-width="8" transform="rotate(-90,24,24)" stroke-dasharray="125.66 125.66" stroke-dashoffset="125.66" />
                  <polyline class="btn__progress-check" points="12,24 20,32 36,16" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="34 34" stroke-dashoffset="34" />
              </svg>
            </button> -->
            <!-- розкоментувати у style.css i main.js -->

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Нагадати пароль?</a></p>
            <p>Ще немає аккаунта? <a href="register.php" class="link-info">Реєстрація тут</a></p>
          </form>
        </div>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
          alt="image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</div>

<!-- <form method="post">
    <p>
        Login: <br/>
        <input type="text" name="login">
    </p>

    <p>
        Password: <br/>
        <input type="password" name="password">
    </p>

    <p>
        <input type="submit" name="submit" value="Login">
    </p>
</form> -->