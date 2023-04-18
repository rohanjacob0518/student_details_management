<html>
    <head>
        <link rel="stylesheet" href="../../Assets/Stylesheets/style.css">
    </head>
    <body>
      <div class="bg-illustration">
        <div class="burger-btn">
          <span></span>
          <span></span>
         <span></span>
        </div>
      </div>
    
      <div class="login">
        <div class="container">
        <br>
        <a href="../../homepage.html" target="" class="previous">&laquo; Previous</a>
          <h1>Login to access to<br />your account</h1>
          <div class="login-form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <input type="text" id="sid" name="sid" placeholder="Student ID" required>
              <input type="date" id="dob" name="dob" required>
              <div class="remember-form">
                <input type="checkbox">
                <span>Remember me</span>
              </div>
              <p id="error" class="text-danger"></p>
              <div class="forget-pass">
                <a href="#">Forgot Student ID ?</a>
              </div>
              <button type="submit">LOG-IN</button>
            </form>
          </div>   
        </div>
      </div>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          $conn = mysqli_connect("localhost", "root", "", "stud");
          if (!$conn) 
          {
            die();
          } 
          else 
          {
            session_start();
            $sid = $_POST['sid'];
            $dob = $_POST['dob'];
            $_SESSION['sid']=$sid;
            $_SESSION['dob']=$dob;
            $sql = "SELECT * FROM stud1 WHERE sid='$sid'";
            $retval = mysqli_query($conn, $sql);
            if (!$retval) 
            {
              die();
            } 
            else 
            {
              $row = mysqli_fetch_array($retval);
              if ($row) 
              {
                if ($dob == $row['dob']) 
                {
                  header('location:studentrecord.php');
                } 
                else 
                {
                  echo "<script>document.getElementById('error').innerHTML='Invalid Credentials'</script>";
                }
              } 
              else 
              {
               echo "<script>document.getElementById('error').innerHTML='Invalid Credentials'</script>";
              }
            }
          }
        }
      ?>
   </body>
</html>