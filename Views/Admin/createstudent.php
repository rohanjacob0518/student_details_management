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
        <a href="adminchoice.html" target="" class="previous">&laquo; Previous</a>
          <h1>Enter New Student<br />Details</h1>
          <div class="login-form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                Enter Student Name:
              <input type="text" id="name" name="name" placeholder="Student Name" required>
                Enter Student DOB:
              <input type="date" id="dob" name="dob" required>
                Choose Student Course:
                <select id="course" name="course" required>
                <option value="none" selected disabled hidden>Select an Option</option>
                    <option value="IMCA">IMCA</option>
                    <option value="MCA">MCA</option>
                    <option value="MBA">MBA</option>
                    <option value="Btech">Btech</option>
                    <option value="Mtech">Mtech</option>
                    <option value="BDes">BDes</option>
                </select>
                <p id="out"></p>
              <button type="submit">SUBMIT</button>
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
            $name = $_POST['name'];
            $dob = $_POST['dob'];
            $_SESSION['name']=$name;
            $course =$_POST['course'];
            $sql = mysqli_query($conn,"INSERT INTO stud1 (`name`,`dob`, `course`) VALUES ('$name','$dob','$course')");
            $retval = mysqli_query($conn, $sql);
            if(!$sql)
            {
              echo "<script>document.getElementById('out').innerHTML='Student Creation Failed'</script>";
            }
            else
            {
              header('location:studentcreation.php');
              
            }
          }
        }
      ?>
   </body>
</html>