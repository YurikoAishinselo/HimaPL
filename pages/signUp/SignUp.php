<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../Global/css/styleLogin.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="container">
      <header>Signup Form</header>
      <div class="progress-bar">
        <div class="step">
          <p>Name</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Contact</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Birth</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Submit</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form method="post" action="signupAction.php" enctype="multipart/form-data">
          <div class="page slide-page">
            <div class="title">Basic Info:</div>
            <div class="field">
              <div class="label">Name</div>
              <input type="text" name="namaAnggota">
            </div>
            <div class="field">
              <div class="label">NIM</div>
              <input type="text" name="NIM">
            </div>
            <div class="field">
              <button class="firstNext next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Contact Info:</div>
            <div class="field">
              <div class="label">Email Address</div>
              <input type="text"name="email">
            </div>
            <div class="field">
              <div class="label">Phone Number</div>
              <input type="Number"name="phoneNumber">
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Date of Birth:</div>
            <div class="field">
              <div class="label">Date</div>
              <input type="date"name="birth">
            </div>
            <div class="field">
              <div class="label">Gender</div>
              <select name="gender">
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
              </select>
            </div>
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Details</div>
            <div class="field">
              <div class="label">Divisi</div>
              <select name="divisi">
                <option>Minat & Bakat</option>
                <option>Pengembangan Teknologi & Informasi</option>
                <option>Komunikasi & Informasi</option>
              </select>
            </div>
            <div class="field">
              <div class="label">Password</div>
              <input type="password"name="password">
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Previous</button>
              <input name="proses" type="submit" style="margin-top: -20px; height: 50px;padding-right: 10px; background-color: #1891e7; color:white;"></input>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="../../Global/js/scriptLogin.js"></script>

  </body>
</html>
