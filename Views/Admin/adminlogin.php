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
              <input type="text" id="user" name="user" placeholder="Username" required>
              <input type="password" id="pass" name="pass" placeholder="Password" required>
              <p id="error" class="text-danger"></p>
              <button type="submit">LOG-IN</button>
            </form>
          </div>   
        </div>
      </div>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            if (($user == 'ADMIN')&&($pass == 'pass')) 
            {
                header('location:adminchoice.html');
            } 
            else 
            {
              echo "<script>document.getElementById('error').innerHTML='Invalid Credentials'</script>";
            }
        } 
      ?>
   </body>
</html>