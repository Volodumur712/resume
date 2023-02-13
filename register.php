
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/bd.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/link.php');
//require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');

if(!empty($_POST)) {

    $imja = $_POST['login'];
    $poshta = $_POST['email'];

    $parol = $_POST['password'];
    $passwordHash = password_hash($parol, PASSWORD_BCRYPT);
    // INSERT INTO `users` (`id`, `u_name`, `u_email`, `u_pass`, `role`) VALUES (NULL, 'we', 'we@we', 'we', 'admin');
      $sql = "INSERT INTO users (`u_name`, `u_email`, `u_pass`) VALUES ('$imja', '$poshta', '$passwordHash');";
      //var_dump($sql);
      if (mysqli_query($conn, $sql)) {
          echo "Нового користувача додано";
          header("Location: /login.php");
      } else {
          echo "Error: " . $sql . "<br>" . mysql_error($conn); 
      }
      mysqli_close($conn);
  }
?>

<div class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Vova</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" action="#" method="POST">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Реєстрація</h3>

            <div class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" name="login" />
              <label class="form-label" for="form2Example18">Name</label>
            </div>

            <div class="form-outline mb-4">
              <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" />
              <label class="form-label" for="form2Example18">Email address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Registr</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
          alt="Image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
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
        Email: <br/>
        <input type="text" name="email">
    </p>

    <p>
        Password: <br/>
        <input type="password" name="password">
    </p>

    <p>
        <input type="submit" name="submit" value="registr">
    </p>
</form> -->