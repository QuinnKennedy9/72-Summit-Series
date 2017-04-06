<?php
$page = 'login';
if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === "true"){
  header("Location: dashboard");
  $loggedIn = "true";
}
?>
<?php
function format($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // $servername = "minigraphixca.domaincommysql.com";
        // $username = "access";
        // $password = "portfolio23";
        // $dbname = "mini";

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db_teamcanada";

        $u = format($_POST["email"]);
        $p = format($_POST['password']);

        $conn = new mysqli($servername, $username, $password,$dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM `users` WHERE `u_email` = '$u'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            if(password_verify($p,$row['p_phrase'])){
              $_SESSION["loggedIn"] = "true";
              header("Location: dashboard");
            }
          }
        } else {
          echo "<div class='centered'>Incorrect login information entered.</div>";
        }
      }
      ?>

      <section id="splash" class="">
        <div class="banner">LOGIN<div class="back"></div></div>
        <form id="loginForm" action="login" method="POST">
          <label for="user">email:</label>
          <input id="user" name="email" type="text"><br><br>
          <label for="pass">Passphrase:</label>
          <input id="pass" name="password" type="password"><br>
          <input type="submit" value="Login">
        </form>
        <div class="dark-overlay"></div>
          <div class="back-img"></div>
      </section>
