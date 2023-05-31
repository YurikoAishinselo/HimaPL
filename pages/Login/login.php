<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../Global/css/styleLogin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <header>Login Form</header>
      <div class="progress-bar">
      <div class="form-outer">
        <form method="post" action="loginAction.php" enctype="multipart/form-data">
          <div class="page slide-page">
            <div class="field">
              <div class="label">NIM</div>
              <input type="text" name="NIM">
            </div>
            <div class="field">
                <div class="label">Password</div>
                <input type="password" name="password">
            </div>
            <div class="field btns">
                <input  type="submit" name="submit" value="Login" 
                style="background-color: #1891e7;height:60px;padding-right: 10px;color: white; font-family: 'Poppins', sans-serif;">
            </div>
          </div>
        </form>
        <a href="../signUp/SignUp.php" style="color:black;">Don't have Account <p style="display:inline-block;color:#1891e7;text-decoration: underline;">SignUp first</p><a>
      </div>
    </div>
    <script src="../../Global/js/scriptLogin.js"></script>

  </body>
</html>
