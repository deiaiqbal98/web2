  <?php
    session_start();
    if (isset($_POST['Login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if ($user == "admin" && $pass == "admin") {
            $_SESSION['login'] = $user;
            echo "<center>";
            echo "<h1>Anda Berhasil LOGIN</h1>";
            echo "<h2>Klik <a href='session_2.php'>Di Sini</a> Untuk Menuju Ke Halaman Pemeriksaan Session";
            echo "</center>";
        } else {
            echo "<script>alert('Maaf, Username / Password Yang Anda Inputkan Salah.')</script>";
        }
    } else {
    }
    ?>
  <!DOCTYPE html>
  <html>

  <head>
      <meta charset="utf-8">
      <title>Login Here..</title>

      <style type="text/css">
          body {
              background: lightslategray;
          }

          table {
              font-weight: bold;
          }
      </style>

  </head>

  <body>
      <center>
          <form action="" method="post">
              <h2>Login Here..</h2>
              <table>
                  <tr>
                      <td>Username</td>
                      <td>:</td>
                      <td><input type="text" name="user" placeholder="Username anda"><br></td>
                  </tr>
                  <tr>
                      <td>Password</td>
                      <td>:</td>
                      <td> <input type="password" name="pass" placeholder="Password anda"><br></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td></td>
                      <td><input type="submit" name="Login" value="Log In"></td>
                  </tr>
              </table>
          </form>
      </center>
  </body>

  </html>